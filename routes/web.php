<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('destinations', DestinationController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
    Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');
    Route::get('/destinations/{destination}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
    Route::put('/destinations/{destination}', [DestinationController::class, 'update'])->name('destinations.update');
    Route::delete('/destinations/{destination}', [DestinationController::class, 'destroy'])->name('destinations.destroy');
});


   

