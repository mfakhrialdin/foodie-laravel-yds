<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller {
    
    public function food($id) {
        return view('detail', [
            "title" => Food::find($id)['title'],
            "food" => Food::find($id)
        ]);
    }

    public function test() {
        $foods = Food::$foods;
        return view('index')->with('foods',$foods);
    }
}