@section('title')
    My Blog Posts
@endsection

<x-layout>
    <h1>Pagina index</h1>
    <a href="{{ route('category.getCat') }}">Volver a la pagina anterior</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('show.getShow', $post->id) }}">{{ $post->title }}</a>

            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}

</x-layout>
