<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::create(2019, 1, 1, 1, 1, 1);
        $vardai = ['Matematika', 'Lietuvių kalba', 'Fizika', 'Anglų kalba', 'Biologija', 'Geografija', 'Chemija', 'Muzika', 'Kūno kultūra', 'Istorija'];
        for ($i = 0; $i<count($vardai); $i++) {            
            $date = $date->addSecond(rand(1,3600));
            DB::table('lectures')->insert([       
                'name' => $vardai[$i],  
                'description' => $vardai[$i],
                'created_at' => $date,        
                'updated_at' => $date            
            ]); 
        }
    }
}
