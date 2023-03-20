<?php

namespace Database\Seeders;

use App\Models\ResultType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resultTypes = [
            // Percentage
            [
                'slug' => 'percentage-'.rand(1000, 9999).'-'.time(),
                'name' => 'Percentage',
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // CGPA
            [
                'slug' => 'cgpa-'.rand(1000, 9999).'-'.time(),
                'name' => 'CGPA',
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ]
        ];
        ResultType::insert($resultTypes);
    }
}
