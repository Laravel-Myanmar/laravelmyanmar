@extends('layouts.app')

@section('title', $post->title)

@section('content')
<header class="masthead" @if($post->featured_image) style="background-image: url('{{$post->featured_image}}')" @endif>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                <h1>{{ $post->title }}</h1>
                <h2 class="subheading">{{ $post->excerpt }}</h2>
                <span class="meta">Posted by
                    <a href="/author/{{ $post->author->slug }}">{{ $post->author->name }}</a>
                    on {{ $post->publish_date->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $post->body !!}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto p-3 border bg-light">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ $post->author->avatar}}" class="rounded-circle">
                    </div>
                    <div class="col-md-10">
                        {!! $post->author->bio !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div id="disqus_thread"></div>
            </div>
        </div>
    </div>
</article>
<hr>

@endsection

@section('js')
<script>
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://laravelmyanamr.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection