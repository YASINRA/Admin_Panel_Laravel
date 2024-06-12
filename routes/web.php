<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('home', function (){
    // return view('home', ['name' => 'yasin razmi', 'age' => 21]);
    // return view('home')->with('name', 'yasin razmi')->with('age', 21);
    // return view('home')->with(['name' => 'yasin razmi', 'age' => 21]);
    $name = 'yasin razmi';
    $age = 21;
    return view('home', compact('name', 'age'));
});
