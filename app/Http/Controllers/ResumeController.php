<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Splash;
use App\Skill;

class ResumeController extends Controller
{
    // Splash ------------------->
    public function getSplash(Request $request, $page){
        return Splash::where('page', $page) -> get();
    }

    public function setSplash(Request $request){
        $key = $request->input('key');
        $page = $request->input('page');
        $title = $request->input('title');
        $description = $request->input('description');
        $slogan = $request->input('slogan');
        $button_string = $request->input('button_string');
        $button_link = $request->input('button_link');
        $button_icon = $request->input('button_icon');

        $set = DB::table('splash')->updateOrInsert(
            ['id' => $key],
            [
                'page'          => $page,
                'title'         => $title,
                'description'   => $description,
                'slogan'        => $slogan,
                'button_string' => $button_string,
                'button_link'   => $button_link,
                'button_icon'   => $button_icon
            ]
        );

        return response()->json(['success' => $set], 200);
    }
    // Splash ------------------->

    // Home --------------------->
    public function getHome(Request $request) {
        $get = DB::table('home')->get();
        return response()->json($get, 200);
    }

    public function setHome(Request $request) {
        $key = $request->input('key');
        $title = $request->input('title');
        $description = $request->input('description');

        $set = DB::table("home")->updateOrInsert(
            ['id' => $key],
            [
                'title'         =>  $title,
                'description'   =>  $description
            ]
        );

        return response()->json(['success' => $set], 200);
    }
    // Home --------------------->

    // Skills ------------------->
    public function getSkills(Request $request) {
        return Skill::OrderBy( 'percent', 'desc' ) -> OrderBy( 'start_in', 'asc' ) -> get();
    }

    public function setSkills(Request $request){
        $key = $request->input('key');
        $title = $request->input('title');
        $description = $request->input('description');
        $percent = $request->input('percent');
        $start_in = $request->input('start_in');
        $end_in = $request->input('end_in');

        $set = DB::table('skills')->updateOrInsert(
            ['id' => $key],
            [
                'title'         => $title,
                'description'   => $description,
                'percent'       => $percent,
                'start_in'      => $start_in,
                'end_in'        => $end_in
            ]
        );

        return response()->json(['success' => $set], 200);
    }
    // Skills ------------------->

    // Experience ------------------->
    public function getAllExperience(Request $request) {
        try {
            $isSingle = $request->input('is_single');
            $getExp = [];
            // Check if need to get all records or not - base in reuqest
            if ( $isSingle == 1 ) {
                $getExp[] = DB::table('experience')->orderBy('start_in', 'desc')->first();
            } else {
                $getExp = DB::table('experience')->orderBy('start_in', 'desc')->orderBy('tag', 'asc')->get();
            }
            // Table's
            $getJobDesc = DB::table('job_descriptions')->orderBy('order', 'asc')->orderBy('tag', 'asc')->get();
            $getProjects = DB::table('projects')->where('category', 'development')->orderBy('start_in', 'desc')->orderBy('tag', 'asc')->get();
            $getAchievement = DB::table('achievement')->orderBy('start_in', 'desc')->orderBy('tag', 'asc')->get();
            $arr = [];

            foreach ( $getExp as $exp ) {
                $expTag = $exp->tag;
                // New array for job description
                $jobDescArr = [];
                foreach ( $getJobDesc as $jobDesc ) {
                    $jdIsProject = $jobDesc->isProject;
                    if ( $expTag == $jobDesc->tag ) {
                        // New array for projects that involved in job descriptions
                        $projectsArr = [];
                        if ( $jdIsProject == 1 ) {
                            foreach ( $getProjects as $projects ) {
                                if ( $expTag == $projects->tag ) {
                                    if ( $projects->category == "development" ) {
                                        // Array for Projects
                                        $projectsArr[] = [
                                            'id'            => $projects->id,
                                            'title'         => $projects->title,
                                            'description'   => $projects->description
                                        ];
                                    }
                                }
                            }
                        }

                        // Array for Job Description
                        $jobDescArr[] = [
                            'id'                => $jobDesc->id,
                            'title'             => $jobDesc->title,
                            'description'       => $jobDesc->description,
                            'sub_description'   => $jobDesc->sub_description,
                            'isProject'         => $jobDesc->isProject,
                            'order'             => $jobDesc->order,
                            'projects'          => $projectsArr
                        ];
                    }
                }

                // New array for achievement
                $achievementArr = [];
                foreach ( $getAchievement as $achievement ) {
                    if ( $expTag == $achievement->tag ) {
                        // Array for achievement
                        $achievementArr[] = [
                            'id'        => $achievement->id,
                            'title'     => $achievement->title,
                            'start_in'  => $achievement->start_in
                        ];
                    }
                }

                // Array for Global Experience
                $arr[] = [
                    'id'                => $exp->id,
                    'tag'               => $exp->tag,
                    'company'           => $exp->company,
                    'position'          => $exp->position,
                    'address'           => $exp->address,
                    'description'       => $exp->description,
                    'job_description'   => $jobDescArr,
                    'achievement'       => $achievementArr,
                    'start_in'          => $exp->start_in,
                    'end_in'            => $exp->end_in
                ];
            }

            return response()->json($arr, 200);

        } catch (\Exception $e) {
            return "fail";
        }
    }
    // Experience ------------------->

    // Educational ------------------->
    public function getEducational(Request $request) {
        return DB::table('educational')->orderBy('start_in', 'desc')->get();
    }
    // Educational ------------------->

    // Projects / Portfolio ------------------->
    public function getProjects(Request $request) {
        $category = $request->input('category');
        if ( !empty( $category ) ) {
            return DB::table('projects')->where('category', $category)->orderBy('start_in', 'desc')->get();
        } else {
            return DB::table('projects')->orderBy('start_in', 'desc')->get();
        }

        return false;
    }
    // Projects / Portfolio ------------------->
}
