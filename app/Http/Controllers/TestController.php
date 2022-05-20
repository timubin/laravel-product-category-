<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
 public function Home(){
        return "<h2>Home Controller</h2>";
    }
}
