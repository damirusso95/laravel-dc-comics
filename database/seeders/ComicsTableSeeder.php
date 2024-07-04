<?php

namespace Database\Seeders;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $fumetto = new Comic();
        $fumetto->name = "batman";
        $fumetto->type = "dc";
        $fumetto->price = 5.90;

        $fumetto->save();

        for ($i=0; $i < 11; $i++) { 
            $fumetto = new Comic();
            $fumetto->name = $faker-> sentence(4);
            $fumetto->type = $faker-> sentence(1);
            $fumetto->price = $faker-> randomFloat(2, 1.99, 10.90);
            $fumetto->save();
        }
    }
}
