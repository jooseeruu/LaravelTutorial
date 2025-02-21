<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rutas de la aplicación

// Ruta para la página principal (home). Muestra la vista 'welcome' y se le asigna el nombre 'home' para poder referenciarla en las vistas.
Route::view('/', 'welcome')->name('home');

// Ruta para la página de contacto. Muestra la vista 'contact' y se le asigna el nombre 'contact'.
Route::view('contacto', 'contact')->name('contact');

// Ruta para la página del blog. Muestra la vista 'blog' y se le asigna el nombre 'blog'.
Route::view('blog', 'blog')->name('blog');

// Ruta para la página sobre nosotros. Muestra la vista 'about' y se le asigna el nombre 'about'.
Route::view('nosotros', 'about')->name('about');



require __DIR__ . '/auth.php';
