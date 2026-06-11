<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'school'      => 'Politeknik Elektronika Negeri Surabaya',
                'degree'      => 'Politeknik',
                'field'       => '',
                'year_start'  => '2024',
                'year_end'    => 'now',
                'description' => null,
                'order'       => 1,
            ],
            [
                'school'      => 'SMAN 15 Surabaya',
                'degree'      => 'SMA',
                'field'       => '',
                'year_start'  => '2021',
                'year_end'    => '2024',
                'description' => null,
                'order'       => 2,
            ],
        ];

        foreach ($data as $item) {
            Education::create($item);
        }
    }
}
