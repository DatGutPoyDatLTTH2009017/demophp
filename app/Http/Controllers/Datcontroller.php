<?php

namespace App\Http\Controllers;

use App\Models\articlemodel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Datcontroller extends Controller
{
    public function login(Request $request){
        $password = $request->password;
        $email = $request->email;
        if (Auth::attempt(['password'=>$password, 'email'=>$email])){
            $user = Auth::user();
            return view('view_det_ne.profile',['user'=>$user]);
        }else{
            return redirect()->route('datindex')->with('login_fails','Ngu vc');
        };
    }
    public function index(){
        return view('view_det_ne.login_vs_register');
    }
    public function register(Request $request){
        $user = new UserModel();
        $user -> fill($request->all());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('datindex')->with('Facebook', 'Very Good');
    }
    public function status(Request $request){
        $articles = new articlemodel();
        $articles->fill($request->all());
        $articles->user_id = Auth::id();
        $articles->save();
        return $request;
    }
//    public function home(){
//        return view('view_det_ne.profile');
//    }
}
