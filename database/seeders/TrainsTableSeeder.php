<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use config\arraySeeder;
use  App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config("arraySeeder.arrayTreni");

        foreach ($trains as $train) {
            $newTrain = new Train($train);
            $newTrain->save();
        }
    }
}
