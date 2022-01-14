<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('posts.index'
            // 'posts' => Post::latest()->filter(request(['search', 'category', 'author']))
            // ->paginate(6)->withQueryString()
        );
    }
}
