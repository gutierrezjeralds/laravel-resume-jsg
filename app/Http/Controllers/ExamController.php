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
            $pass = $request->input('pass');

            // Minimize the response return if possible
    
            if ( $method == "add" ) {
                $duplicate = DB::table('users')->where('email', $email)->get();
                if ( $duplicate->isEmpty() ) {
                    $set = DB::table('users')->insert(
                        [
                            'name'          => $name,
                            'email'         => $email,
                            'password'      => $pass,
                            'role'          => "Subscriber",
                            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                        ]
                    );
    
                    return response()->json(['response' => $set], 200);
                    
                } else {
                    // Has duplicate data
                    return response()->json(['response' => "duplicate"], 200);
                }
    
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

    public function setProduct(Request $request) {
        try {
            $method = $request->input('method');
            $key = $request->input('key');
            $name = $request->input('name');
            $price = $request->input('price');
            $thumbnail = $request->input('thumbnail');
    
            $set = DB::table('products')->insert(
                [
                    'name'          => $name,
                    'price'         => $price,
                    'thumbnail'     => $thumbnail,
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
    
            return response()->json(['response' => $set], 200);

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function getProduct(Request $request) {
        $products = DB::table('products')->get();
        return response()->json($products, 200);
    }

    public function setCart(Request $request) {
        try {
            $userId = $request->input('userId');
            $productId = $request->input('productId');
    
            $set = DB::table('cart')->insert(
                [
                    'user_id'       => $userId,
                    'product_id'    => $productId,
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                ]
            );
    
            return response()->json(['response' => $set], 200);

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function getCart(Request $request) {
        try {
            $userId = $request->input('userId');
            $carts = DB::table('cart')->where('user_id', $userId)->get();
            if ( !$carts->isEmpty() ) {
                $arr = [];
                // Array for carts
                foreach ( $carts as $cart ) {
                    $productId = $cart->product_id;
                    $products = DB::table('products')->where('id', $productId)->get();
                    if ( !$products->isEmpty() ) {
                        foreach ( $products as $product ) {
                            $arr[] = [
                                'cart_id'           => $cart->id,
                                'product_id'        => $product->id,
                                'product_name'      => $product->name,
                                'product_price'     => $product->price,
                                'product_thumbnail' => $product->thumbnail,
                                'created_at'        => $cart->created_at,
                                'updated_at'        => $cart->updated_at
                            ];
                        }
                    }
                }

                return response()->json($arr, 200);
            }

            return false;

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function getCartCount(Request $request) {
        $userId = $request->input('userId');
        return DB::table('cart')->where('user_id', $userId)->count();
    }
}
