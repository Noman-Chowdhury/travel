<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable=['location_name','dist_id','location_details','image'];




    public function dist()

    {
    	return $this->belongsTo(District::class,'dist_id','dist_id');

    }

    public function package()
    {
    	return $this->hasMany(Package::class);
    }
 
}
