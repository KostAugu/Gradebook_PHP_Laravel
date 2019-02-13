<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = Carbon::create(2019, 1, 1, 1, 1, 1);
        for ($i = 0; $i<1000; $i++) {            
            $date = $date->addSecond(rand(1,3600));
            DB::table('grades')->insert([       
                'student_id' => rand(1,100),  
                'lecture_id' => rand(1,10),
                'grade' => rand(3,10),                
                'created_at' => $date,        
                'updated_at' => $date            
            ]); 
        }
    }
}
