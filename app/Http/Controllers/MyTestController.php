<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

class MyTestController extends Controller
{
    public function test(Request $request)
    {

    }

    public function test2(Request $request)
    {
        if ($request->session()->has('sessionName')) {

            echo $request->session()->exists('sessionName');
        }
        else {
            echo "Không tồn tại dữ liệu";
        }

    }
    public function test3(Request $request)
    {

        $flights = News::where('id', 2)->get();

        foreach ($flights as $post) {
            echo $post->title. "<br>";
        }
    }
}
