<?php
namespace App\Http\Controllers;
class PostController extends Controller
{
    public function index() // __Invoke solo Util cuando solo se tiene un metodo en el controlador
    {
        $posts = [
            [
                'title' => 'first post', // Primer post
            ],
            [
                'title' => 'second post', // Segundo post
            ],
            [
                'title' => 'third post', // Tercer post
            ],
            [
                'title' => 'fourth post', // Cuarto post
            ]
        ];
        return view('blog', ['posts' => $posts]);
    }
}
