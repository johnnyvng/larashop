<?php

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->insert([
        	'name' => 'Vodka',
        	'comment' => 'Blood of creativity',
        	'rating' => 9,
        	'brew_date' => Carbon\Carbon::now(),
        	]);
    }
}
