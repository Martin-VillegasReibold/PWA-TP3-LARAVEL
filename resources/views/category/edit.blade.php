@section('title')
    My Blog Edit
@endsection

<x-layout>
    <h1>Formulario para Editar un nuevo post</h1>
    <form action="/laravel/myblog/my-blog/public/category/show/{{$post->id}}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br>
        <br>
        <label>
            Publicado por:
            <input type="text" name="poster" value="{{$post->poster}}">
        </label>
        <br>
        <br>
        <label>
            Categoria:
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br>
        <br>
        <label>
            Contenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        <br>
        <br>
        <button type="submit">
            Editar Post
        </button>

    </form>

</x-layout>