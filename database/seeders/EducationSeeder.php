<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            [
                'degree' => 'HighSchool',
                'school' => 'National Organization for Development of Exceptional Talents (Zanjan SAMPAD)',
                'field' => 'Mathematics and Physics',
                'description' => 'In High school I tested many skills like Robotics, Professional Sport and others. Finally, I got that I like Programming.',
                'start_at' => '2004-09-22',
                'end_at' => '2011-07-21',
                'logo' => '/files/education/2/logo.jpg',
            ],
            [
                'degree' => 'Bachelor of Science (BS)',
                'school' => 'Institute for Advanced Studies in Basic Sciences',
                'field' => 'Information Technology Engineering',
                'description' => "At university, I realised that I'm really passionate about artificial intelligence.<br>My final Thesis was a WAF ( Web Application Firewall ) for php that you can read more about in project lab.",
                'start_at' => '2012-09-22',
                'end_at' => '2017-04-12',
                'logo' => '/files/education/1/logo.jpg',
            ],
        ]);
    }
}
