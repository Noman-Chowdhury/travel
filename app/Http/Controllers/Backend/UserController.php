<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

	    public function loginpage()
    {
    	return view('backend.layouts.auth.loginpage');
    }
 	

 		    public function dologin(Request $request)
    {
        

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials) && Auth::User()->role=='Customer') {

            return redirect()->route('user');
        }

        return redirect()->back()->with('message','Invalid User credentials');
    }


    public function registration()
    {
    	return view('backend.layouts.auth.registration');
    }



        public function registry(Request $request )
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            
        ]);

    	$var=User::create([

    		'name'=>$request->name,
    		'email'=>$request->email,
    		'number'=>$request->number,
            'role'=>"Customer",
    		'password'=>bcrypt($request->password),

    	]);
        return redirect()->back()->with("message","You Account Created Successfully");
    }

        public function login()
    {
        return view('backend.layouts.auth.adminlogin');
    }

    public function logindo(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials) && Auth::User()->role=='Admin') 
        {

            return redirect()->route('admin');
        }

        return redirect()->back()->with('message','Invalid User credentials');
    }
    

        
    	
    	
    
      public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
          public function userlogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


}
