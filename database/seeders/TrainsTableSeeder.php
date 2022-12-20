<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement(['Trenitalia', 'FrecciaRossa', 'Italotreno']);
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeThisYear();
            $newTrain->orario_di_arrivo = $faker->dateTimeThisYear();
            $newTrain->codice_treno = $faker->randomNumber(7, true);
            $newTrain->numero_carrozze = $faker->numberBetween(5, 20);
            $newTrain->is_on_time = $faker->numberBetween(0, 1);
            $newTrain->is_cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
