<section class="w-full max-w-screen-xl mx-auto p-4">
    <div class="flex flex-col border border-gray-200 rounded-lg shadow-sm md:flex-row md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto w-70 md:rounded-none md:rounded-s-lg" src="/image/about_club.jpg" alt="">
        <div class="flex flex-col justify-between leading-normal p-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">О клубе</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ $page->short_content }}
            </p>
            <a href="{{ route('page.show', $page)  }}"> Подробнее ... </a>
        </div>
    </div>
</section>
