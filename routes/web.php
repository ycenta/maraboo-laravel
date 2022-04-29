<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaraboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SpellController;

use App\Models\Marabout;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->name('dashboard');
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

        Route::delete('/marabout/{marabout}', [MaraboutController::class, 'delete'])
            ->middleware(['auth'])
            ->name('marabout.delete');

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
    Route::get('/admin/comment',[CommentController::class, 'showComments'])
        ->name('comment.form');

    Route::post('/createcomment', [CommentController::class, 'createComment'])
        ->name('comment.create');

    Route::delete('/comment/{comment}', [CommentController::class, 'delete'])
        ->name('comment.delete');

    /**
     * Spells
     */

    Route::get('/admin/spell', [SpellController::class, 'showSpells'])
    ->name('spell.form');

    Route::post('/admin/createspell', [SpellController::class, 'createSpell'])
    ->name('spell.create');

    Route::patch('/admin/spell/{spell}', [SpellController::class, 'update'])
    ->name('spell.update');

    Route::delete('/admin/spell/{spell}', [SpellController::class, 'delete'])
    ->name('spell.delete');


/**
 * Admin
 */

Route::get('/admin', function () {
    $marabouts = Marabout::get();
    return view('dashboardadmin',compact('marabouts'));
})
    ->name('dashboardadmin');


/*Route::patch('/comment/{comment}', [CommentController::class, 'update'])
    ->name('comment.update');*/

require __DIR__.'/auth.php';
