<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="/posts/{{$post->id}}">
                {{$post->title}}
            </a>
        </h5>
        <p class="card-text">
            {{$post->body}}
        </p>
        <p class="card-post-meta">
            {{$post->created_at->toFormattedDateString()}}
        </p>

    </div>
</div>
