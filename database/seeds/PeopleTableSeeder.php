<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("people")->insert([
        	[
        	"name" => "Seun Matt",
        	"phone" => "09909098998",
        	"email" => "seun@sun.com"
        	]
        ]);
    }
}
