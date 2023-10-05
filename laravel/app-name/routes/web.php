<?php

/**
 * Route::get           | Consultar
 * Route::post          | Guardar
 * Route::delete        | Eliminar
 * Route::put           |
 *  */ 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;

// importar clase de solicitud o peticion;
// use Illuminate\Http\Request;
// Route::get('buscar', function(Request $request) {
//     return $request->all();
// });

// Route::get('/', [PageController::class, 'home'])->name("home");
// Route::get('blog', [PageController::class, 'blog'])->name('blog');
// Route::get('post/{slug}', [PageController::class, 'post'])->name('post');


Route::controller(PageController::class)->group(function() {
    
    Route::get('/', 'home')->name("home");
    Route::get('blog/{post:slug}', 'post')->name('post');
});

Route::redirect('/dashboard', 'posts')->name('dashboard');

Route::resource('posts', PostController::class)->middleware(['auth'])->except('show');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('/profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('/profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('/profile.destroy');
});


require __DIR__ . '/auth.php';


