<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = App\Post::all();

//        dd($posts);
        return view('welcome', compact('posts'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = App\Post::create(request(['title','body']));

        $post->save();

        return redirect('/');
    }
}
