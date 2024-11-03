<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/details/{id}', [HomeController::class, 'show'])->name('details');
Route::any('/search', [HomeController::class, 'search'])->name('search');


Route::get('/okk', function () {
    return view('welcome');
});

Route::view('searchview', 'searchview');
