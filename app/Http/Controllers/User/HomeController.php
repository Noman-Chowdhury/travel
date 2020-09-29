<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App;
use PDF;

class HomeController extends Controller
{
    public function user()
    {
        $all=Booking::where('user_id',auth()->user()->id)->get();
    	return view('user.layouts.home',compact('all'));
    }

    public function editprofile()
    {
        $all=Booking::where('user_id',auth()->user()->id)->get();
        return view('user.layouts.edit');
    }    

    public function edit(Request $request)
    {
        User::where('id',auth()->user()->id)->update([

            'name'=>$request->name,
            'number'=>$request->number,
            'email'=>$request->email,
            'password'=>$request->password,

        ]);
        return redirect()->back();
    }    

    public function picture()
    {
        $all=Booking::where('user_id',auth()->user()->id)->get();
        return view('user.layouts.edit');
    }
    
    public function userbooking()
    {
    	
    	$booking=Booking::with('package','user')->where('user_id',auth()->user()->id)->get();

    	return view('user.layouts.booking',compact('booking'));
    }
        public function payment($id)
    {
    	$booking=Booking::with('package','user')->where('id',$id)->first();

        
        return view ('user.layouts.payment',compact('booking'));
    }

            public function deletebooking($id)
    {
    	$user=Booking::find($id);
        $user->delete();
        return redirect()->route('user');

    }
    
        public function paymentview()
    {
        
        return view ('user.layouts.payment');
    }

    public function printinvoice($id)
    {
        $booking=Booking::with('package','user')->where('id',$id)->first();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('user.layouts.payment',compact('booking'));         
        return $pdf->stream('All User Information.pdf');

    }

    
}
