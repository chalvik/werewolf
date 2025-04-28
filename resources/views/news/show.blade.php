@extends('layouts.twd.page')

@section('content')

    <section class="w-full max-w-screen-xl mx-auto p-4">

        @include('layouts.twd.inc.breadcrumbs')

        <div class="p-4  bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {!! $news->title  !!}
            </h1>

            @if ($news->image)
            <div class="m-5">
                <img class="rounded-t-lg mx-auto" src="{{ Storage::url($news->image)  }}" alt="{{$news->title}}" />
            </div>
            @endif

            <div class="p-5">
                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {!! $news->content  !!}
                </div>
            </div>
        </div>
    </section>
@endsection
