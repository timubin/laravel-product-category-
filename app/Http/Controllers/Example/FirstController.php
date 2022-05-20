<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        return view ('contact');
    }
    public function studentstore(Request $request){
       /* return redirect('/'); */
        dd($request->all());
    }
}
