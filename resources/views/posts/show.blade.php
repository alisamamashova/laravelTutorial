@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        {{--<h1> A place to show a post</h1>--}}

        <h1>{{$post->title}}</h1>
        {{$post->body}}
        <hr>
<div class="comments">
    <ul class="list-group">
    @foreach($post->comments as $comment)
        {{--<article>--}}
                <li class="list-group-item">
                    <strong>
                        {{$comment->created_at->diffForHumans()}}: &nbsp;
                        {{--время, когда был добавлен комментарий--}}
                    </strong>
                    {{$comment->body}}
        {{--</article>--}}
                </li>
     @endforeach
    </ul>
</div>
        <hr>
        {{--Добавление нового комментария--}}
        <div class="card">
            <div class="card-block">
                {{--Форма для добавления комментария--}}
                <form method="POST" action="/posts/{{$post->id}}/comments">

                    {{ csrf_field() }}

                    {{--{{method_field('PATCH')}}--}}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                    </div>
                 {{--Кнопка для добавления комментария--}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection