<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $user = [
            [
                "name"              =>  "Admin",
                "email"             =>  "admin@admin.com",
                "email_verified_at" =>  Carbon::now()->format('Y-m-d H:i:s'),
                "password"          =>  "admin",
                "role"              =>  "Administrator",
                "is_active"         =>  0,
                "created_at"        =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"        =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('users')->insert($user);
    }
}
