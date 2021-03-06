<?php

namespace App\Http\Controllers;

use Wink\WinkPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(20);

        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    public function show($slug)
    {
	    $post = WinkPost::with(['tags', 'author'])->whereSlug($slug)->first();

	    if(!$post->published) {
            return redirect('/wink');
        }

        return view('blog.show', compact('post'));
    }
}
