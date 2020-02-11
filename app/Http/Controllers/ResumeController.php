<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Splash;

class ResumeController extends Controller
{
    public function getCsrfToken(Request $request){
        return response()->json(['token' => csrf_token()], 200);
    }

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
}
