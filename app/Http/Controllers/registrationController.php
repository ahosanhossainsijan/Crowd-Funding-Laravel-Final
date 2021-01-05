<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
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
Use App\Models\Registration;
use Carbon\Carbon;

class registrationController extends Controller
{
    
    public function index()
    {
        return view('registration.index');
    }

    public function created(AdminRequest $req){
        if($req->hasFile('file')){
            $file = $req->file('file');
            if(!($file->getClientOriginalExtension() == "jpg" || $file->getClientOriginalExtension() == "jpeg" || $file->getClientOriginalExtension() == "png")){
                $req->session()->flash('errmsg','File Format '.$file->getClientOriginalExtension().' is not supported for profile pic!!!');
                return redirect()->route('registration.index');
            }
            else{
                $filename = $req->username.".".$file->getClientOriginalExtension();
                if($file->move('system_images',$filename)){
                    Registration::createPersonal($req,'/system_images/'.$filename);
                    return redirect()->route('login.index');
                }
                else{
                    $req->session()->flash('errmsg','Something Went Wrong!!!');
                    return redirect()->route('registration.index');
                }
            }    
        }
        
    }

    
}
