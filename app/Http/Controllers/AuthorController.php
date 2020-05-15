<?php

namespace App\Http\Controllers;

use Wink\WinkAuthor;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($slug)
    {
        $author = WinkAuthor::with('posts')->whereSlug($slug)->firstOrFail();

        $posts = $author->posts()->paginate(20);

        return view('author.show', compact('author', 'posts'));
    }
}
