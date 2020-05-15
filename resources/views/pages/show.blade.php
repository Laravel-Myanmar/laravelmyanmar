@extends('layouts.app')

@section('title', 'About Laravel Myanamr')

@section('content')
   <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>{{ $page->title }}</h1>
          </div>
        </div>
      </div>
    </div>
  </header> 

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        {!! $page->body !!}
        </div>
    </div>
</div>
<hr>
@endsection
