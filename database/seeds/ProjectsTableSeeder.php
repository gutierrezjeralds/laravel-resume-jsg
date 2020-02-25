<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "XYZ Scan",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AngularJS, Bootstrap, Play Framework 1x, Three.js, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://www.xyz3dscan.com/",
                "start_in"              =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "XYZ eCard",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AngularJS, Bootstrap, Play Framework 1x, Three.js, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://www.xyz3dscan.com/us_en/eCard",
                "start_in"              =>  Carbon::now()->format('2016-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "",
                "company"               =>  "",
                "title"                 =>  "Portfolio",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AngularJS, Bootstrap, Play Framework 1x, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://gutierrez.herokuapp.com/",
                "start_in"              =>  Carbon::now()->format('2016-04-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Banner Backstage",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AJAX, JSON, Bootstrap, Play Framework 1x, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://xyzprinting.com/IndexBannerView",
                "start_in"              =>  Carbon::now()->format('2016-08-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "",
                "company"               =>  "",
                "title"                 =>  "Portfolio",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AJAX, JSON, MDBootstrap, Play Framework 1x, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://gutierrez-jerald.herokuapp.com/",
                "start_in"              =>  Carbon::now()->format('2017-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Cloud Print Consumer",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AJAX, JSON, JAVA, WebScoket, MDBootstrap, Play Framework 1x, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://cloudprint.xyzprinting.com/en-US/con/printerManagement",
                "start_in"              =>  Carbon::now()->format('2018-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Cloud Print Educational",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AJAX, JSON, JAVA, WebScoket, MDBootstrap, Play Framework 1x, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://cloudprint.xyzprinting.com/en-US/edu/dashboard",
                "start_in"              =>  Carbon::now()->format('2018-10-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "tssi",
                "company"               =>  "Think Support Services Inc.",
                "title"                 =>  "Intranet",
                "category"              =>  "development",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, AJAX, JSON, WordPress, Bootstrap, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "https://intranet.deepbluecompany.com.au/",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "XYZPrinting",
                "category"              =>  "maintenance",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, Bootstrap, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "http://www.xyzprinting.com/en-US/home",
                "start_in"              =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "XYZAuth",
                "category"              =>  "maintenance",
                "description"           =>  "HTML, SASS, JavaScript, JQuery, Play Framework 2x, Bootstrap, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "https://auth.xyzfamily.com/",
                "start_in"              =>  Carbon::now()->format('2017-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "eDM",
                "category"              =>  "maintenance",
                "description"           =>  "HTML, JAVA, SoapUI, Play Framework 1x, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "",
                "start_in"              =>  Carbon::now()->format('2017-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "tssi",
                "company"               =>  "Think Support Services Inc.",
                "title"                 =>  "Think Conveyancing",
                "category"              =>  "maintenance",
                "description"           =>  "HTML, CSS, JavaScript, JQuery, WordPress, Divi, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "https://www.thinkconveyancing.com.au/",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "tssi",
                "company"               =>  "Think Support Services Inc.",
                "title"                 =>  "Rapid Building Inspections",
                "category"              =>  "maintenance",
                "description"           =>  "HTML, CSS, JavaScript, JQuery, WordPress, Divi, GIT",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "https://www.rapidbuildinginspections.com.au/",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "tssi",
                "company"               =>  "Think Support Services Inc.",
                "title"                 =>  "eDM",
                "category"              =>  "maintenance",
                "description"           =>  "HTML, Infusionsoft, SendGrid",
                "sub_description"       =>  "",
                "image"                 =>  "",
                "website"               =>  "",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
