<?php

namespace App\Http\Controllers;

use Wink\WinkPage;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function show($slug)
    {
        $page = WinkPage::whereSlug($slug)->firstOrFail();

        return view('pages.show', compact('page'));
    }
}
