<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function aboutIndex()
    {
        return view('about');
    }

    public function contactIndex()
    {
        return view('contact');
    }
}
