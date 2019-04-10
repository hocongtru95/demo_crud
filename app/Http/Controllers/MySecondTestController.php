<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySecondTestController extends Controller
{
    //
    public function testMethod(Request $request)
    {
        echo $request->cookie('first_cookie');
    }
}
