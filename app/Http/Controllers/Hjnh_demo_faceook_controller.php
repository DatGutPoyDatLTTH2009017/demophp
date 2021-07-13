<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class Hjnh_demo_faceook_controller extends Controller
{
    public function view_login(){
        return view('demo_view_cua_hjnh.login_vs_register');
    }

    public function register(Request $request){
        $user = new UserModel();
        $user -> fill($request->all());
        $user->password = Hash::make($request['password']);
        $user->save();
        return $request;
    }
}
