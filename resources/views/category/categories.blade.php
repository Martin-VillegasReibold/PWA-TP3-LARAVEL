@section('title')
    My Blog Categories
@endsection

<x-layout>
    <h1>Categorias:</h1>
    @auth
        <a href="{{ route('category.getCreate') }}">Crear nuevo Post</a>
    @endauth
    <ul>
        <li>
            <a href="{{ route('show.getIndex') }}">Todo</a>
        </li>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('show.getIndex', ['category' => $category->name]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>


</x-layout>
