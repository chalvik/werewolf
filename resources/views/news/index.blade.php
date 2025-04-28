@extends('layouts.twd.page')

@section('content')

    <section class="w-full max-w-screen-xl mx-auto p-4 bg-gray-600">

        <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            Новости
        </h1>

            @foreach($news as $itemNews)
                <viv class="p-4">
                    <a href="{{ route('news.show', $itemNews) }}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-40 md:w-auto md:rounded-none md:rounded-s-lg" src="{{ Storage::url($itemNews->image)  }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ $itemNews->title }} </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ $itemNews->short_content }}
                            </p>
                        </div>
                    </a>
                </viv>
            @endforeach

    </section>
@endsection
