<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\SkillApprovedEnum;

class SkillSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            // C Programming
            [
                'slug' => 'c_programming-'.rand(1000, 9999).'-'.time(),
                'name' => 'C Programming',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Cpp Programming
            [
                'slug' => 'cpp_programming-'.rand(1000, 9999).'-'.time(),
                'name' => 'Cpp Programming',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // C-Sharp
            [
                'slug' => 'c_-_sharp-'.rand(1000, 9999).'-'.time(),
                'name' => 'C-Sharp',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Shell
            [
                'slug' => 'shell-'.rand(1000, 9999).'-'.time(),
                'name' => 'Shell',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Linux
            [
                'slug' => 'linux-'.rand(1000, 9999).'-'.time(),
                'name' => 'Linux',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Html 5
            [
                'slug' => 'html-'.rand(1000, 9999).'-'.time(),
                'name' => 'HTML 5',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // CSS 3
            [
                'slug' => 'css3-'.rand(1000, 9999).'-'.time(),
                'name' => 'CSS 3',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // JavaScript 3
            [
                'slug' => 'javascript-'.rand(1000, 9999).'-'.time(),
                'name' => 'JavaScript',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // PHP
            [
                'slug' => 'php-'.rand(1000, 9999).'-'.time(),
                'name' => 'PHP',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Yii2
            [
                'slug' => 'yii2-'.rand(1000, 9999).'-'.time(),
                'name' => 'Yii2',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Laravel
            [
                'slug' => 'laravel-'.rand(1000, 9999).'-'.time(),
                'name' => 'Laravel',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Sass
            [
                'slug' => 'sass-'.rand(1000, 9999).'-'.time(),
                'name' => 'Sass',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Bootstrap 4
            [
                'slug' => 'bootstrap4-'.rand(1000, 9999).'-'.time(),
                'name' => 'Bootstrap4',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Vue Js
            [
                'slug' => 'vuejs-'.rand(1000, 9999).'-'.time(),
                'name' => 'Vue Js',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // React Js
            [
                'slug' => 'reactjs-'.rand(1000, 9999).'-'.time(),
                'name' => 'React Js',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            // Angular
            [
                'slug' => 'angular-'.rand(1000, 9999).'-'.time(),
                'name' => 'Angular',
                'is_approved' => SkillApprovedEnum::YES->value,
                'updated_by' => 1,
                'created_by' => 1,
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ];

        Skill::insert($skills);
    }
}
