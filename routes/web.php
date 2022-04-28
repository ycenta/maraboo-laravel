<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaraboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MaraboutController::class, 'showMarabouts'])
    ->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })
//     ->middleware(['auth'])
//     ->name('dashboard');

// Route::get('/showmarabouts', [MaraboutController::class, 'showMarabouts'])
//     ->name('marabout.show');

Route::post('/createmarabout', [MaraboutController::class, 'createMarabout'])
    ->middleware(['auth'])
    ->name('marabout.create');

Route::patch('/marabout/{marabout}', [MaraboutController::class, 'update'])
    ->middleware(['auth'])
    ->name('marabout.update');

Route::get('/formmarabout', function() {
    return view('create-marabout');
})
    ->name('marabout.form');

Route::get('/profilemarabout/{id}', [MaraboutController::class, 'profileMarabout'])
    ->name('profilmarabout');

require __DIR__.'/auth.php';