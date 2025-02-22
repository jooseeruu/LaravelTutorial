<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() // __Invoke solo Util cuando solo se tiene un metodo en el controlador
    {
        $posts = DB::table('posts')->get(); // Obtener todos los registros de la tabla posts

        return view('blog', ['posts' => $posts]);
    }
}
