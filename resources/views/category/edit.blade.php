@section('title')
    My Blog Edit
@endsection

<x-layout>
    <h1>Formulario para Editar un nuevo post</h1>
    <form action="{{ route('show.update', $post->id) }}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Titulo:
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br>
        <br>
        <label>
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

    </form>

</x-layout>
