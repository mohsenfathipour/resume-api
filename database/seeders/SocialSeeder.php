<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            [
                'title' => 'Linkedin',
                'link' => 'https://www.linkedin.com/in/mohsenfathipour/',
                'icon' => 'fab fa-linkedin-in',
                'show_order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'YouTube',
                'link' => 'https://www.youtube.com/@mohsenfathipour',
                'icon' => 'fab fa-youtube',
                'show_order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'GitHub',
                'link' => 'https://github.com/mohsenfathipour',
                'icon' => 'fab fa-github-square',
                'show_order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Instagram',
                'link' => 'https://www.instagram.com/mohsenfathipour_com/',
                'icon' => 'fab fa-instagram',
                'show_order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Telegram',
                'link' => 'https://t.me/MohsenFathiPour',
                'icon' => 'fas fa-paper-plane',
                'show_order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
