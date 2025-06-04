@section('title')
    My Blog Posts
@endsection

<x-layout>

    <section>
        <div class="container px-6 py-10 mx-auto">

            {{--    <a href="{{ route('category.getCat') }}"
                class="text-xl font-semibold text-blue-500 transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                Volver a Categorias
            </a> --}}

            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white text-center">Posts
            </h1>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">

                @foreach ($posts as $post)
                    <div class="lg:flex bg-white shadow dark:bg-gray-800 p-3 rounded-xl">
                        <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                            src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="">

                        <div class="flex flex-col justify-between py-6 lg:mx-6">
                            <a href="{{ route('show.getShow', $post->id) }}"
                                class="text-xl font-semibold text-blue-500 transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                {{ $post->title }}
                            </a>

                            <span
                                class="text-sm text-gray-500 dark:text-gray-300">{{ $post->created_at->diffForHumans() }}
                                |
                                {{ $post->user->name }}</span>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</x-layout>
