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
                'title'        => 'YouTube Live Session',
                'slug'         => 'youtube-live-session',
                'description'  => 'Live streaming session showcasing creative content and ideas',
                'category'     => 'Video',
                'type'         => 'youtube',
                'external_url' => 'https://www.youtube.com/live/oLLHTewwlIA?si=cNHNeOc20viSiwfa',
                'order'        => 1,
            ],
            [
                'title'        => 'Creative Showcase - Project 1',
                'slug'         => 'creative-showcase-project-1',
                'description'  => 'Creative video project showcasing artistic vision and storytelling',
                'category'     => 'Video',
                'type'         => 'youtube',
                'external_url' => 'https://youtu.be/4TZ9bx5EKNo?si=DsYB9b6O6vXdwBpC',
                'order'        => 2,
            ],
            [
                'title'        => 'Creative Showcase - Project 2',
                'slug'         => 'creative-showcase-project-2',
                'description'  => 'Creative video project showcasing artistic vision and storytelling',
                'category'     => 'Video',
                'type'         => 'youtube',
                'external_url' => 'https://youtu.be/v1EHDN1BsUk?si=DDwJlU2-CB---n4r',
                'order'        => 3,
            ],
            [
                'title'        => 'Creative Showcase - Project 3',
                'slug'         => 'creative-showcase-project-3',
                'description'  => 'Creative video project showcasing artistic vision and storytelling',
                'category'     => 'Video',
                'type'         => 'youtube',
                'external_url' => 'https://youtu.be/w10xf1YYIjs?si=tipVw908O5nhxhhz',
                'order'        => 4,
            ],
            [
                'title'        => 'Instagram Creative Reel',
                'slug'         => 'instagram-creative-reel',
                'description'  => 'Creative video content and visual storytelling on Instagram',
                'category'     => 'Video',
                'type'         => 'instagram',
                'external_url' => 'https://www.instagram.com/reel/DKWevjKzjIu/?utm_source=ig_web_button_share_sheet&igsh=MzRlODBiNWFlZA==',
                'order'        => 5,
            ],
        ];

        foreach ($data as $item) {
            Portfolio::create($item);
        }
    }
}