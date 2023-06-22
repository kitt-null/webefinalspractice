<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only(['username','password']);

        if(Auth::attempt($credentials)){
            return redirect('/');
        }else{
            return redirect()->back()->withErrors(['message'=>'Invalid Username or Password']);
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }

    public function register(){
        return view('register');
    }
    public function registerin(Request $request){

        $validate = $request->validate([
            'name'=>'required|max:30',
            'username'=>'required|unique:users|min:5|max:20',
            'password'=>'required|min:5|max:20'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        $user = User::create($validate);

        if($user){
            return redirect('/login');
        }
    }
}
