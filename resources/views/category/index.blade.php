@section('title')
    My Blog Posts
@endsection

<x-layout>
    <h1>Pagina index</h1>
    <a href="/laravel/myblog/my-blog/public/category/create">Crear nuevo Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/laravel/myblog/my-blog/public/category/show/{{ $post->id }}">{{ $post->title }}</a>

            </li>
        @endforeach
    </ul>

</x-layout>
