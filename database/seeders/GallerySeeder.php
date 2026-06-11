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
            [
                'title'    => 'Shilmi Prestasi 3',
                'image'    => '/shilmi%20prestasi%203.jpeg',
                'category' => 'Achievement',
                'caption'  => 'Dokumentasi prestasi Shilmi.',
                'order'    => 4,
            ],
            [
                'title'    => 'Shilmi Gallery 1',
                'image'    => '/shilmi%20gallery%201.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Dokumentasi kegiatan dan momen Shilmi.',
                'order'    => 5,
            ],
            [
                'title'    => 'Shilmi Gallery 2',
                'image'    => '/shilmi%20gallery%202.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Dokumentasi kegiatan dan momen Shilmi.',
                'order'    => 6,
            ],
            [
                'title'    => 'Shilmi Gallery 3',
                'image'    => '/shilmi%20gallery%203.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Dokumentasi kegiatan dan momen Shilmi.',
                'order'    => 7,
            ],
            [
                'title'    => 'Shilmi Gallery 4',
                'image'    => '/shilmi%20gallery%204.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Dokumentasi kegiatan dan momen Shilmi.',
                'order'    => 8,
            ],
            [
                'title'    => 'Shilmi Gallery 5',
                'image'    => '/shilmi%20gallery%205.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Dokumentasi kegiatan dan momen Shilmi.',
                'order'    => 9,
            ],
            [
                'title'    => 'Taken by Shilmi 1',
                'image'    => '/taken%20by%20shilmi%201.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 10,
            ],
            [
                'title'    => 'Taken by Shilmi 2',
                'image'    => '/taken%20by%20shilmi%202.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 11,
            ],
            [
                'title'    => 'Taken by Shilmi 3',
                'image'    => '/taken%20by%20shilmi%203.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 12,
            ],
            [
                'title'    => 'Taken by Shilmi 4',
                'image'    => '/taken%20by%20shilmi%204.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 13,
            ],
            [
                'title'    => 'Taken by Shilmi 5',
                'image'    => '/taken%20by%20shilmi%205.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 14,
            ],
            [
                'title'    => 'Taken by Shilmi 6',
                'image'    => '/taken%20by%20shilmi%206.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 15,
            ],
            [
                'title'    => 'Taken by Shilmi 7',
                'image'    => '/taken%20by%20shilmi%207.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 16,
            ],
            [
                'title'    => 'Taken by Shilmi 8',
                'image'    => '/taken%20by%20shilmi%208.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 17,
            ],
            [
                'title'    => 'Taken by Shilmi 9',
                'image'    => '/taken%20by%20shilmi%209.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 18,
            ],
            [
                'title'    => 'Taken by Shilmi 10',
                'image'    => '/taken%20by%20shilmi%2010.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 19,
            ],
            [
                'title'    => 'Taken by Shilmi 11',
                'image'    => '/taken%20by%20shilmi%2011.jpeg',
                'category' => 'Gallery',
                'caption'  => 'Fotografi karya Shilmi.',
                'order'    => 20,
            ],
        ];

        foreach ($data as $item) {
            Gallery::create($item);
        }
    }
}
