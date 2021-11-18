<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function novedades()
    {
        return view('posts.novedades', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function servicios()
    {
        return view('posts.servicios');
    }
    
    public function contacto()
    {
        return view('posts.contacto');
    }
}
