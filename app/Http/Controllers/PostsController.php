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
    {   //dd(request(['title', 'body'])); //вывод заголовка и содержимого поста

//        $this->validate(request(), [
//            'title' => 'required',
//            'body' => 'required'
//        ]);
//
        $post = Post::create(request(['title','body'])); //вместо CREATE A NEW POST USING THE REQUEST DATA $post = new Post;  $post->title =request('title'); $post->body = request('body'); SAVE IT TO THE DATABASE  $post->save();

        //And then REDIRECT TO THE HOME PAGE
        return redirect('/');
    }
    public function create()
    {
        return view('posts.create');
    }
}
