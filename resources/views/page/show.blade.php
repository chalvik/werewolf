@extends('layouts.twd.page')

@section('content')
    <section class="w-full max-w-screen-xl mx-auto p-4">
    <div class="p-4  bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            {!! $page->title  !!}
        </h1>

        <div class="m-5">
            <img class="rounded-t-lg mx-auto" src="{{ Storage::url($page->image)  }}" alt="{{$page->title}}" />
        </div>

        <div class="p-5">
            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {!! $page->content  !!}
            </div>
        </div>
    </div>
    </section>
@endsection
