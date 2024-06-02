<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

//Route::resource('articles', 'ArticlesController');

// Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
// Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
// Route::post('/articles/store', [ArticlesController::class, 'store'])->name('articles.store');
// Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles.show');
// Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
// Route::put('/articles/{article}', [ArticlesController::class, 'update'])->name('articles.update');
// Route::patch('/articles/{article}', [ArticlesController::class, 'update']);
// Route::delete('/articles/{article}', [ArticlesController::class, 'destroy'])->name('articles.destroy');

// Route::get('about/{id}', function ($id) {
//     return "About Page";
// })->where('id', '[0-9]+');

// Route::get('student/{username}', function ($username) {
//     //return "About Page";
// })->where('username', '[a-zA-Z0-9]+');


Route::get('student/{id}', function ($id){
    //
});

Route::get('teacher/{id}', function ($id){
    //
});