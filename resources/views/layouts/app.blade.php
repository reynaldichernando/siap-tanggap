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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    @stack('custom-style')
</head>

<body class="bg-gray-100 antialiased leading-none font-sans">
    <div id="app" class="flex min-h-screen flex-col">
        <header
            class="md:px-16 h-16 md:h-24 px-6 bg-white flex flex-wrap items-center py-4 sticky top-0 shadow-sm z-10">
            <div class="flex flex-1 lg:flex-none items-center mr-6 pb-2">
                <a href="{{ url('/') }}" class="font-bold text-2xl @switch(Route::currentRouteName())
                    @case('vaccination')
                        text-purple-400
                        @break
                    @case('post')
                    @case('post.show')
                        text-teal-400
                        @break
                    @default
                    text-blue-500
                @endswitch">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900"
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg></label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden lg:flex lg:flex-1 lg:flex-row lg:items-center lg:justify-between lg:w-auto lg:relative absolute top-16 md:top-24 lg:top-0 w-full left-0 px-4 pb-4 lg:p-0 bg-white shadow-md lg:shadow-none"
                id="menu">
                <nav class="flex">
                    <div class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-blue-400 {{ Route::is('home') ? 'text-blue-400' : '' }}"
                            href="{{ route('home') }}">Home</a>
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-purple-400 {{ Route::is('vaccination') ? 'text-purple-400' : '' }}"
                            href="{{ route('vaccination') }}">Vaccination Location</a></li>
                        <a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-teal-400 {{ Route::is('post') ? 'text-teal-400' : '' }}"
                            href="{{ route('post') }}">Discussion Forum</a>
                    </div>
                </nav>
                <nav class="flex">
                    <div class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                        @guest
                        <a class="md:p-4 py-3 px-0 block hover:opacity-75 duration-200"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="md:p-4 py-3 px-0 block border-2 border-transparent lg:border-yellow-300 lg:focus:bg-yellow-300 lg:focus:text-white rounded-full"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <a href="{{ route('profile') }}" class="md:p-4 py-3 px-0 block hover:opacity-75 duration-200">
                            {{ explode(' ',trim(Auth::user()->name))[0] }}
                        </a>

                        <a href="{{ route('logout') }}" class="md:p-4 py-3 px-0 block hover:opacity-75 duration-200"
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

        <div class="main-content flex-1">
            @yield('content')
        </div>

        <footer class="flex flex-col bg-gray-900 text-white w-full pt-16 pb-4">
            <div class="flex justify-center w-full lg:w-4/5 xl:w-3/5 mx-auto flex-col md:flex-row md:justify-around items-baseline p-8 space-y-5">
                <div class="flex my-4">
                    <div class="font-bold text-3xl">
                        {{ config('app.name', 'Laravel') }}
                    </div>
                </div>
                <div>
                    <div class="font-semibold mb-4 text-xl">Features</div>
                    <div class="flex flex-col items-start space-y-2 text-md">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('vaccination') }}">Vaccination Location</a>
                        <a href="{{ route('post') }}">Discussion Forum</a>
                    </div>
                </div>
                <div>
                    <div class="font-semibold mb-4 text-xl">Contact Us</div>
                    <div class="flex flex-col items-start space-y-2 text-md">
                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>+62812345678</div>
                        </div>
                        <div class="flex flex-row items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>siap@tanggap.com</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="font-semibold mb-4 text-xl">Follow Us</div>
                    <div class="flex flex-col items-start space-y-2 text-md">
                        <div class="flex flex-col">
                            <div>Reynaldi Chernando</div>
                            <div class="flex flex-row items-center space-x-2 my-3">
                                <a href="https://www.instagram.com/reynaldichernando/" target="_blank" rel="noopener noreferrer">
                                    <svg class="h-6 w-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg>
                                </a>
                                <a href="https://github.com/reynaldichernando" target="_blank" rel="noopener noreferrer">
                                    <svg class="h-6 w-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>GitHub</title>
                                        <path
                                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/reynaldichernando/" target="_blank" rel="noopener noreferrer">
                                    <svg class="h-6 w-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn</title>
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div>Stephen Leonardo</div>
                            <div class="flex flex-row items-center space-x-2 my-3">
                                <a href="https://www.instagram.com/stephenleo7/" target="_blank" rel="noopener noreferrer">
                                    <svg class="h-6 w-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                    </svg>
                                </a>
                                <a href="https://github.com/StephenLeonardo" target="_blank" rel="noopener noreferrer">
                                    <svg class="h-6 w-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>GitHub</title>
                                        <path
                                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/stephen-leonardo/" target="_blank" rel="noopener noreferrer">
                                    <svg class="h-6 w-6 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn</title>
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full text-center my-4 leading-relaxed px-4">&copy; 2021 BINUS40TahunBerkarya. All Rights Reserved.</div>
        </footer>
    </div>

    @stack('scripts')
</body>

</html>