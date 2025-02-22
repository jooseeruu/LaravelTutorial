<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() // __Invoke solo Util cuando solo se tiene un metodo en el controlador
    {
        $posts = Post::get(); // Cambiar a DB::table('posts')->get(); para usar Query Builder

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
