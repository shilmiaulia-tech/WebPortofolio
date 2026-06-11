<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title'    => 'Shilmi Gallery',
                'image'    => '/shilmi%20gallery.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Dokumentasi kegiatan dan momen Shilmi.',
                'order'    => 1,
            ],
            [
                'title'    => 'Shilmi Prestasi 1',
                'image'    => '/shilmi%20prestasi%201.jpeg',
                'category' => 'Achievement',
                'caption'  => 'Dokumentasi prestasi Shilmi.',
                'order'    => 2,
            ],
            [
                'title'    => 'Shilmi Prestasi 2',
                'image'    => '/shilmi%20prestasi%202.jpeg',
                'category' => 'Achievement',
                'caption'  => 'Dokumentasi prestasi Shilmi.',
                'order'    => 3,
            ],
        ];

        foreach ($data as $item) {
            Gallery::create($item);
        }
    }
}
