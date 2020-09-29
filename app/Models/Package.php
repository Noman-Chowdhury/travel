<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable=['package_name', 'location_id', 'details','price','image1','image2'];


        public function loc()

    {
    	return $this->belongsTo(Location::class,'location_id','location_id');

    }
}