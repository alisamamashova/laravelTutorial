@extends('layouts.master')

@section('content')

    <section>
        @foreach($posts as $post)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    {{$post->title}}
                </h5>
                <p class="card-text">
                    {{$post->body}}
                </p>
        </div>
        </div>

        @endforeach
    </section>

@endsection

