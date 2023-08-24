<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [DestinationController::class, 'index'])->name('destinations');
Route::get('/destination', [DestinationController::class, 'create'])->name('destinations.create');
Route::post('/destination', [DestinationController::class, 'store'])->name('destinations.store');
Route::get('/destinations/{id}', [DestinationController::class, 'show'])->name('destinations.show');
Route::get('/destination/{id}', [DestinationController::class, 'edit'])->name('destinations.edit');
Route::put('/destination/{id}', [DestinationController::class, 'update'])->name('destinations.update');
Route::delete('/destination/{id}', [DestinationController::class, 'destroy'])->name('destinations.destroy');



// Route::middleware(['auth'])->group(function () {
 
//     Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
//     Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');
//     Route::get('/destinations/{destination}', [DestinationController::class, 'show'])->name('destinations.show');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [DestinationController::class, 'search'])->name('search');