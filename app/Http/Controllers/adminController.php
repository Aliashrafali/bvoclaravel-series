<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
date_default_timezone_set('Asia/Kolkata');

class adminController extends Controller
{
    public function Admin(){
        return view('admin.index');
    }

    public function Create(){
        return view('admin.create');
    }

    public function Store(Request $request){
        $data = new Student;

        // insert Concept
        $data->name = $request->input('name');
        $data->mobile = $request->input('mobile');
        $data->class = $request->input('class');
        $data->email = $request->input('email');
        $data->session = $request->input('session');
        $data->save();
        return redirect()->back();
    }

    public function View(){
        $data = Student::all();
        return view('admin.view', compact('data'));
    }
}
