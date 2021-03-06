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

        DB::table('projects')->delete();

        $projects = [
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "XYZ Scan",
                "category"              =>  "development",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAN","title":"Angular"},{"code":"1ABO","title":"Bootstrap"},{"code":"1ATH","title":"Three.JS"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-3dscan.png",
                "website"               =>  "http://www.xyz3dscan.com",
                "start_in"              =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "XYZ eCard",
                "category"              =>  "development",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAN","title":"Angular"},{"code":"1ABO","title":"Bootstrap"},{"code":"1ATH","title":"Three.JS"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-3dscan.png",
                "website"               =>  "http://www.xyz3dscan.com/us_en/eCard",
                "start_in"              =>  Carbon::now()->format('2016-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "",
                "company"               =>  "",
                "title"                 =>  "Portfolio - Bootstrap",
                "category"              =>  "development",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAN","title":"Angular"},{"code":"1ABO","title":"Bootstrap"},{"code":"1ATH","title":"Three.JS"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/portfolio-1.png",
                "website"               =>  "http://gutierrez.herokuapp.com",
                "start_in"              =>  Carbon::now()->format('2016-04-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Banner Backstage",
                "category"              =>  "development",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAJ","title":"AJAX"},{"code":"1BJS","title":"JSON"},{"code":"1ABO","title":"Bootstrap"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-banner-backstage.png",
                "website"               =>  "http://xyzprinting.com/IndexBannerView",
                "start_in"              =>  Carbon::now()->format('2016-08-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "",
                "company"               =>  "",
                "title"                 =>  "Portfolio - MDBootstrap",
                "category"              =>  "development",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAJ","title":"AJAX"},{"code":"1BJS","title":"JSON"},{"code":"1AMD","title":"MDBootstrap"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/portfolio-2.png",
                "website"               =>  "http://gutierrez-jerald.herokuapp.com",
                "start_in"              =>  Carbon::now()->format('2017-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Cloud Print Consumer",
                "category"              =>  "development",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAJ","title":"AJAX"},{"code":"1BJS","title":"JSON"},{"code":"1BJA","title":"JAVA"},{"code":"1AWE","title":"WebSocket"},{"code":"1AMD","title":"MDBootstrap"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-cloud-con-2.png",
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
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAJ","title":"AJAX"},{"code":"1BJS","title":"JSON"},{"code":"1BJA","title":"JAVA"},{"code":"1AWE","title":"WebSocket"},{"code":"1AMD","title":"MDBootstrap"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-cloud-edu.png",
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
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AAJ","title":"AJAX"},{"code":"1AWO","title":"Wordpress"},{"code":"1ABO","title":"Bootstrap"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/tssi-intranet.png",
                "website"               =>  "https://intranet.deepbluecompany.com.au",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "XYZPrinting",
                "category"              =>  "maintenance",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1ABO","title":"Bootstrap"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-xyzprinting.png",
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
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ASA","title":"SASS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1ABO","title":"Bootstrap"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-xyzauth.png",
                "website"               =>  "https://auth.xyzfamily.com",
                "start_in"              =>  Carbon::now()->format('2017-01-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "eDM - KPHH",
                "category"              =>  "maintenance",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1BJA","title":"JAVA"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "http://gutierrez-jerald-cv-be.herokuapp.com/img/project/kpph-edm.png",
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
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ACS","title":"CSS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AWO","title":"Wordpress"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/tssi-main.png",
                "website"               =>  "https://www.thinkconveyancing.com.au",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "tssi",
                "company"               =>  "Think Support Services Inc.",
                "title"                 =>  "Rapid Building Inspections",
                "category"              =>  "maintenance",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"},{"code":"1ACS","title":"CSS"},{"code":"1AJA","title":"JavaScript"},{"code":"1AJQ","title":"JQuery"},{"code":"1AWO","title":"Wordpress"},{"code":"1AGI","title":"GIT"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/tssi-rbi.png",
                "website"               =>  "https://www.rapidbuildinginspections.com.au",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "tssi",
                "company"               =>  "Think Support Services Inc.",
                "title"                 =>  "eDM - TSSI",
                "category"              =>  "maintenance",
                "skills"                =>  '[{"code":"1AHT","title":"HTML"}]',
                "description"           =>  "",
                "image"                 =>  "https://gutierrez-jerald-cv-be.herokuapp.com/img/project/tssi-edm.png",
                "website"               =>  "",
                "start_in"              =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
