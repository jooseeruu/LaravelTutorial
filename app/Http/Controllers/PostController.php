<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post; // importar el modelo Post

class PostController extends Controller
{
    public function index() // __Invoke solo Util cuando solo se tiene un metodo en el controlador
    {
        $posts = Post::get(); // Cambiar a DB::table('posts')->get(); para usar Query Builder

        return view('blog', ['posts' => $posts]);
    }
}
