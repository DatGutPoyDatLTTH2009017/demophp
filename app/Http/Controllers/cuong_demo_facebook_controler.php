<?php

namespace App\Http\Controllers;

use App\Models\articlemodel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class cuong_demo_facebook_controler extends Controller
{
    public function vew_login(){
        return view('view_facebook_cuong.login_register');
    }
    public function register(Request $request){
        $user = new UserModel();
        $user -> fill($request->all());
        $user ->password = Hash::make($request,['password']);
        $user->save();
        return $request;
    }
    public function articlepost(Request $request){
        $article = new articlemodel();
        $article -> fill($request->all());
        $article->save();
        return $request;
    }
    public function articleget (){
        return view('view_facebook_cuong.Article_facebook');

    }
    public function datlogin(){
        return view('view_det_ne.login_vs_register');
    }
}
