<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EducationalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $edu = [
            [
                "title"         =>  "Dalipit West Elementary School",
                "description"   =>  "",
                "address"       =>  "Dalipit West, Alitagtag, Batangas",
                "start_in"      =>  Carbon::now()->format('2001-06-01 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2007-04-01 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "Alitagtag National High School",
                "description"   =>  "",
                "address"       =>  "Dominador West, Alitagtag, Batangas",
                "start_in"      =>  Carbon::now()->format('2007-06-01 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2011-04-01 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "title"         =>  "De La Salle Lipa",
                "description"   =>  "Bachelor of Science in Information Systems",
                "address"       =>  "Lipa City, Batangas",
                "start_in"      =>  Carbon::now()->format('2011-06-01 00:00:00'),
                "end_in"        =>  Carbon::now()->format('2015-04-01 00:00:00'),
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('educational')->insert($edu);
    }
}
