<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AchievementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achievement = [
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Promoted as an Engineed B from Junior Engineer",
                "start_in"              =>  Carbon::now()->format('2016-11-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Become Deputy Team Leader",
                "start_in"              =>  Carbon::now()->format('2018-08-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                   =>  "kpph",
                "company"               =>  "Kinpo Electronics Philippines Inc.",
                "title"                 =>  "Project Training at Taiwan - 1 Month",
                "start_in"              =>  Carbon::now()->format('2018-08-01 00:00:00'),
                "created_at"            =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"            =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('achievement')->insert($achievement);
    }
}
