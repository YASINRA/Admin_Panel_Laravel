<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('admin/home', function (){
    return view('admin.home');
});

Route::get('customer/home', function (){
    return view('customer.home');
});
