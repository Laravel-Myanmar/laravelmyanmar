<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($posts as $post)
                <div class="post-preview">
                    <a href="/blogs/{{ $post->slug }}">
                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$post->excerpt}}
                    </h3>
                    </a>
                    <p class="post-meta">Posted by
                    <a href="/author/{{ $post->author->slug }}">{{ $post->author->name }}</a>
                    on {{ $post->publish_date->diffForHumans() }}</p>
                </div>
                <hr>
            @endforeach
        
            {{ $posts->links() }}
        </div>
    </div>
</div>
<hr>
