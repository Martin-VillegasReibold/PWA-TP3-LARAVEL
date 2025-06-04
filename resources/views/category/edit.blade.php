@section('title')
    My Blog Edit
@endsection

<x-layout>



    <section class="mt-30 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Actualizar Post</h2>

        <form action="{{ route('show.update', $post->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Titulo</label>
                    <input name="title" type="text" value="{{ $post->title }}"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Categoria</label>
                    <select id="categories" name="category_id"
                        class="px-4 py-2 mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 cursor-pointer">
                        <option selected disabled>Selecciona una opción</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Contenido</label>
                    <textarea name="content" id="content" rows="4"
                        class="mt-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Escribe aqui...">{{ $post->content }}</textarea>
                </div>

            </div>

            <div class="flex justify-end mt-6">
                <button type="submit"
                    class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 cursor-pointer">Actualizar
                </button>
            </div>
        </form>
    </section>









    {{-- <h1>Formulario para Editar un nuevo post</h1>
    <form action="{{ route('show.update', $post->id) }}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Titulo:
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br>
        <br>
        {{--     <label>
            Publicado por:
            <input type="text" name="poster" value="{{ $post->poster }}">
        </label> 
        <br>
        <br>
        <label>
            Categoria:
            <select name="category_id" id="categories">
                <option selected disabled>Selecciona una opción</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </label>
        <br>
        <br>
        <label>
            Contenido:
            <textarea name="content">{{ $post->content }}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">
            Editar Post
        </button>

    </form> --}}

</x-layout>
