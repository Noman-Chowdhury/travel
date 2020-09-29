<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookcar extends Model
{
    protected $fillable=['car_id','destination','people','cars','user_id','name','email','address','totalprice'];
}
