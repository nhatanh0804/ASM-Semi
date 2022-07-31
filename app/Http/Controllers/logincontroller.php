<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class logincontroller extends Controller
{
    public function getLogin(){
        return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        $arr = ['username' =>$request->username,'password' =>$request->password];
        if(Auth::attempt($arr)){
            dd('thành công');
        } else {
            dd('thất bại');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->intended('auth/login');
    }

    public function getRegister(){
        return view('auth/register');
    }

    public function postRegister(Request $request){
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo thành công');
    }
}
