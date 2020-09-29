<?php

use Illuminate\Database\Seeder;
use App\Models\Package;
class packagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       Package::create([
       	'package_name'=>"3 Days Tour in Cox's Bazar",
       	'location_id'=>"1",
       	'details'=>"Bazar is the longest unbroken sandy beach in the world, and the most popular tourist spot in Bangladesh. St. Martin&#8217;s Island is the only coral island in Bangladesh. It is the last point of the country, accessible only during winter by boats. The best beach in Bangladesh is located on this island.</p><p>On this tour, you can have leisure on the beaches of Cox&#8217;s Bazar and St. Martin&#8217;s Island, visit a fishing port in Cox&#8217;s Bazar which is full of activities and offers amazing photo opportunities, and visit a fishing village to experience the lifestyle of the Bangladeshi fishermen and their family.",
       	'price'=>"8000",

       ]);


    }
}
