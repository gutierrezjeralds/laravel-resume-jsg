<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JobDescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('job_descriptions')->delete();

        $jd = [
            [
                "tag"                       =>  "kpph",
                "title"                     =>  "Develop Projects Scope and Created concepts",
                "description"               =>  "",
                "sub_description"           =>  "",
                "isProject"                 =>  1,
                "order"                     =>  1,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "kpph",
                "title"                     =>  "Develop EDM (Electronic Direct Email) template",
                "description"               =>  "",
                "sub_description"           =>  "",
                "isProject"                 =>  0,
                "order"                     =>  2,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "kpph",
                "title"                     =>  "Creating eDM template",
                "description"               =>  "SoapUI",
                "sub_description"           =>  "REST API",
                "isProject"                 =>  0,
                "order"                     =>  3,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "kpph",
                "title"                     =>  "Modified and Maintained XYZ Websites",
                "description"               =>  "",
                "sub_description"           =>  "",
                "isProject"                 =>  0,
                "order"                     =>  4,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "kpph",
                "title"                     =>  "Rendered OBJ, STL, PLY 3D Models",
                "description"               =>  "Three.JS",
                "sub_description"           =>  "",
                "isProject"                 =>  0,
                "order"                     =>  5,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "kpph",
                "title"                     =>  "Performed Committing and Merging task in Mercurial Sourcetree",
                "description"               =>  "GIT",
                "sub_description"           =>  "",
                "isProject"                 =>  0,
                "order"                     =>  6,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "tssi",
                "title"                     =>  "Develop Projects",
                "description"               =>  "",
                "sub_description"           =>  "",
                "isProject"                 =>  1,
                "order"                     =>  1,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "tssi",
                "title"                     =>  "Maintained Think Website",
                "description"               =>  "",
                "sub_description"           =>  "",
                "isProject"                 =>  0,
                "order"                     =>  2,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "tag"                       =>  "tssi",
                "title"                     =>  "Creating eDM template",
                "description"               =>  "InfusionSoft",
                "sub_description"           =>  "SendGrid",
                "isProject"                 =>  0,
                "order"                     =>  2,
                "created_at"                =>  Carbon::now()->format('Y-m-d H:i:s'),
                "updated_at"                =>  Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('job_descriptions')->insert($jd);
    }
}
