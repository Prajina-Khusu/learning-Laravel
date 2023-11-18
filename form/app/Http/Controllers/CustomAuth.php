<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthUser;
use Hash;
use Session;
class CustomAuth extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.registration');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:auth_users',
            'password'=>'required|min:5'
        ]);
        $user =new AuthUser();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if($res)
        {
            return back()->with('success','You have registered successfully');
        }
        else{
            return back()->with('fail','Something is wrong');
        }


       
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);

        $user=AuthUser::where('email','=',$request->email)->first();
        if ($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request->Session()->put('loginId',$user->id);
                return redirect('dasboard');
            }
            else
            {
                return back()->with('fail','Incorrect password');
            }

        }
        else
        {
            return back()->with('fail','Email isnot registered ');
        }
    }

    public function dashboard()
    {
        $data=array();
        if(Session::has('loginId'))
        {
            $data=AuthUser::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}

