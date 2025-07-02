<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $title = 'Home Page';
        return view('index', compact('title'));
    }
}
