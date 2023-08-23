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

Route::resource('destinations', DestinationController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
    Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');
    Route::get('/destinations/{destination}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
    Route::put('/destinations/{destination}', [DestinationController::class, 'update'])->name('destinations.update');
    Route::delete('/destinations/{destination}', [DestinationController::class, 'destroy'])->name('destinations.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
