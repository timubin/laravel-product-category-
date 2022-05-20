<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    /* return view('about'); */
    return response("Hellow world",200)->header('Content-Type','text/plain');
});


Route::get('/contact', [FirstController::class, 'index'])->name('contact');
Route::post('/student/store', [FirstController::class, 'studentstore'])->name('student.store');

Route::get('/country',function(){
    return view('country');
})->middleware('country');

Route::get("/home",[TestController::class, "Home"]);

Route::get("/",[ExampleController::class, "newindex"])->name("newhome");
Route::get("/fullName",[ExampleController::class, "fullName"])->name("fullName");
Route::get("/show-categories",[CategoryController::class, "index"])->name("show-categories");
Route::get("/show-products",[CategoryController::class, "allProducts"])->name("show-products");
Route::get("/category-wise-products/{category_id}",[CategoryController::class, "categoryWiseProducts"])->name("category-wise-products");


/* Route::get("/basis",[
    'uses'=> 'App\Http\Controllers\ExampleController@basis',
    'as' => 'basis',
]); */