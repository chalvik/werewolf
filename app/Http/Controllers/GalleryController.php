<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::query()->get()
        ]);
    }

    public function show(News $news)
    {
        return view('news.show', [
            'news' => $news
        ]);
    }
}
