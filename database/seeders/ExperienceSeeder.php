<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'company'     => 'EBS FM Radio',
                'position'    => 'Radio Technical and Content Intern',
                'type'        => 'Internship',
                'year_start'  => 'On going',
                'year_end'    => '',
                'description' => 'Supported radio broadcast operations, handled technical setup, and assisted content planning and production for on-air and digital programs.',
                'order'       => 1,
            ],
            [
                'company'     => 'PENS',
                'position'    => 'Creative Team',
                'type'        => 'Academic Project',
                'year_start'  => '2024',
                'year_end'    => '2026',
                'description' => 'Collaborated with the creative team on academic projects at PENS, developing concepts, visuals, and production materials from planning to execution.',
                'order'       => 2,
            ],
            [
                'company'     => 'Freelance',
                'position'    => 'Content Creator',
                'type'        => 'Freelance',
                'year_start'  => '2025',
                'year_end'    => '2026',
                'description' => 'Produced short-form digital content as a freelance creator, from ideas and scripting to shooting, editing, and publishing.',
                'order'       => 3,
            ],
        ];

        foreach ($data as $item) {
            Experience::create($item);
        }
    }
}
