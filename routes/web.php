<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('about', function (){
    return "About Page";
});

Route::get('contact', function (){
    return "Contact Page";
});

//Route::redirect('about', 'contact', 301);
Route::permanentRedirect('about', 'contact');