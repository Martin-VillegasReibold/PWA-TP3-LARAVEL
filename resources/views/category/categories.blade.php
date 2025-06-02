@section('title')
    My Blog Categories
@endsection

<x-layout>
    <h1>Categorias:</h1>
    <a href="{{ route('category.getCreate') }}">Crear nuevo Post</a>
    <ul>
        <li>
            <a href="{{ route('show.getIndex') }}">Todo</a>
        </li>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('show.getIndex', ['category' => $category]) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>


</x-layout>
