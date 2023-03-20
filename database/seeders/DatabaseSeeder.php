<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User Seed
        $this->call(UserSeed::class);

        // Standard Seed
        $this->call(StandardSeed::class);

        // Result Type Seed
        $this->call(ResultTypeSeed::class);

        // Skill
        $this->call(SkillSeed::class);

        // Language
        $this->call(LanguageSeed::class);
    }
}
