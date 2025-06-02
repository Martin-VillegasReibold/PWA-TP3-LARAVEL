@section('title')
    My Blog Detalles
@endsection

<x-layout>
    <a href="{{ route('category.getCat') }}">Volver a categorias</a>
    <h1>Pagina detalles</h1>
    <h2>Titulo: {{ $post->title }}</h2>
    <p>
        <b>Categoria: </b> {{ $post->category_id }}
    </p>
    <p>
        {{ $post->content }}
    </p>

    <a href="{{ route('show.getEdit', $post->id) }}">Editar Post</a>

    <form action="{{ route('show.destroy', $post->id) }}" method="POST">

        @csrf

        @method('DELETE')

        <button type="submit">
            Eliminar Post
        </button>
    </form>

</x-layout>
