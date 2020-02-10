<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SplashTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $splashes = [
            [
                "page"          =>  "home",
                "title"         =>  "Jerald Gutierrez",
                "description"   =>  "Web Developer",
                "slogan"        =>  "Trust me, I'm a Developer and I'll do it with style!",
                "button_string" =>  "Hire Me Today",
                "button_link"   =>  "/contact",
                "button_icon"   =>  "id-card",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "portfolio",
                "title"         =>  "My Portfolio",
                "description"   =>  "What I've done",
                "slogan"        =>  "",
                "button_string" =>  "",
                "button_link"   =>  "",
                "button_icon"   =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "resume",
                "title"         =>  "My Resume",
                "description"   =>  "What I can do",
                "slogan"        =>  "",
                "button_string" =>  "Download Resume",
                "button_link"   =>  "",
                "button_icon"   =>  "download",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "contact",
                "title"         =>  "Connect with me",
                "description"   =>  "Or reach out to me directly",
                "slogan"        =>  "Call +63 908 893 6797 Mon-Sun: 9am - 5pm PHT.",
                "button_string" =>  "",
                "button_link"   =>  "",
                "button_icon"   =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "notFound-404",
                "title"         =>  "Page not Found",
                "description"   =>  "Sorry but it looks like this page no longer available.",
                "slogan"        =>  "",
                "button_string" =>  "Back To Home",
                "button_link"   =>  "/",
                "button_icon"   =>  "home",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('splash')->insert($splashes);
    }
}
