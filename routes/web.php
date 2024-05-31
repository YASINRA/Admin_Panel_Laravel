<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about/{username}/{age}', function ($username, $age) {
    //return view('about', ['username' => $username, 'age' => $age]);
    return view('about', compact('username', 'age'));
});

/*
Route::post()
Route::put()
Route::delete()
*/
