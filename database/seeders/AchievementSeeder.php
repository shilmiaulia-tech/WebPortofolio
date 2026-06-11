<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title'       => 'Shilmi Prestasi 1',
                'organizer'   => 'Dokumentasi Prestasi',
                'year'        => '2024',
                'level'       => 'Achievement',
                'description' => 'Dokumentasi pencapaian dan prestasi Shilmi.',
                'certificate' => '/shilmi%20prestasi%201.jpeg',
                'order'       => 1,
            ],
            [
                'title'       => 'Shilmi Prestasi 2',
                'organizer'   => 'Dokumentasi Prestasi',
                'year'        => '2024',
                'level'       => 'Achievement',
                'description' => 'Dokumentasi pencapaian dan prestasi Shilmi.',
                'certificate' => '/shilmi%20prestasi%202.jpeg',
                'order'       => 2,
            ],
            [
                'title'       => 'Shilmi Prestasi 3',
                'organizer'   => 'Dokumentasi Prestasi',
                'year'        => '2024',
                'level'       => 'Achievement',
                'description' => 'Dokumentasi pencapaian dan prestasi Shilmi.',
                'certificate' => '/shilmi%20prestasi%203.jpeg',
                'order'       => 3,
            ],
        ];

        foreach ($data as $item) {
            Achievement::create($item);
        }
    }
}
