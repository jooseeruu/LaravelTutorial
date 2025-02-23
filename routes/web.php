<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



// Rutas de la aplicación

// Ruta para la página principal (home). Muestra la vista 'welcome' y se le asigna el nombre 'home' para poder referenciarla en las vistas.
Route::view('/', 'welcome')->name('home');

// Ruta para la página de contacto. Muestra la vista 'contact' y se le asigna el nombre 'contact'.
Route::view('contacto', 'contact')->name('contact');


Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');

// Utilizamos Controladores para manejar la lógica de la aplicación
// Usamos el método 'index' del controlador PostController para manejar la lógica de la página 'blog'.


// Ruta para la página sobre nosotros. Muestra la vista 'about' y se le asigna el nombre 'about'.
Route::view('nosotros', 'about')->name('about');



require __DIR__ . '/auth.php';
