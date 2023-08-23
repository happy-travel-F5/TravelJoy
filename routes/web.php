<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [DestinationController::class, 'index'])->name('destinations');

Route::get('/header', function () {
    return view('header');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [DestinationController::class, 'search'])->name('search');