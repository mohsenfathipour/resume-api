<?php

namespace Database\Seeders;

use App\Enums\GenderEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mohsen Fathipour',
            'title' => 'Web Developer, Project Manager and Technology Teacher',
            'intro' => 'Attentive and goal-driven IT professional with over 8 years of experience in full-stack development and project management across diverse industries. Developing sophisticated and high-traffic websites utilizing PHP, MySQL, NoSQL databases, Elasticsearch, and other cutting-edge technologies. With team leadership and project management skills. I constantly monitor and optimize the software development process while balancing business needs with budget limits and time planning.',
            'location' => 'Tehran,Iran',
            'birth_at' => '1993-06-17',
            'gender_enum' => GenderEnum::male,
            'email' => 'info@mohsenfathipour.com',
            'skype' => 'skype:live:202447868ed6214e?chat',
            'mobile' => '09125676987',
            'languages' => '["Persian (Native)","Turkish (Native)","English (Fluent)"]',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'avatar' => '/files/users/1/avatar.jpg',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
