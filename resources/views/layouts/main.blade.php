<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Movie App</title>


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <livewire:styles>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </head>
    <body class="font-sans bg-blue-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}"><img class="w-320" src="https://img.icons8.com/fluency/50/000000/logo.png"/></a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hoverLtext-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hoverLtext-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hoverLtext-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown />
                <div class="md:ml-4 mt-3 md:mt-0">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                        <li><a href="{{ route('login') }}" class="text-white">Войти</a></li>
                        @endguest

                        @auth
                        <li><a href="{{ route('home') }}" class="text-white">Личный кабинет</a></li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">
                                {{ __('Logout') }}
                            </button>
                        </form>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="border border-t border-gray-800">
        <div class="container mx-auto text-sm px-4 py-6">
            Powered by <a href="https://www.themoviedb.org/documentation/api" class="underline hover:text-gray-300">TMDb API</a>
        </div>
    </footer>

    <livewire:scripts>
    @yield('scripts')
</body>
</html>
