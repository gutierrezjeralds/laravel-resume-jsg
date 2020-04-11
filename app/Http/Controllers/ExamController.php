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

                        $str = [
                            "id"        =>  $user->id,
                            "name"      =>  $user->name,
                            "email"     =>  $user->email,
                            "role"      =>  $user->role
                        ];
                    }
                }
            }
    
            return response()->json(['response' => $str], 200);

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function getUsers(Request $request) {
        $users = DB::table('users')->get();
        return response()->json($users, 200);
    }

    public function getUserById(Request $request) {
        $key = $request->input('key');
        $user = DB::table('users')->where('id', $key)->get();
        return response()->json($user, 200);
    }

    public function commandUsers(Request $request){
        try {
            $method = $request->input('method');
            $key = $request->input('key');
            $name = $request->input('name');
            $email = $request->input('email');

            // Minimize the response return if possible
    
            if ( $method == "add" ) {
                $set = DB::table('users')->insert(
                    [
                        'name'          => $name,
                        'email'         => $email,
                        'role'          => "Subscriber",
                        'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ]
                );

                return response()->json(['response' => $set], 200);
    
            } else if ( $method == "edit" ) {
                $set = DB::table('users')->updateOrInsert(
                    ['id' => $key],
                    [
                        'name'          => $name,
                        'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ]
                );
        
                return response()->json(['response' => $set], 200);

            } else if ( $method == "delete" ) {
                $set = DB::table("users")->where('id', $key)->delete();

                return response()->json(['response' => $set], 200);

            } else {
                return response()->json(['response' => 'fail'], 200);
            }

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function getLoginLocById(Request $request) {
        $userId = $request->input('key');
        $location = DB::table('login_location')->where('user_id', $userId)->orderBy('created_at', 'desc')->get();
        return response()->json($location, 200);
    }
}
