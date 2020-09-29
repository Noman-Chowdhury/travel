<?php

use Illuminate\Database\Seeder;
use App\Models\District;

class districtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create([
        	'dist_name'=>"Gazipur",
        	'div_id'=>'1',

        ]);
    }
}
