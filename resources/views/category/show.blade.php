@section('title')
    My Blog Detalles
@endsection

<x-layout>
    <a href="{{ route('category.getCat') }}">Volver a categorias</a>
    <h1>Pagina detalles</h1>
    <h2>Titulo: {{ $post->title }}</h2>
    <p>
        <b>Usuario: </b> {{ $post->user->name }}
    </p>
    <p>
        {{ $post->content }}
    </p>
    <p>
        <b>Publicado: </b> {{ $post->created_at }} {{-- ->diffForHumans() --}}
    </p>

    @auth

        @if (auth()->user()->id === $post->user_id)
            <a href="{{ route('show.getEdit', $post->id) }}">Editar Post</a>

            <form action="{{ route('show.destroy', $post->id) }}" method="POST">

                @csrf

                @method('DELETE')

                <button type="submit">
                    Eliminar Post
                </button>
            </form>
        @endif

    @endauth

</x-layout>
