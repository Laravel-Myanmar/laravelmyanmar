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
    </div>
</article>
<hr>
@endsection
