<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmerencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("emergencies")->insert([
            //medical
          [
              'message'=>"For medical emergencies, please contact the ambulance immediately.",
              'name'=>"Medical",
              'phone'=>"123",
          ],
          // fire
           [
             'message'=>"Fire emergency! There is a fire. Please send firefighters immediately.",
             'name'=>"Fire Force",
             'phone'=>"125",
          ],
          // police
          [
            'message'=>"Emergency: I need the police. There is an urgent situation requiring intervention..",
            'name'=>"Police",
            'phone'=>"122",
            
         ]
          ]);
    }
}
