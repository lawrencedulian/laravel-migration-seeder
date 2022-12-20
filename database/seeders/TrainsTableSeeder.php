<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainsData = Helpers::getCsvData(__DIR__ . '/trains.csv');
        foreach ($trainsData as $key => $train) {
            if ($key !== 0) {
                $newTrain = new Train();
                $newTrain->azienda = $train[0];
                $newTrain->stazione_di_partenza = $train[1];
                $newTrain->stazione_di_arrivo = $train[2];
                $newTrain->orario_di_partenza = $train[3];
                $newTrain->orario_di_arrivo = $train[4];
                $newTrain->codice_treno = $train[5];
                $newTrain->numero_carrozze = $train[6];
                $newTrain->is_on_time = $train[7];
                $newTrain->is_cancelled = $train[8];
                $newTrain->save();
            }
        }
    }
}
