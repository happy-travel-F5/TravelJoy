<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Rutas para mostrar y crear destinos (adapta según tu lógica)

Route::get('/', [DestinationController::class, 'index'])->name('destinations');
// Route::get('/destinations/{id}', [DestinationController::class, 'show'])->name('destinations.show');

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/create-destination', [DestinationController::class, 'create'])->name('destinations.create');
//     Route::post('/store-destination', [DestinationController::class, 'store'])->name('destinations.store');
// });

// Ruta para mostrar la vista del encabezado
Route::get('/header', function () {
    return view('header');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
