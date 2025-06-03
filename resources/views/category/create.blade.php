@section('title')
    My Blog Create
@endsection

<x-layout>
    <h1>Formulario para crear un nuevo post</h1>
    <form action="{{ route('show.store') }}" method="POST">

        @csrf

        <label>
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <br>
 {{--        <label>
            Publicado por:
            <input type="text" name="poster">
        </label> --}}
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
            <textarea name="content"></textarea>
        </label>
        <br>
        <br>
        <button type="submit">
            Crear Post
        </button>

    </form>

</x-layout>
