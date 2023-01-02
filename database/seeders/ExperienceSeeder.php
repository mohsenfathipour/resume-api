<?php

namespace Database\Seeders;

use App\Enums\EmploymentTypeEnum;
use App\Enums\LocationTypeEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([
            [
                'title' => 'Web Developer , Server Administrator',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Hegza Co',
                'location' => 'Zanjan, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => 'I worked on ZnFaraghat.ir , A portal for MINISTRY Of Youth and Sports in Zanjan.',
                'start_at' => '2013-03-01',
                'end_at' => '2014-04-01',
                'logo' => '/files/experiences/10/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Full Stack Web Developer , Teacher',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Rayan Rooyesh',
                'location' => 'Zanjan, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => 'I did back-end developing for web-sites and android applications with REST API in android
                Application projects like Rokhsar, Pezeshkan, ... .<br>
                I taught Web Programming , Photoshop and C++ programming for 4 terms.',
                'start_at' => '2014-07-01',
                'end_at' => '2016-06-01',
                'logo' => '/files/experiences/9/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Full Stack Web Developer',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Golrang Industrial Group',
                'location' => 'Tehran, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => 'I worked as Senior PHP Developer mostly with CakePHP and full stack programmer in golrang
                    system. I
                    was in these projects:<br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0">www.golrang.com | گروه صنعتی گلرنگ</li>
                        <li class="list-group-item border-0">people.golrang.com | سامانه جذب و استخدام گروه صنعتی
                            گلرنگ
                        </li>
                        <li class="list-group-item border-0">www.kouroshmall.com | مجتمع تجاری کورش</li>
                        <li class="list-group-item border-0">www.kouroshcineplex.com | پردیس سینمایی کورش</li>
                        <li class="list-group-item border-0">KouroshMall Kiosks | کیوسک پردیس سینمایی کورش</li>
                        <li class="list-group-item border-0">KouroshMall Way Finding System | سیستم مسیریابی کورش
                            مال
                        </li>
                        <li class="list-group-item border-0">www.NailSpaco.com | Online reservation for spa</li>
                        <li class="list-group-item border-0">www.blog.kouroshcineplex.com | وبلاگ پردیس سینمایی
                            کورش
                        </li>
                        <li class="list-group-item border-0">www.golrangsystem.com | گلرنگ سیستم</li>
                        <li class="list-group-item border-0">www.familyjupiter.com | شهربازی ژوپیتر</li>
                        <li class="list-group-item border-0">www.gigcdportal.com | پرتال طرح ها و پروژه ها</li>
                        <li class="list-group-item border-0">www.gpa.ir | شرکت گلپخش اول</li>
                        <li class="list-group-item border-0">www.hastitaamin.ir | شرکت هستی آرین تامین</li>
                        <li class="list-group-item border-0">www.irandar.co.ir | شرکت ایراندار</li>
                        <li class="list-group-item border-0">www.kouroshrice.com | شرکت کشت و صنعت برنج کورش</li>
                        <li class="list-group-item border-0">www.marinasun.ir | شرکت ماریناسان</li>
                        <li class="list-group-item border-0">www.surenacs.com | شرکت طلایی سینا</li>
                        <li class="list-group-item border-0">www.golrangelectronic.com | شرکت گلرنگ الکترونیک</li>
                        <li class="list-group-item border-0">www.abianpharmed.com | شرکت ابیان فارمد</li>
                        <li class="list-group-item border-0">www.hastiaria.com | هستی آریا شیمی</li>
                        <li class="list-group-item border-0">www.golrang-pakhsh.com | شرکت گلرنگ پخش</li>
                        <li class="list-group-item border-0">www.amiramarket.com | امیرا مارکت عراق</li>
                        <li class="list-group-item border-0">www.karkiasourena.com | شرکت کارکیا سورنا</li>
                        <li class="list-group-item border-0">www.golbargfood.com | شرکت گلبرگ فود</li>
                        <li class="list-group-item border-0">www.padidehnano.com | شرکت پدیده نانو</li>
                        <li class="list-group-item border-0">www.swissroseco.com | سوئیس رز</li>
                        <li class="list-group-item border-0">www.partoshid.com | شرکت پرتو شید زمان</li>
                        <li class="list-group-item border-0">www.kouroshfruit.com | وب سایت کوروش فروت</li>
                        <li class="list-group-item border-0">www.o2iraq.com | O2 وب سایت</li>
                    </ul>
                    <br>


                    and so on ...',
                'start_at' => '2016-06-01',
                'end_at' => '2017-11-01',
                'logo' => '/files/experiences/8/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Head Of Web Department',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Golrang Industrial Group',
                'location' => 'Tehran, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => 'Golrang System has many teams for IT projects and my duty is leading the Web Application
                    team.<br>
                    <br>
                    sample site:<br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0">www.golrang.com</li>
                        <li class="list-group-item border-0">www.gorlangsystem.com</li>
                        <li class="list-group-item border-0">www.familyjupiter.com</li>
                        <li class="list-group-item border-0">www.kouroshmall.com</li>
                        <li class="list-group-item border-0">www.kouroshcineplex.com</li>
                        <li class="list-group-item border-0">people.golrang.com</li>
                    </ul>
                    <br>
                    and more than 30 sites ...<br>
                    <br>
                    - taking care and maintenance Linux servers<br>
                    <br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0">Web Server</li>
                        <li class="list-group-item border-0">Mail Server</li>
                        <li class="list-group-item border-0">DNS server</li>
                    </ul>
                    <br>
                    - taking care and maintenance Domains',
                'start_at' => '2017-11-01',
                'end_at' => '2019-11-01',
                'logo' => '/files/experiences/7/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Senior Web Developer',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'SapienTrade',
                'location' => 'Cebu, Central Visayas, Philippines',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => 'I worked on a website panel for forecasting and trading assistance with AI.',
                'start_at' => '2020-03-01',
                'end_at' => '2020-04-01',
                'logo' => '/files/experiences/6/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Full Stack Web Developer',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Elanza',
                'location' => 'Tehran, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' =>
                    'I was in charge of deploying a previously developed online marketplace system.<br>
                Code review, Debug and add new features to work properly.<br>
                The system was built on Laravel 5.8.',
                'start_at' => '2019-11-01',
                'end_at' => '2020-01-01',
                'logo' => '/files/experiences/5/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Chief Technology Officer',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Elanza',
                'location' => 'Tehran, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' =>
                    'I developed an infrastructure for an online marketplace.<br>
                    It has:<br>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0">Seller Center</li>
                        <li class="list-group-item border-0">Front For Customers</li>
                        <li class="list-group-item border-0">Shop Management</li>
                        <li class="list-group-item border-0">Inventory Management</li>
                        <li class="list-group-item border-0">Customer Service</li>
                        <li class="list-group-item border-0">Finance automation</li>
                    </ul>
                    <br>
                    all parts have PWA for mobile users.<br>
                    And I am in charge of the Infrastructure Department.<br>',
                'start_at' => '2020-01-01',
                'end_at' => '2022-04-01',
                'logo' => '/files/experiences/4/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Chief Technology Officer',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Banimode',
                'location' => 'Tehran, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => '',
                'start_at' => '2022-04-01',
                'end_at' => '2022-05-01',
                'logo' => '/files/experiences/3/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Chief Technology Officer',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Irantic',
                'location' => 'Tehran, Iran',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => 'I worked on avoiding the single-seat creation algorithm.The website is a microservice architect with laravel and lumen.',
                'start_at' => '2022-06-01',
                'end_at' => '2022-08-01',
                'logo' => '/files/experiences/2/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Chief Technology Officer',
                'employment_type_enum' => EmploymentTypeEnum::full_time,
                'company' => 'Tecladz',
                'location' => 'Dubai, United Arab Emirates',
                'location_type_enum' => LocationTypeEnum::on_site,
                'description' => 'I worked as CTO in charge of building and develop a tech team.',
                'start_at' => '2022-08-01',
                'end_at' => '2022-11-01',
                'logo' => '/files/experiences/1/logo.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
