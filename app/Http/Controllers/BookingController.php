<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Package;

class BookingController extends Controller
{
    public function dobooking(Request $request)
    {
        $request->validate([
            'checkin' => 'required|date|after_or_equal:'.date('y-m-d'),
            'email' => 'required|email|unique:users',
        ]);


        $prices=Package::where('package_id',$request->package_id)->first();

if($request->image)
{


        $user_image = $request->file('image');
        $file_name =uniqid('customer_',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        $user_image->storeAs('customer', $file_name);
        $image=$file_name;
}
$image='null';
    	$user=User::create([
    		'name'=>$request->name,
			'email'=>$request->email,
			'number'=>$request->number,
			'password'=>bcrypt($request->password),
            'image'=>$image,

    	]);
    	
       
    	Booking::create([
				'user_id'=>$user->id,
				'package_id'=>$request->package_id,
				'checkin_date'=>$request->checkin,
				'person'=>$request->person,
				'details'=>$request->details,
                'totalcost'=>$request->person*$prices->price,

    	]);
    	return redirect()->route('loginpage')->with('msg',"You have successfully booked, Now you can manage your details by login");



    }


    public function authdobooking(Request $request)
    {
        $request->validate([
            'checkin' => 'required|date|after_or_equal:'.date('y-m-d'),
            'email' => 'required|email|unique:users',
        ]);

               
        $prices=Package::where('package_id',$request->package_id)->first();
     
        
       
        Booking::create([
                'user_id'=>auth()->user()->id,
                'package_id'=>$request->package_id,
                'checkin_date'=>$request->checkin,
                'person'=>$request->person,
                'details'=>$request->details,
                'totalcost'=>$request->person*$prices->price,

                


        ]);
        return redirect()->route('userbook')->with('msg',"You have successfully booked, Now you can manage your details by login");



    }

    public function donormalbooking(Request $request)
    {
        $request->validate([
            'checkin' => 'required|date|after_or_equal:'.date('y-m-d'),
            'email' => 'required|email|unique:users',
        ]);

        $prices=Package::where('package_id',$request->package_id)->first();
     
        
       
        Booking::create([

                'user_id'=>auth()->user()->id,
                'package_id'=>$request->package_id,
                'checkin_date'=>$request->checkin,
                'person'=>$request->person,
                'details'=>$request->details,
                'totalcost'=>$request->person*$prices->price,              


        ]);
        return redirect()->route('userbook');


    }
}
