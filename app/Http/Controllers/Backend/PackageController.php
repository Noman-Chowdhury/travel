<?php

namespace App\Http\Controllers\Backend;
use App\Models\Package;
use App\Models\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packages()
    {
    	$allpackage=Package::with('loc')->get();
        $locations=Location::all();


    	return view('backend.layouts.packages',compact('allpackage','locations'));
    }
    public function addpackages(Request $request)
    {
        $user_image1 = $request->file('image1');
        $user_image2 = $request->file('image2');
        $file_name1 =uniqid('packages_',true).date('Ymdhms').'.'.$user_image1->getClientOriginalExtension();
        $file_name2 =uniqid('packages_',true).date('Ymdhms').'9.'.$user_image2->getClientOriginalExtension();
        $user_image1->storeAs('packages', $file_name1);
        $user_image2->storeAs('packages', $file_name2);

        

    	Package::create([

    		'package_name'=>$request->packagename,
    		'location_id' => $request->location,
    		'details'=>$request->details,
    		'price'=>$request->price,
            'image1'=>$file_name1,
            'image2'=>$file_name2,

    	]);
    	return redirect()->back();
    }

    public function packagesdelete($package_id)
    {
        Package::where('package_id',$package_id)->delete();
        return redirect()->back()->with('msg',"Package Deleted Successfully");
    }



}
