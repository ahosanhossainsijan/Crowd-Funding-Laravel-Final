<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\CampaignRequest;
use Validator;
use DB;
use PDF;
Use App\Models\User;
Use App\Models\Campaign;
Use App\Models\Donation;
Use App\Models\Admin;
Use App\Models\Personal;
Use App\Models\ContactAdmin;
Use App\Models\Organization;
Use App\Models\Report;
Use App\Models\Volunteer;
use Carbon\Carbon;

class userController extends Controller
{
    public function index(Request $req)
    {
        
        $client = new \GuzzleHttp\Client();
          $response = $client->request('GET', 'http://localhost:3000/campaign/campaignlist');
          if($response->getStatusCode() == 200){
              $data =json_decode($response->getBody(),true);
             $camp = $data['campaigns'];
             $req->session()->flash('print',true);

             return view('user.index')->with('camp',$camp );
            }
          else{
            echo $response->getStatusCode();
             $camp = null;
              return view('user.index')->with('camp',$camp );
        }
        //return view('user.index');
    }

    public function profile(Request $req)
    {
        $personal = Personal::getPersonalById($req->session()->get('uid'));
        return view('user.profile',$personal);
    }

    public function edit($id, Request $req){
        $validation = Validator::make($req->all(),[
            'name' => 'required',
            'phone' => 'required | min:11|max:14',
            'email' => 'required | email',
            'address' => 'required | min : 5',
            'sq' => 'required'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors',$validation->errors());
        }

        Personal::updatePersonal($id,$req);
        return redirect()->route('user.profile');
    }
    
    

    public function changepropic($id, Request $req){
        if($req->hasFile('propic')){
            $file = $req->file('propic');
            if(!($file->getClientOriginalExtension() == "jpg" || $file->getClientOriginalExtension() == "jpeg" || $file->getClientOriginalExtension() == "png")){
                $req->session()->flash('errmsg','File Format '.$file->getClientOriginalExtension().' is not supported for profile pic!!!');
                return redirect()->route('user.profile');
            }
            else{
                $filename = $req->session()->get('uname').".".$file->getClientOriginalExtension();
                $user = User::find($id);
                $user->image = '/system_images/'.$filename;
                $user->save();
                if($file->move('system_images',$filename)){
                    return redirect()->route('user.profile');
                }
                else{
                    $req->session()->flash('errmsg','Something Went Wrong!!!');
                    return redirect()->route('user.profile');
                }
            }    
        }
    }


    
    public function create()
    {
        return view('user.createcampagin');
    }

    public function created(Request $req){

        if($req->hasFile('file')){
            $file = $req->file('file');
            if(!($file->getClientOriginalExtension() == "jpg" || $file->getClientOriginalExtension() == "jpeg" || $file->getClientOriginalExtension() == "png")){
                $req->session()->flash('errmsg','File Format '.$file->getClientOriginalExtension().' is not supported for profile pic!!!');
                return redirect()->route('user.create');
            }
            else{
                $filename = $req->title.".".$file->getClientOriginalExtension();
                if($file->move('system_images',$filename)){
                    Campaign::createCampaign($req,'/system_images/'.$filename);
                    return redirect()->route('user.index');
                }
                else{
                    $req->session()->flash('errmsg','Something Went Wrong!!!');
                    return redirect()->route('user.create');
                }
            }    
        }
        
    }

    public function donationlist(Request $req)
    {
        $id= $req->session()->get('uid');
        $donations = Donation::getAllDonations($id);
        return view('user.donationHistory')->with('donations',$donations);
    }

    public function myCampaign(Request $req)
    {
        $id= $req->session()->get('uid');

        $campaigns = Campaign::getReleasedCampaigns($id);
        return view('user.myCampaign')->with('campaigns',$campaigns);
    }

    public function campaignslist()
    {
        $campaigns = Campaign::getAllRunningCampaings();
        return view('user.campaignlist')->with('campaigns',$campaigns);
    }

    public function campaignedit(Request $req,$id)
    {
        $req->session()->put('cid',$id);
        $campaign = Campaign::getCampaignById($id);
        return view('user.campaignedit',$campaign);
    }

    public function campaignupdate($id,Request $req)
    {
        $validation = Validator::make($req->all(),[
            'title' => 'required',
            'description'=>'required',
            'ed'=>'required'
        ]);
        if($validation->fails()){
            return back()
                    ->with('errors',$validation->errors())
                    ->withInput();
        }
        $campaign = Campaign::find($id);
        $campaign->title = $req->title;
        $campaign->description = $req->description;
        $campaign->endDate = $req->ed;
        $campaign->save();
        return redirect()->route('user.campaignedit',$id);
    }

   

    public function usersproblems()
    {
        return view('user.contactadmin');
    }

    public function usersproblemscreated(Request $req)
    {
        $validation = Validator::make($req->all(),[
            'des' => 'required',
            'udate'=>'required'
            
        ]);
        if($validation->fails()){
            return back()
                    ->with('errors',$validation->errors())
                    ->withInput();
        }
        ContactAdmin::createContactadmin($req);
        return redirect()->route('user.index');
    }

     public function reportcampaign()
    {
        return view('user.reportcampaign');
    }

    public function reportcampaigncreated(Request $req)
    {
        $validation = Validator::make($req->all(),[
            'des' => 'required',
            'udate'=>'required'
        ]);
        if($validation->fails()){
            return back()
                    ->with('errors',$validation->errors())
                    ->withInput();
        }
        Report::createreportcampaign($req);
        return redirect()->route('user.index');
    }


    
    public function generateReport()
    {
        return view('user.report');
    }

    public function downloadReport(Request $req)
    {
        // $pdf = PDF::loadView('admin.report',compact('variable'));
        // return $pdf->download('employees.pdf');
       
        $countsOf=null;
        
        
            
            $countsOf = User::getAllCount();;
        
        $pdf = PDF::loadView('user.reportView',compact('countsOf'));
        return $pdf->download('reports.pdf');
        //return view('admin.reportView',compact('countsOf'));
    }

    public function searchCampaign(Request $req){
        if($req->ajax()){
            $campaign = Campaign::getCampaignBySearch($req);
            return response()->json($campaign);
        }
        else{
            return Redirect()->Back();
        }
    }

    public function searchUser(Request $req){
        if($req->ajax()){
            if($req->see == 0){
                if($req->searchby == "username" || $req->searchby == "email"){
                    $user = DB::table($req->tablename)
                    ->join('users as u', 'u.id', '=', $req->tablename.'.uid')
                    ->where('u.'.$req->searchby, 'LIKE', '%'.$req->search.'%')
                    ->get();
                }
                else{
                    $user = DB::table($req->tablename)
                    ->join('users as u', 'u.id', '=', $req->tablename.'.uid')
                    ->where($req->tablename.'.'.$req->searchby, 'LIKE', '%'.$req->search.'%')
                    ->get();
                }
            }
            else{
                if($req->searchby == "username" || $req->searchby == "email"){
                    $user = DB::table($req->tablename)
                    ->join('users as u', 'u.id', '=', $req->tablename.'.uid')
                    ->where('u.'.$req->searchby, 'LIKE', '%'.$req->search.'%')
                    ->where('u.status',$req->see)
                    ->get();
                }
                else{
                    $user = DB::table($req->tablename)
                    ->join('users as u', 'u.id', '=', $req->tablename.'.uid')
                    ->where($req->tablename.'.'.$req->searchby, 'LIKE', '%'.$req->search.'%')
                    ->where('u.status',$req->see)
                    ->get();
                }
            }
            return response()->json($user);
        }
        else{
            return Redirect()->Back();
        }
    }

    public function get(Request $req){
        if($req->ajax()){
            $result = User::where($req->field,$req->val)->first();
            if($result != ""){
                $flag = true;
                return response()->json($flag);
            }
            else{
                $flag = false;
                return response()->json($flag);
            }
        }
        else{
            return Redirect()->Back();
        }
    }
}
