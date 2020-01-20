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
                "category"      =>  "title",
                "string"        =>  "Jerald Gutierrez",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "home",
                "category"      =>  "description",
                "string"        =>  "Web Developer",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "home",
                "category"      =>  "slogan",
                "string"        =>  "Trust me, I'm a Developer and I'll do it with style!",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "home",
                "category"      =>  "anchor",
                "string"        =>  "Hire Me Today",
                "fa_icon"       =>  "id-card",
                "uri"           =>  "/contact",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "portfolio",
                "category"      =>  "title",
                "string"        =>  "My Portfolio",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "portfolio",
                "category"      =>  "description",
                "string"        =>  "What I've done",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "resume",
                "category"      =>  "title",
                "string"        =>  "My Resume",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "resume",
                "category"      =>  "description",
                "string"        =>  "What I can do",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "resume",
                "category"      =>  "anchor",
                "string"        =>  "Download Resume",
                "fa_icon"       =>  "download",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "contact",
                "category"      =>  "title",
                "string"        =>  "Connect with me",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "contact",
                "category"      =>  "description",
                "string"        =>  "Or reach out to me directly",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "contact",
                "category"      =>  "slogan",
                "string"        =>  "Call +63 908 893 6797 Mon-Sun: 9am - 5pm PHT.",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "notFound-404",
                "category"      =>  "title",
                "string"        =>  "Page not Found",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "notFound-404",
                "category"      =>  "description",
                "string"        =>  "Sorry but it looks like this page no longer available.",
                "fa_icon"       =>  "",
                "uri"           =>  "",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "page"          =>  "notFound-404",
                "category"      =>  "anchor",
                "string"        =>  "Back To Home",
                "fa_icon"       =>  "home",
                "uri"           =>  "/",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('splashes')->insert($splashes);
    }
}
