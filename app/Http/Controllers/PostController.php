<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Asegúrate de importar el modelo Post si no lo has hecho

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Aquí obtienes todos los posts y los pasas a la vista
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Aquí simplemente devuelves la vista del formulario para crear un nuevo post
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aquí validas y almacenas el nuevo post en la base de datos
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index');
    }

    // Otros métodos como show, edit, update, destroy...
}
