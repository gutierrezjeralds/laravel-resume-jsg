<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;
use DB;

class ExamController extends Controller
{
    public function isLogin(Request $request) {
        try {
            $email = $request->input('email');
            $pass = $request->input('pass');
            $address = $request->input('address');
            $latitude = $request->input('latitude');
            $longitude = $request->input('longitude');
    
            $users = DB::table('users')->where('email', $email)->get();
            $str = "no-data";
            if ( !$users->isEmpty() ) {
                foreach ( $users as $user ) {
                    if ( $user->password != $pass ) {
                        $str = "incorrect";
                    } else {
                        $set = DB::table('login_location')->insert(
                            [
                                'user_id'       => $user->id,
                                'address'       => $address,
                                'latitude'      => $latitude,
                                'longitude'     => $longitude,
                                'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                                'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                            ]
                        );

                        $str = "success";
                    }
                }
            }
    
            return response()->json(['response' => $str], 200);

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }
}
