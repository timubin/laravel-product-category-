<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function newindex(){
        return view ('home.home');
    }
    public function fullName(){
        return view ('home.home');
    }
}
