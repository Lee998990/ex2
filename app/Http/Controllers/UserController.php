<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $categories = User::all();
        return $categories;
    }

    public function show($id)
    {
        $category = User::find($id);
        return $category;
    }
    public function creat(){

    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(){

    }
}
