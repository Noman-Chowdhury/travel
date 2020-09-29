<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Feedback;
use App\Models\Location;
use App\Models\Car;
use App\Models\Bookcar;
use App\Models\Guide;

class HomeController extends Controller
{
    public function home()
    {
        $locations=Location::with('dist')->get();


    	return view('frontend.layouts.home',compact('locations'));
    }

    public function locationpackage($location_id)

    {

        $location=Location::where('location_id',$location_id)->first();
        
        $packagess=Package::where('location_id',$location_id)->get();
        

        return view('frontend.layouts.locationdetails',compact('location','packagess'));
    }

        public function about()
    {
        return view('frontend.layouts.about');
    }  

          public function contact()
    {
        return view('frontend.layouts.contact');
    }

public function booking($package_id)
    {
       

        $package=Package::where('package_id',$package_id)->first();
        return view('frontend.layouts.booking',compact('package'));
    }

    public function authbooking($package_id)
    {
        $package=Package::where('package_id',$package_id)->first();
        return view('frontend.layouts.authnormalbooking',compact('package'));
    }

    public function normalbooking()
    {
        $packages=Package::all();
    	return view('frontend.layouts.normalbooking',compact('packages'));
    }  

      public function test()
    {
        return view('frontend.layouts.test');
    }

        public function packages()
    {
        $packages=Package::with('loc')->get();

       
        
    	return view('frontend.layouts.packages',compact('packages'));
    }

    public function admin()
    {
    	return view('backend.layouts.master');
    }

      public function singlepackage($package_id)
    {
        $package=Package::where('package_id',$package_id)->first();


        return view('frontend.layouts.singlepackage',compact('package'));
    }


    public function docontact(Request $request)

    {
        $request->validate([
            'email' => 'required|email|unique:users',
           
        ]);
            Feedback::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'comments'=>$request->message,


            ]);
            return redirect()->back()->with('msg','Thank you for your messege. It will help us to increase effeciency ');

    }



        public function feedback($package_id)
    {

        $single=Package::where('package_id',$package_id)->first();

       

        return view('user.layouts.feedback',compact('single'));
    }

            public function givefeedback(Request $request)
    {
            $request->validate([
            'email' => 'required|email|unique:users',
            
        ]);

        Feedback::create([

            'name'=>Auth()->User()->name,
            'email'=>Auth()->User()->email,
            'subject'=>$request->subject,
            'comments'=>$request->message,
            'user_id'=>auth()->user()->id





        ]);

        return redirect()->route('user')->with('msg','Thank You for your Feedback');
    }


    public function car()

    {
        $destinations=Location::with('dist')->get();

        $cars=Car::all();
        return view('frontend.layouts.carrent',compact('cars','destinations'));
    }
    public function bookcar(Request $request)
    {
        
        $car=Car::where('id',$request->car)->first();

        Bookcar::create([

            'car_id'=>$request->car,
            'destination'=>$request->destination,
            'people'=>$request->nop,
            'cars'=>$request->noc,            
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'totalprice'=>$car->price*$request->noc

        ]);
        return redirect()->back()->with('msg','Thank you for your enquiry. Wait for our Call');
    }

    public function tourguide()
    {

        $locations=Location::with('dist')->get();


        return view('frontend.layouts.guide',compact('locations'));
    }

    public function guides($location_id)
    {
        $location=Location::where('location_id',$location_id)->first();
        $guide=Guide::where('location_id',$location_id)->get();

        return view('frontend.layouts.allguide',compact('location','guide'));


    }
   

}
