<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_models')->insert([
            'model' => 'Mustang',
            'car_id' => 1,
            'engine_power' => '1000',
            'year_released' => '2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('car_models')->insert([
            'model' => 'Focus',
            'car_id' => 1,
            'engine_power' => '160',
            'year_released' => '2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('car_models')->insert([
            'model' => 'Tahoe',
            'car_id' => 3,
            'engine_power' => '400',
            'year_released' => '2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('car_models')->insert([
            'model' => 'X5M',
            'car_id' => 4,
            'engine_power' => '560',
            'year_released' => '2020',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('car_models')->insert([
            'model' => 'R8',
            'car_id' => 6,
            'engine_power' => '1000',
            'year_released' => '2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('car_models')->insert([
            'model' => 'Escalade',
            'car_id' => 5,
            'engine_power' => '400',
            'year_released' => '2021',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
