<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable=['name','location_id','number','fee','status'];

    public function loc()
    {
    	return $this->belongsTo(Location::class,'location_id','location_id');
    }
}
