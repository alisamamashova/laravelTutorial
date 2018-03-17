@extends('layouts.master')

@section('content')

    <section>
        @foreach($posts as $post)
            @include('posts.post')
        @endforeach
    </section>

@endsection

