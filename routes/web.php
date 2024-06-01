<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name('frontend_home');


// Route::get('about', function () {
//     return view('about');
// })->name('frontend_about');

Route::get('about', function () {
    return "About Us";
});

Route::get('/', function () {
    return "Home page";
});

Route::fallback(function() {
    return view('404');
});

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('dashboard', function () {return "Dashboard";});
    Route::get('profile', function () {return "Profile";});
    Route::get('photo', function () {return "Photo";});
});

Route::prefix('admin')->group(function() {
    Route::get('about', function () {return "About";});
    Route::get('contact', function () {return "Contact";});
    Route::get('settings', function () {return "Settings";});
});

Route::get('/about/{username}/{age}', function ($username, $age) {
    //return view('about', ['username' => $username, 'age' => $age]);
    return view('about', compact('username', 'age'));
});