<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ExperienceTableSeeder extends Seeder
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
        $exp = [
            [
                "tag"           =>  "kpph",
                "company"       =>  "Kinpo Electronics Philippines Inc.",
                "position"      =>  "Software Engineer - Web Developer (Front End)",
                "address"       =>  "",
                "description"   =>  "",
                "start_in"      =>  Carbon::now()->format('2015-08-20 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2019-06-06 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"           =>  "tssi",
                "company"       =>  "Think Support Services Inc.",
                "position"      =>  "Web Developer (Front End)",
                "address"       =>  "",
                "description"   =>  "",
                "start_in"      =>  Carbon::now()->format('2019-06-10 00:00:00'),
                "end_in"        =>  Carbon::now()->format('5000-12-31 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('experience')->insert($exp);
    }
}
