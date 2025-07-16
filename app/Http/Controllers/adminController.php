<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
date_default_timezone_set('Asia/Kolkata');

class adminController extends Controller
{
    public function Admin(){
        return view('admin.index');
    }
}
