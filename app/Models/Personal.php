<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function getallPersonals(){
        return self::join('users as u', 'u.id', '=', 'personals.uid')
                    ->get();
    }

    public static function getPersonalById($id){
        return self::join('users as u', 'u.id', '=', 'personals.uid')
                    ->where('u.id',$id)
                    ->first();
    }

    public static function updatePersonal($id,$req){
        $personal = self::where('uid',$id)->first();
        $personal->name = $req->name;
        $personal->phone = $req->phone;
        $personal->address = $req->address;
        $personal->sq = $req->sq;
        $personal->save();

        $user = User::find($id);
        $user->email = $req->email;
        $user->save();
    }
}
