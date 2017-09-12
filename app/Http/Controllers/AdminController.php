<?php

namespace App\Http\Controllers;

use App\main_hymn;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function Signin()
    {
        return view('Admin.signin')->with(['title'=>'Admin Login']);
    }

    public function AuthenticateUser(Request $request)
    {
        if(Auth::attempt(Input::only("username","password")))
        {
            return redirect()->action('AdminController@Dashboard');
        }
        else{
            Session::flash('error','Incorrect Username Or Password');
            return redirect()->back()->withInput();
        }

    }

    public function Dashboard()
    {
        $users = User::all();
        return view('Admin.dashboard')->with(['title'=>'Dashboard','users'=>$users]);
    }

    public function AddUser(Request $request)
    {
        $user = new User();
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        if($user->save())
        {
            Session::flash('success','User Added Successfully');
            return redirect()->back();
        }
    }
}
