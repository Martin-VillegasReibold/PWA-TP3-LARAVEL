@section('title')
    My Blog Home
@endsection

<x-layout>
    <div class="max-w-4xl mx-auto px-4">
        {{--  <h1>Pagina Principal view</h1> --}}
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                martin aqui
            </x-slot>
            hola que tal!!!!!
        </x-alert2>
        <p>hola mundoa!</p>
    </div>
</x-layout>
