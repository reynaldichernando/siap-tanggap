<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .news-card {
            min-width: 15rem;
            border-radius: 0.25rem;
            overflow: hidden;
        }

        .news-card:hover {
            box-shadow: 2px 2px 4px 4px #a79595;

        }

        .no-scrollbar::-webkit-scrollbar {
            width: 1rem;
        }

        .no-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 10px;
            box-shadow: 0;
            -webkit-box-shadow: inset 0 0 6px rgb(129, 145, 167);
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        @media only screen and (max-width: 768px) {
            .news-card {
                min-width: 7rem;
                min-height: 5rem;
            }

            .no-scrollbar::-webkit-scrollbar {
                width: 0;
                display: none;
            }

            .no-scrollbar::-webkit-scrollbar-thumb {
                border-radius: 10px;
            }
        }
    </style>
</head>

<body class="bg-gray-100 antialiased leading-none font-sans">
    <div id="app" class="flex min-h-screen flex-col">
        <header
            class="md:px-16 px-6 bg-white flex flex-wrap items-center md:py-0 py-2 hover:bg-blue-100 transition duration-500 ease-in-out">
            <div class="flex-1 flex justify-between items-center">
                <a href="{{ url('/') }}" class="font-bold text-2xl md:text-4xl text-blue-500">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <label for="menu-toggle" class="pointer-cursor md:hidden block"><svg class="fill-current text-gray-900"
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg></label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
                <nav>
                    <div class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                            href="{{ route('home') }}">Beranda</a>
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                            href="{{ route('vaccination') }}">Lokasi Vaksinasi</a></li>
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                            href="{{ route('discussion') }}">Forum Diskusi</a>
                        @guest
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                            class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                        @endguest
                    </div>
                </nav>
            </div>
        </header>

        <div class="my-14 main-content flex-1">
            @yield('content')
        </div>

        <footer class="flex items-end justify-center bg-gray-800 text-white p-5 md:px-24">
            <div
                class="flex justify-between min-w-full h-full md:h-52 flex-col lg:flex-row gap-y-5 divide-y-2 divide-blue-100 divide-solid lg:divide-none">
                <div class="flex flex-col items-start">
                    <div class="font-bold md:text-3xl">
                        Binus40TahunBerkarya
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <a href="{{ route('home') }}">Beranda</a>
                    <a href="{{ route('vaccination') }}">Lokasi Vaksinasi</a>
                    <a href="{{ route('discussion') }}">Forum Diskusi</a>
                </div>
                <div class="flex flex-col items-start">
                    <div class="md:text-xl font-semibold">Contact us:</div>
                    <a href="#">binus40tahunberkarya@binus.edu</a>
                </div>
                <div class="flex flex-col items-start">
                    <div class="md:text-xl font-semibold">Author:</div>
                    <a href="#">Reynaldi Chernando</a>
                    <a href="#">Stephen Leonardo</a>
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>

</html>