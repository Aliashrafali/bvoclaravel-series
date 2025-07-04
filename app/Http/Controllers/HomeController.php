<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $title = 'Home Page';
        $students = [
            ["name"=>"Kisan Kumar", "age" =>22, "skill"=>"Full Stack Developer", "salary"=>15000, "status"=>0],
            ["name"=>"Rajan Kumar", "age" =>23, "skill"=>"Laravel Developer", "salary"=>20000, "status"=>1],
            ["name"=>"Kajal Kumari", "age" =>22, "skill"=>"JavaScript Developer", "salary"=>25000, "status"=>0]
        ];
        return view('index', compact('title', 'students'));
    }
}
