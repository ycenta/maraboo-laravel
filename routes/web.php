<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaraboutController;
use App\Http\Controllers\CommentController;

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

// Route::get('/', [MaraboutController::class, 'showMarabouts'])
//     ->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })
//     ->middleware(['auth'])
//     ->name('dashboard');

// Route::get('/showmarabouts', [MaraboutController::class, 'showMarabouts'])
//     ->name('marabout.show');



    /**
     * Marabout
     */

        Route::get('/', [MaraboutController::class, 'showMarabouts'])
        ->name('home');

        Route::post('/createmarabout', [MaraboutController::class, 'createMarabout'])
            ->middleware(['auth'])
            ->name('marabout.create');

        Route::patch('/marabout/{marabout}', [MaraboutController::class, 'update'])
            ->middleware(['auth'])
            ->name('marabout.update');

        Route::get('/formmarabout', function() { //formulaire A VIRER
            return view('create-marabout');
        })
        ->middleware(['auth'])
        ->name('marabout.form');

        Route::get('/updatemarabout', function() { //formulaire A VIRER
            return view('update-marabout');
        })
        ->middleware(['auth'])
        ->name('marabout.updateform');

        Route::get('/profilemarabout/{marabout}', [MaraboutController::class, 'profileMarabout'])
            ->name('profilmarabout');

    /**
     * Commentaire
     */
    Route::get('/formcomment/{id}', function($id){
            return view('create-comment', ['id'=>$id]); // Formulaire à VIRER
        })->name('comment.form');

    Route::post('/createcomment', [CommentController::class, 'createComment'])
        ->name('comment.create');

    Route::delete('/comment/{comment}', [CommentController::class, 'delete'])
        ->name('comment.delete');

    /**
     * Spells
     */

    Route::get('/spell', [SpellController::class, 'showSpells'])
    ->name('comment.form');

    Route::post('/createspell', [SpellController::class, 'createSpell'])
    ->name('spell.create');

    Route::patch('/spell/{comment}', [SpellController::class, 'update'])
    ->name('spell.delete');

    Route::delete('/spell/{comment}', [SpellController::class, 'delete'])
    ->name('spell.delete');



/*Route::patch('/comment/{comment}', [CommentController::class, 'update'])
    ->name('comment.update');*/

require __DIR__.'/auth.php';
