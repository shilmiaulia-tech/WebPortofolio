<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'title'        => 'Urban Youth Documentary',
                'slug'         => 'urban-youth-documentary',
                'description'  => 'A short documentary exploring the daily lives and dreams of urban youth in Indonesia. Shot over 2 weeks across 3 cities.',
                'category'     => 'Video',
                'type'         => 'youtube',
                'external_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'order'        => 1,
            ],
            [
                'title'        => 'Brand Identity — Kopi Senja',
                'slug'         => 'brand-identity-kopi-senja',
                'description'  => 'Complete brand identity design for a local coffee shop. Includes logo, color palette, typography, and packaging mockups.',
                'category'     => 'Design',
                'type'         => 'behance',
                'external_url' => 'https://www.behance.net',
                'order'        => 2,
            ],
            [
                'title'        => 'Campus Event Coverage',
                'slug'         => 'campus-event-coverage',
                'description'  => 'Photography and videography coverage for annual campus creative festival, capturing over 300 moments across 3 days.',
                'category'     => 'Photography',
                'type'         => 'instagram',
                'external_url' => 'https://www.instagram.com',
                'order'        => 3,
            ],
            [
                'title'        => 'Personal Portfolio Website',
                'slug'         => 'personal-portfolio-website',
                'description'  => 'This very website! Built with Laravel 10 and Tailwind CSS as a college project with focus on modern design and dynamic content.',
                'category'     => 'Web',
                'type'         => 'website',
                'external_url' => 'https://github.com',
                'order'        => 4,
            ],
        ];

        foreach ($data as $item) {
            Portfolio::create($item);
        }
    }
}