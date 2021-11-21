<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class TestController extends Controller
{
    public function food($id) {
        return view('detail', [
            "makanan" => Food::find($id)
        ]);
    }

    public function test() {
        $foods = Food::$foods;
        return view('index')->with('foods',$foods);
    }
}
