<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        $newests = News::orderBy('created_at', 'desc')->take(5)->get();

        return view('pages.news.show', compact('news', 'newests'));
    }
}
