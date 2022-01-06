<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function kayitol(Request $req){
        User::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>bcrypt($req->password)
        ]);
        return back()->with("Hello","World");
    }
    public function kayitformu(){
        return view("User.Register");
    }
}
