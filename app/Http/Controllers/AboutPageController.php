<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function show(){
        $data = ['message' => 'Welcome to the About page!'];
        return view('about', $data);
        // return view('about');
    }
}


