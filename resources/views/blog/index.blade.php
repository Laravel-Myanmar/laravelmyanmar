@extends('layouts.app')

@section('title', 'Home')

@section('content')
<header class="masthead">
<div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Laravel Myanamr</h1>
                    <span class="subheading">မြန်မာဘာသာ Laravel lessons များ</span>
                </div>
            </div>
        </div>
    </div>
</header>

@include('components.blog.article-list', ['posts' => $posts])

@endsection
