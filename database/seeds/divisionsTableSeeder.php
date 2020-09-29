<?php

use Illuminate\Database\Seeder;
use App\Models\Division;

class divisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
        	'div_name'=>'Sylhet',

        ]);
    }
}
