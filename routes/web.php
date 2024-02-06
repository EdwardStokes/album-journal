<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // resource controllers
    Route::resource('/posts', PostController::class)->names([
        'index' => 'posts.index',
        'create' => 'posts.create',
        'store' => 'posts.store',
        'show' => 'posts.show',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'destroy' => 'posts.destroy',
    ]);

    Route::resource('/albums', AlbumController::class)->names([
        'index' => 'albums.index',
        'create' => 'albums.create',
        'store' => 'albums.store',
        'show' => 'albums.show',
        'edit' => 'albums.edit',
        'update' => 'albums.update',
        'destroy' => 'albums.destroy',
    ]);

    Route::resource('/artists', \App\Http\Controllers\ArtistController::class)->names([
        'index' => 'artists.index',
        'create' => 'artists.create',
        'store' => 'artists.store',
        'show' => 'artists.show',
        'edit' => 'artists.edit',
        'update' => 'artists.update',
        'destroy' => 'artists.destroy',
    ]); 
});

require __DIR__.'/auth.php';
