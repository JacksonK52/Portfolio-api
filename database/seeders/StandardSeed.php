<?php

namespace Database\Seeders;

use App\Models\Standard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StandardSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $standards = [
            // 10th Standard
            [
                'slug' => '10_standard-'.rand(1000, 9999).'-'.time(),
                'name' => '10th Standard',
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // 12th Standard
            [
                'slug' => '12_standard-'.rand(1000, 9999).'-'.time(),
                'name' => '12th Standard',
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            // Bachelore's Degree
            [
                'slug' => "bachelore's_degree-".rand(1000, 9999).'-'.time(),
                'name' => "Bachelore's degree",
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            // Master's Degree
            [
                'slug' => "master's_degree-".rand(1000, 9999).'-'.time(),
                'name' => "Master's degree",
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ] 
        ];
        Standard::insert($standards);
    }
}
