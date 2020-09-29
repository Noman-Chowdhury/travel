<?php

use Illuminate\Database\Seeder;
use App\Models\Location;

class locationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
        	'location_name'=>"Cox's Bazar",
        	'dist_id'=>'2',
        	'location_details'=>"Cox's Bazar Town was constituted in 1869, eventually becoming a B-grade municipality in 1989. Located along the Bay of Bengal in South Eastern Bangladesh, Cox's Bazar Town is a health resort. But it is famous mostly for its long natural sandy beach. The municipality covers an area of 6.85 km2 (2.64 sq mi) with 27 mahallas and 9 wards and has a population of 51,918.[7] Cox's Bazar is connected by road and air with Chittagong.",

        ]);
    }
}
