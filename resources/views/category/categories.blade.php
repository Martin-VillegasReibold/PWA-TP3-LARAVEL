@section('title')
    My Blog Categories
@endsection

<x-layout>


    <section>
        <div class="container px-6 py-10 mx-auto">
            @auth
                <div class="flex justify-center mb-6">
                    <a href="{{ route('category.getCreate') }}"
                        class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 cursor-pointer">Create
                        Post</a>
                </div>

            @endauth


            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white text-center">Explore
                all our
                categories!</h1>

            <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
                By defining the specific genres and their conventions, we can start to look for each element within
                masterworks and study to understand ways of meeting these expectations within our own stories.
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">


                <div class="space-y-3 bg-white shadow dark:bg-gray-800 p-3 text-center rounded-xl">


                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">All Categories</h1>

                    <p class="text-gray-500 dark:text-gray-300 text-justify">

                        Look for all our One-Shots without any kind of filter, just read what catch your eye first.
                        Make sure you are using the best combination possible to deliver a satisfying story experience.

                    </p>

                    <a href="{{ route('show.getIndex') }}"
                        class="inline-flex items-center -mx-1 text-sm text-blue-500 transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        <span class="mx-1">All Posts</span>
                        <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>

                @foreach ($categories as $category)
                    <div class="space-y-3 bg-white shadow dark:bg-gray-800 p-3 rounded-xl text-center">


                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">{{ $category->name }}
                        </h1>

                        <p class="text-gray-500 dark:text-gray-300 text-justify">
                            {{ $category->description }}
                        </p>

                        <a href="{{ route('show.getIndex', ['category' => $category->name]) }}"
                            class="inline-flex items-center -mx-1 text-sm text-blue-500 transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            <span class="mx-1">Related Posts</span>
                            <svg class="w-4 h-4 mx-1 rtl:-scale-x-100" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-layout>
