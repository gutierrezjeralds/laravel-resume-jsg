<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homes = [
            [
                "title"         =>  "A few fun facts about myself",
                "description"  =>  "I am ambitious and hardworking individual, with broad skills and experience in Web Development (Front-End) and I am able to handle multiple tasks on a daily basis and at working well under pressure.",
                "created_at"    =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"    =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('home')->insert($homes);
    }
}
