<?php

namespace App\Http\Controllers;

use App;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required|min:5', //заголовок не менее 5 символов
            'body' => 'required'
        ]);
        Post::create(request(['title','body']));

        //And then REDIRECT TO THE HOME PAGE
        return redirect('/');
    }
    public function create()
    {
        return view('posts.create');
    }
}
