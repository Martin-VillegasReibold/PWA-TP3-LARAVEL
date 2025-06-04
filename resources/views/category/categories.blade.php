@section('title')
    My Blog Categories
@endsection

<x-layout>


    <section>
        <div class="container px-6 py-10 mx-auto">
            @auth
                <div class="flex justify-center mb-6">
                    <a href="{{ route('category.getCreate') }}"
                        class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 cursor-pointer">Crear
                        Post</a>
                </div>

            @endauth


            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Explora las
                categorias disponibles!</h1>

            <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">


                <div class="space-y-3 bg-white shadow dark:bg-gray-800 p-3 text-center rounded-xl">


                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Todas las Categorias</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos
                        vel non corrupti doloribus voluptatum eveniet
                    </p>

                    <a href="{{ route('show.getIndex') }}"
                        class="inline-flex items-center -mx-1 text-sm text-blue-500 transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                        <span class="mx-1">Todos los Posts</span>
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

                        <p class="text-gray-500 dark:text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos
                            vel non corrupti doloribus voluptatum eveniet
                        </p>

                        <a href="{{ route('show.getIndex', ['category' => $category->name]) }}"
                            class="inline-flex items-center -mx-1 text-sm text-blue-500 transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                            <span class="mx-1">Posts relacionados</span>
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













    {{--  <h1>Categorias:</h1>
    @auth
        <a href="{{ route('category.getCreate') }}">Crear nuevo Post</a>
    @endauth
    <ul>
        <li>
            <a href="{{ route('show.getIndex') }}">Todo</a>
        </li>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('show.getIndex', ['category' => $category->name]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul> --}}


</x-layout>
