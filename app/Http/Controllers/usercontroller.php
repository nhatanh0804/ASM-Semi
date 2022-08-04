<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    public function index()
    {

        $user=User::all();
        return view('listUser', compact("user"));
    }

    public function getAllUser(){
        $user=User::paginate(10);
        return view('listuser',compact("user"));
    }

    public function geteditUser($userid){
        $data['user'] = User::find($userid);
       return view('edituser',$data);

    }


    public function posteditUser(Request $request,$userid) 

    { 

        $user = User::find($userid); 
        $user->username = $request->username; 

        $user->email = $request->email; 

    $user->save(); 

    return redirect()->route('/listuser'); 

} 

 public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

}
