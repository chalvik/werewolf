<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::query()->get()
        ]);
    }

    public function show(Page $page)
    {
        return view('page.show', [
            'page' => $page
        ]);
    }
}
