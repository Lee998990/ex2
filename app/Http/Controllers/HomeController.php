<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $data = [
            "name" => "Lee ingta",
            "age" => 23,
        ];
        return view("welcome", $data);
    }

}
