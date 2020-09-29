<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{

		protected $fillable=['div_id','dist_name'];

    public function div()
    {
    	
    	return $this->belongsTo(Division::class,'div_id','div_id');
    }
}
