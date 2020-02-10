<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Splash;

class ResumeController extends Controller
{
    public function getSplash(Request $request, $page){
        return Splash::where('page', $page) -> get();
    }
}
