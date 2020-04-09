<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;
use DB;

class ExamController extends Controller
{
    public function isLogin(Request $request) {
        $email = $request->input('email');
        $pass = $request->input('pass');

        $users = DB::table('users')->where('email', $email)->get();
        $str = "No data";
        if ( !$users->isEmpty() ) {
            foreach ( $users as $user ) {
                if ( $user->password != $pass ) {
                    $str = "incorrrect";
                } else {
                    $str = "success";
                }
            }
        }

        return response()->json(['response' => $str], 200);
    }
}
