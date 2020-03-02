<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            end_in if empty 
                Carbon::now()->format('5000-12-31 00:00:00')
                // This will be cheat code for present date
        */
        $skills = [
            [
                "title"         =>  "HTML/HTML5",
                "description"   =>  "",
                "percent"       =>  100,
                "code"          =>  "1AHT",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "CSS/CSS3",
                "description"   =>  "",
                "percent"       =>  100,
                "code"          =>  "1ACS",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "SASS",
                "description"   =>  "",
                "percent"       =>  100,
                "code"          =>  "1ASA",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "JQuery",
                "description"   =>  "",
                "percent"       =>  100,
                "code"          =>  "1AJQ",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "JavaScript",
                "description"   =>  "",
                "percent"       =>  100,
                "code"          =>  "1AJA",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "Bootstrap",
                "description"   =>  "",
                "percent"       =>  100,
                "code"          =>  "1ABO",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "MDBootstrap",
                "description"   =>  "",
                "percent"       =>  100,
                "code"          =>  "1AMD",
                "start_in"      =>  Carbon::now()->format('2018-01-08 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "AJAX",
                "description"   =>  "",
                "percent"       =>  98,
                "code"          =>  "1AAJ",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "JSON",
                "description"   =>  "",
                "percent"       =>  98,
                "code"          =>  "1BJS",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "GIT",
                "description"   =>  "",
                "percent"       =>  95,
                "code"          =>  "1AGI",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "WordPress",
                "description"   =>  "",
                "percent"       =>  90,
                "code"          =>  "1AWO",
                "start_in"      =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "eDM",
                "description"   =>  "Electronic Direct Mail",
                "percent"       =>  90,
                "code"          =>  "1AED",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "WebSocket",
                "description"   =>  "",
                "percent"       =>  85,
                "code"          =>  "1AWE",
                "start_in"      =>  Carbon::now()->format('2018-01-08 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2019-06-07 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "Java",
                "description"   =>  "",
                "percent"       =>  80,
                "code"          =>  "1BJA",
                "start_in"      =>  Carbon::now()->format('2018-01-08 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2019-06-07 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "PHP",
                "description"   =>  "",
                "percent"       =>  80,
                "code"          =>  "1APH",
                "start_in"      =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "Three.JS",
                "description"   =>  "",
                "percent"       =>  80,
                "code"          =>  "1ATH",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2019-06-07 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "AngularJS",
                "description"   =>  "",
                "percent"       =>  75,
                "code"          =>  "1AAN",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2018-01-08 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "Laravel",
                "description"   =>  "",
                "percent"       =>  75,
                "code"          =>  "1ALA",
                "start_in"      =>  Carbon::now()->format('2017-10-01 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2018-01-08 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "ReactJs",
                "description"   =>  "",
                "percent"       =>  75,
                "code"          =>  "1ARE",
                "start_in"      =>  Carbon::now()->format('2019-10-14 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('skills')->insert($skills);
    }
}
