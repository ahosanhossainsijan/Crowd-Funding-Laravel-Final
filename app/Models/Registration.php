<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Campaign;
Use App\Models\Personal;
Use App\Models\Organization;
Use App\Models\Volunteer;
Use App\Models\User;

class Registration extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function createPersonal($req,$filename){
        $user = new User();
        $user->username = $req->username;
        $user->password = $req->pass;
        $user->email = $req->email;
        $user->image = $filename;
        $user->type = 1;
        $user->status = 1;
        $user->provider_id =0;
        $user->save();

        $personal = new Personal();
        $personal->name = $req->name;
        $personal->phone = $req->phone;
        $personal->address = $req->address;
        $personal->sq = $req->sq;
        $personal->uid = $user->id;
        $personal->save();
    }

    
}
