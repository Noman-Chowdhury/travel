<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\District;
use App\Models\Division;
use App\Models\User;
use App\Models\Booking;
use App\Models\Feedback;
use App\Models\Package;
use App\Models\Car;
use App\Models\Guide;
use App;
use PDF;

class HomeController extends Controller
{
       public function admin()
    {

        $user=User::count();
        $admin=User::where('role','Admin')->count();
        $customer=User::where('role','Customer')->count();
        $package=Package::count();
        $location=Location::count();
        $district=District::count();
        $booking=Booking::count();
        $feedback=Feedback::count();
        $car=Car::count();
        $guide=Guide::count();
    	return view('backend.layouts.dashboard',compact('user','admin','customer','package','location','district','booking','booking','feedback','car','guide'));
    }
    public function viewlocation()
    {
    	$locations=Location::with('dist')->get();
        

        $divisions= District::all();

    	return view('backend.layouts.addlocation',compact('locations','divisions'));
    }
        public function addlocation(Request $request)
    {

            $user_image1 = $request->file('image');
        
       
        $file_name1 =uniqid('location_',true).date('Ymdhms').'9.'.$user_image1->getClientOriginalExtension();
        $user_image1->storeAs('location', $file_name1);
        

    	Location::create([
    		'location_name'=>$request->location_name,
    		'dist_id'=>$request->district_id,
    		'location_details'=>$request->location_details,
            'image'=>$file_name1,
    	

    	]);

    	return redirect()->back()->with('message',"Your Location Added Successfully");
    }


        public function district()
    {
        $divisions=Division::all();
        

        return view ('backend.layouts.district',compact('divisions'));
    }


            public function adddistrict(Request $request)
    {
        District::create([
            'dist_name'=>$request->name,
            'div_id'=>$request->divid,          
        
        ]);

        return redirect()->back()->with('message',"Your District Added Successfully");
    }

        public function showdistrict()
    {
        $districts=District::with('div')->get();
        

        return view ('backend.layouts.showdistrict',compact('districts'));
    }

            public function userlist()
    {
        $admin=User::where('role',"Admin")->get();
        
        $customer=User::where('role',"Customer")->get();
        

        return view ('backend.layouts.userlist',compact('customer','admin'));
    }    

    public function adduser()
    {
        return view('backend.layouts.adduser');
    }

    public function addusers(Request $request)
    {



        $user_image = $request->file('image');
        
        $file_name =uniqid('admin',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        
        $user_image->storeAs('admin', $file_name);
       


        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'password'=>bcrypt($request->name),
            'image'=>$file_name,
            'role'=>'Admin'
        ]);
        return view('backend.layouts.adduser');
    }

        public function edituser($id)
    {
        $user=User::where('id',$id)->first();

        return view('backend.layouts.edituser',compact('user'));
    }


    public function editusers(Request $request,$id)
    {

           if($request->image)
           {

        $user_image = $request->file('image');
        
        $file_name =uniqid('admin',true).date('Ymdhms').'.'.$user_image->getClientOriginalExtension();
        
        $user_image->storeAs('admin', $file_name);

            User::where('id',$id)->update([

            'name'=>$request->name,
            
            'number'=>$request->number,
            'password'=>bcrypt($request->password),
            'image'=>$file_name,
            
        ]);
       
            }

        User::where('id',$id)->update([

            'name'=>$request->name,
            
            'number'=>$request->number,
            'password'=>bcrypt($request->password),
            
            
        ]);
        return redirect()->route('userlist')->with('msg',"Successfully Edited");
    }


/*`*/


            public function printuserlist()
    {

        $admin=User::where('role',"Admin")->get();
        
        $customer=User::where('role',"Customer")->get();
       
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('backend.layouts.userprint',compact('customer','admin'));  

       
        return $pdf->stream('All User Information.pdf');

     
    } 



        public function userlistdelete($id)
    {
        
        $user=User::find($id);
        $user->delete();
        return redirect()->back();

        
    }

            public function userbooking()
    {
        
        $bookinginfo=Booking::with('user','package')->get();
        return view ('backend.layouts.userbooking',compact('bookinginfo'));
    }


    
                public function userbookingapprove($id)
    {
        
        $approve=Booking::where('id',$id)->update([

            'status'=>'Approve'

        ]);    

        return view ('backend.layouts.userbooking',compact('bookinginfo'));
    }
               
     public function userbookingupdate($id)

    {        
        Booking::where('id',$id)->update([
          
          'status'=>'Approve'
       ]);
        
        return redirect()->back();
        
    }   
    public function userbookingdeny($id)

    {        
        Booking::where('id',$id)->update([
          
          'status'=>'Pending'
       ]);
        
        return redirect()->back();        
    }

    public function userfeedback()
    {
        $feedbacks=Feedback::all();

        return view('backend.layouts.feedback',compact('feedbacks'));
    }

    public function cars()

    {
        $cars=Car::all();

        return view('backend.layouts.cars',compact('cars'));
    }
    public function addcars(Request $request)

    {
        
            
        Car::create([
            'name'=>$request->carname,
            'driver'=>$request->drivername,
            'seat'=>$request->seat,
            'price'=>$request->price,
            'status'=>$request->status,

        ]);

        return redirect()->back()->with('msg','Car Added Susseccfully');
    }

    public function guide()
    {
        $locations=Location::all();

        $guides=Guide::with('loc')->get();
        return view('backend.layouts.guide',compact('guides','locations'));
    }
    public function addguide(Request $request)
    {
       Guide::create([

        'name'=>$request->name,
        'location_id'=>$request->location,
        'number'=>$request->number,
        'fee'=>$request->fee

       ]);
       return redirect()->back()->with('msg','Guide Information Added Susseccfully');
    }


}
