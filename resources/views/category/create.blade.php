@section('title')
    My Blog Create
@endsection

<x-layout>
    <h1>Formulario para crear un nuevo post</h1>
    <form action="/laravel/myblog/my-blog/public/category" method="POST">

        @csrf

        <label>
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <br>
        <label>
            Publicado por:
            <input type="text" name="poster">
        </label>
        <br>
        <br>
        <label>
            Categoria:
            <input type="text" name="category">
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
