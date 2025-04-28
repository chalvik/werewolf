<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\PageController;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', function () {
            return view('home');
        })->name('home');
        Route::get('news', [NewsController::class, 'index'])->name('news.index');
        Route::get('news/{news:slug}', [NewsController::class, 'show'])->name('news.show');

        Route::get('gallery', [NewsController::class, 'index'])->name('gallery.index');

        Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
    }
);
