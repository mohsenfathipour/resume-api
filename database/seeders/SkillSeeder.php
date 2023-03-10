<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                'title' => 'Web development',
                'description' => 'Laravel , NodeJS , PhalconPHP , ...',
                'level' => 5,
                'show_order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'FrontEnd Development',
                'description' => 'Vue , Angular',
                'level' => 5,
                'show_order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'DataBase',
                'description' => 'MySQL , Redis , Elastic , ...',
                'level' => 4,
                'show_order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'DevOps',
                'description' => 'CI/CD , Virtualization , Orchestration ,',
                'level' => 3,
                'show_order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Version Control System',
                'description' => 'Git , Git Workflow',
                'level' => 5,
                'show_order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Project Management',
                'description' => 'Kanban , Agile/Scrum , ...',
                'level' => 4,
                'show_order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
