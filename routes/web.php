<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('frontend_home');


Route::get('about', function () {
    return view('about');
})->name('frontend_about');


Route::get('/about/{username}/{age}', function ($username, $age) {
    //return view('about', ['username' => $username, 'age' => $age]);
    return view('about', compact('username', 'age'));
});

/*
Route::post()
Route::put()
Route::delete()
*/
