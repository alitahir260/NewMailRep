<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = faker::create();
        foreach(range(1,25)as $value)
        {
            DB::table('country')->insert([
                'country' => $Faker->country,
                'city'=>$Faker->city
            ]);
        }
    }
}
