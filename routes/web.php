<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
});


// dynamic routing
Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});

// Route::redirect('/home', '/');


Route::get('/user', [UserController::class, 'getName']);

// dynamic class fn call
Route::get('/user/{name}', [UserController::class, 'getDynamic']);

Route::get('user/child/{name}', [UserController::class,'getChild']);
Route::get('/{name}', [UserController::class,'getUserView']);
Route::get('/admin/{adminname}', [UserController::class,'myAdmin']);