<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'brand' => 'Ford',
            'country' => 'America',
            'logo' => null,
            'website' => 'ford.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cars')->insert([
            'brand' => 'Mercedes',
            'country' => 'Germany',
            'logo' => null,
            'website' => 'mercedes.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cars')->insert([
            'brand' => 'Chevrolet',
            'country' => 'America',
            'logo' => null,
            'website' => 'chevrolet.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cars')->insert([
            'brand' => 'BMW',
            'country' => 'Germany',
            'logo' => null,
            'website' => 'bmw.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cars')->insert([
            'brand' => 'Cadillac',
            'country' => 'America',
            'logo' => null,
            'website' => 'cadillac.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('cars')->insert([
            'brand' => 'audi',
            'country' => 'Germany',
            'logo' => null,
            'website' => 'audi.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
