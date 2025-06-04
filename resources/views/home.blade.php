@section('title')
    My Blog Home
@endsection

<x-layout>
    <section>
        <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
            <div class="flex justify-center xl:w-1/2">
                <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full"
                    src="https://uncommunitymanager.es/wp-content/uploads/redactar-blog.jpg"
                    alt="">
            </div>

            <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0">
                <h2 class="text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
                    Bienvenido al blog de Martin Villegas!
                </h2>

                <p class="block max-w-2xl mt-4 text-gray-500 dark:text-gray-300">Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Aut corporis esse dolorum, illum, consectetur earum provident alias dolore omnis
                    quis tempore voluptatum excepturi ea numquam? Aperiam fugiat consequuntur nostrum odio. </p>

            </div>
        </div>
    </section>
</x-layout>
