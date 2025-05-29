@section('title')
    My Blog Detalles
@endsection

<x-layout>
    <a href="/laravel/myblog/my-blog/public/category/show">Volver a la pagina anterior</a>
    <h1>Pagina detalles</h1>
    <h2>Titulo: {{ $post->title }}</h2>
    <p>
        <b>Categoria: </b> {{ $post->category }}
    </p>
    <p>
        {{ $post->content }}
    </p>

    <a href="/laravel/myblog/my-blog/public/category/show/{{ $post->id }}/edit">Editar Post</a>

    <form action="/laravel/myblog/my-blog/public/category/show/{{ $post->id }}" method="POST">

        @csrf

        @method('DELETE')

        <button type="submit">
            Eliminar Post
        </button>
    </form>

</x-layout>
