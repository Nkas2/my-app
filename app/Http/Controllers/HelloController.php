<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index()
    {
        echo "index";
    }

    function world_message() {
        echo "world_message";
        // return view('home');
    }
}