<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



// Rutas de la aplicación

// Ruta para la página principal (home). Muestra la vista 'welcome' y se le asigna el nombre 'home' para poder referenciarla en las vistas.
Route::view('/', 'welcome')->name('home');

// Ruta para la página de contacto. Muestra la vista 'contact' y se le asigna el nombre 'contact'.
Route::view('contacto', 'contact')->name('contact');


// Ruta que responde a peticiones GET en la URL 'blog' usamos metodo get porque así contenemos toda la logica en un solo bloque de código
Route::get('blog', [PostController::class, 'index'])->name('blog');
// Utilizamos Controladores para manejar la lógica de la aplicación
// Usamos el método 'index' del controlador PostController para manejar la lógica de la página 'blog'.


// Ruta para la página sobre nosotros. Muestra la vista 'about' y se le asigna el nombre 'about'.
Route::view('nosotros', 'about')->name('about');



require __DIR__ . '/auth.php';
