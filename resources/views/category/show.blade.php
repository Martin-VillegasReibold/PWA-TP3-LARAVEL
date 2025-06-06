@section('title')
    My Blog Details
@endsection

<x-layout>

    <section>

        
        <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">
            

            <h2
                class="max-w-2xl mx-auto text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
                {{ $post->title }}
            </h2>

            <label
                class="max-w-2xl mx-auto text-xl font-semibold tracking-tight text-gray-800 xl:text-xl dark:text-white">
                Post by {{ $post->user->name }} | {{ $post->created_at }}
            </label>

            @auth
                @if (auth()->user()->id === $post->user_id)
                    <div class="grid grid-cols-1 gap-8 mt-1 md:mt-5 md:grid-cols-2">

                        <div class="inline-flex w-full mt-6 sm:w-auto">
                            <a href="{{ route('show.getEdit', $post->id) }}"
                                class="inline-flex items-center justify-center w-full px-6 py-2 text-white duration-300 bg-blue-600 rounded-lg hover:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                Edit
                            </a>
                        </div>
                        <form action="{{ route('show.destroy', $post->id) }}" method="POST">

                            @csrf

                            @method('DELETE')
                            <div class="inline-flex w-full mt-6 sm:w-auto">
                                <button
                                    class="inline-flex items-center justify-center w-full px-6 py-2 text-white duration-300 bg-red-600 rounded-lg hover:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-80 cursor-pointer"
                                    type="submit">
                                    Delete
                                </button>
                            </div>
                        </form>
                    </div>
                @endif
            @endauth

            <p class="max-w-4xl mt-6 text-justify leading-relaxed indent-8 text-gray-500 dark:text-gray-300 whitespace-pre-wrap">
                {{ $post->content }}
            </p>

            
        </div>
    </section>
</x-layout>
