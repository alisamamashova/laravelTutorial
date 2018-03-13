<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index_p');
//        $posts = App\Post::all();

//        dd($posts);
//        return view('index', compact('posts'));
    }

//    public function store()
//    {
//        $this->validate(request(), [
//            'title' => 'required',
//            'body' => 'required'
//        ]);
//
//        $post = App\Post::create(request(['title','body']));
//
//        $post->save();
//
//        return redirect('/');
//    }
}
