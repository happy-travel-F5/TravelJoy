<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [DestinationController::class, 'index'])->name('destinations');
Route::get('/create', [DestinationController::class, 'create'])->name('create');
Route::post('/store', [DestinationController::class, 'store'])->name('store');
Route::get('/show/{destination}', [DestinationController::class, 'show'])->name('show');
Route::get('/edit/{destination}', [DestinationController::class, 'edit'])->name('edit');
Route::put('/update/{destination}', [DestinationController::class, 'update'])->name('update');
Route::delete('/destroy/{destination}', [DestinationController::class, 'destroy'])->name('destroy');



Route::resource('destinations', DestinationController::class);

// Route::middleware(['auth'])->group(function () {
 
//     Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
//     Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');
//     Route::get('/destinations/{destination}', [DestinationController::class, 'show'])->name('destinations.show');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
