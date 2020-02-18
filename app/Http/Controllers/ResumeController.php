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
}
