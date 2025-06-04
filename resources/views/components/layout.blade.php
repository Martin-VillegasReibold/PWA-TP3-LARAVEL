<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @stack('css')


</head>

<body class="bg-gray-100 dark:bg-gray-900">

    <header>

        <nav class="bg-white shadow dark:bg-gray-800">
            <div
                class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
                <a href="{{ route('home.getHome') }}"
                    class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Home</a>

                <a href="{{ route('category.getCat') }}"
                    class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Blog</a>

                @guest
                    <a href="{{ route('login') }}"
                        class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Login</a>

                    <a href="{{ route('register') }}"
                        class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Registrarse</a>
                @endguest
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Usuario:
                        {{ Auth::user()->name }}</a>
                @endauth
            </div>
        </nav>

    </header>

    {{ $slot }}


    <footer></footer>

    @stack('js')

</body>

</html>
