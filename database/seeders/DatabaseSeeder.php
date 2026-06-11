<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            EducationSeeder::class,
            AchievementSeeder::class,
            ExperienceSeeder::class,
            PortfolioSeeder::class,
            GallerySeeder::class,
        ]);
    }
}