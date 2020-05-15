@extends('layouts.app')

@section('title', $author->name)

@section('content')
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
		    <span><img src="{{ $author->avatar }}" class="rounded-circle" alt="{{ $author->name }}"><span>
                    <h1>{{ $author->name }}</h1>
                    <span class="subheading">{!!$author->bio !!}</span>
                </div>
            </div>
        </div>
    </div>
</header>

@include('components.blog.article-list', ['posts' => $posts])

@endsection
