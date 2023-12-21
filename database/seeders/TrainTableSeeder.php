<?php

namespace Database\Seeders;

use App\Models\train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<40;$i++){
            $new_train = new Train();
            $new_train->azienda = $faker->randomElement(['a', 'b', 'c', 'd', 'e']);
            $new_train->stazione_partenza = $faker->randomElement(['a', 'b', 'c', 'd', 'e']);
            $new_train->stazione_arrivo = $faker->randomElement(['a', 'b', 'c', 'd', 'e']);
            $new_train->orario_partenza = $faker->dateTimeThisMonth();
            $new_train->orario_arrivo = $faker->dateTimeThisMonth();
            $new_train->codice_treno = $faker->bothify('??????-#####');
            $new_train->numero_carrozze = $faker->randomDigit();
            $new_train->numero_posti = $faker->randomNumber(3, false);
            $new_train->in_orario = $faker->numberBetween(0, 1);
            $new_train->cancellato = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
