<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{




        public function div()

    {
    	return $this->belongsTo(District::class,'dist_id','dist_id');

    }
}
