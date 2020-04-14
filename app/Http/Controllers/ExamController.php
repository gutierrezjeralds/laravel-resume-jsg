<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Carbon\Carbon;
use DateTime;
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
                        // Update is_active
                        $set = DB::table("users")->updateOrInsert(
                            ['id' => $user->id],
                            [
                                'is_active'     => 1
                            ]
                        );

                        // Add login location
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

    public function isLogout(Request $request) {
        $userId = $request->input('userId');

        // Update is_active
        $set = DB::table("users")->updateOrInsert(
            ['id' => $userId],
            [
                'is_active'     => 0
            ]
        );

        return response()->json(['response' => $set], 200);
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
            $date = $request->input('date');

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
                $dateTime = new DateTime($date);
                $set = DB::table('users')->updateOrInsert(
                    ['id' => $key],
                    [
                        'name'          => $name,
                        'updated_at'    => $dateTime->format('Y-m-d H:i:s')
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
    
            $duplicate = DB::table('cart')->where('user_id', $userId)->where('product_id', $productId)->get();
            if ( $duplicate->isEmpty() ) {
                $set = DB::table('cart')->insert(
                    [
                        'user_id'       => $userId,
                        'product_id'    => $productId,
                        'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ]
                );
        
                return response()->json(['response' => $set], 200);

            } else {
                // Has duplicate data
                return response()->json(['response' => "duplicate"], 200);
            }

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
                
            } else {
                return response()->json(['response' => 'empty'], 200);
            }

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function getCartCount(Request $request) {
        $userId = $request->input('userId');
        return DB::table('cart')->where('user_id', $userId)->count();
    }

    public function setCheckout(Request $request) {
        try {
            $userId = $request->input('userId');
            $datas = $request->input('checkout');

            // Delete first all checkout data by user id
            $del = DB::table("checkout")->where('user_id', $userId)->delete();
            // Add new data of checkout by user id
            foreach ( $datas as $data ) {
                $productId = $data['product_id'];
                $cartId = $data['cart_id'];

                $set = DB::table('checkout')->insert(
                    [
                        'user_id'       => $userId,
                        'product_id'    => $productId,
                        'cart_id'       => $cartId,
                        'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                        'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                    ]
                );
            }

            return response()->json(['response' => "success"], 200);

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => $e], 200);
        }
    }

    public function getCheckout(Request $request) {
        try {
            $userId = $request->input('userId');
            $checkouts = DB::table('checkout')->where('user_id', $userId)->get();
            if ( !$checkouts->isEmpty() ) {
                $arr = [];
                // Array for checkouts
                foreach ( $checkouts as $checkout ) {
                    $productId = $checkout->product_id;
                    $products = DB::table('products')->where('id', $productId)->get();
                    if ( !$products->isEmpty() ) {
                        foreach ( $products as $product ) {
                            $arr[] = [
                                'checkout_id'       => $checkout->id,
                                'product_id'        => $product->id,
                                'product_name'      => $product->name,
                                'product_price'     => $product->price,
                                'product_thumbnail' => $product->thumbnail,
                                'created_at'        => $checkout->created_at,
                                'updated_at'        => $checkout->updated_at
                            ];
                        }
                    }
                }

                return response()->json($arr, 200);

            } else {
                return response()->json(['response' => 'empty'], 200);
            }
        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function placeOrder(Request $request) {
        try {
            $userId = $request->input('userId');

            $cart = DB::table("cart")->where('user_id', $userId)->delete();
            $checkout = DB::table("checkout")->where('user_id', $userId)->delete();

            return response()->json(['response' => "success"], 200);

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function chartUsers(Request $request) {
        try {
            $chart = $request->input('chart');

            if ( $chart == "pie" ) {
                $active = DB::table('users')->where('is_active', 1)->count();
                $disaAtive = DB::table('users')->where('is_active', 0)->count();
                $arr = [ $active, $disaAtive ];
    
                return response()->json(['response' => $arr], 200);

            } else if ( $chart == "line" ) {
                // Do Nothing

            } else {
                return response()->json(['response' => 'empty'], 200);
            }

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }

    public function notifUsers(Request $request) {
        try {
            $userId = $request->input('userId');
            $date = $request->input('date');
            $users = DB::table('users')->whereColumn('updated_at', '>', 'created_at')->orderBy('updated_at', 'desc')->get();
            if ( !$users->isEmpty() ) {
                $arr = [];
                // Array for users notif
                foreach ( $users as $user ) {
                    if ( $userId != $user->id) {
                        $new = 0;
                        if ( $date !== null ) {
                            $fromBe = strtotime($user->updated_at);
                            $fromFe = strtotime($date);
                            if ( $fromBe > $fromFe ) {
                                $new = 1;
                            }
                        }
    
                        // Array
                        $arr[] = [
                            'user_id'       => $user->id,
                            'name'          => $user->name,
                            'email'         => $user->email,
                            'updated_at'    => $user->updated_at,
                            'new'           => $new
                        ];
                    }
                }
            
                return response()->json(['response' => $arr], 200);
            }

        } catch (\Exception $e) {
            // print_r($e);
            return response()->json(['response' => 'fail'], 200);
        }
    }
}
