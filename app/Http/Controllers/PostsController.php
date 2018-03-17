<?php

namespace App\Http\Controllers;

use App;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

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

    // public function show($id)
        public function show(Post $post)
        {
            //$post = Post::find($id);
            return view('posts.show', compact('post'));
        }

}
