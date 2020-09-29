<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['user_id','package_id','checkin_date','person','details','totalcost'];

    public function user()
    {

    	return $this->belongsTo(User::class,'user_id','id');

    }
        public function package()
    {

    	return $this->belongsTo(Package::class,'package_id','package_id');

    }
    
}
