<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siap Tanggap</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .news-card{
            min-width: 15rem;
            border-radius: 0.25rem;
            overflow: hidden;
        }

        .max-h-0 {
            max-height: 0;
        }

        .news-card:hover{
            box-shadow: 2px 2px 4px 4px #a79595;
            
        }

        .no-scrollbar::-webkit-scrollbar {
            width: 1rem;
        }

        /* .no-scrollbar::-webkite-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px     rgb(129, 145, 167); 
            border-radius: 5px;
        } */

        .no-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 10px;
            box-shadow: 0;
            -webkit-box-shadow: inset 0 0 6px     rgb(129, 145, 167);
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        @media only screen and (max-width: 768px) {
            .news-card{
                min-width: 7rem;
                min-height: 5rem;
                /* width: 5rem; */
            }

            .no-scrollbar::-webkit-scrollbar {
                width: 0;
                display: none;
            }

            .no-scrollbar::-webkit-scrollbar-thumb {
                border-radius: 10px;
                /* -webkit-box-shadow: inset 0 0 6px     rgb(129, 145, 167); */
            }

            
        }
        

    </style>

    @yield('custom-style')

</head>
<body>
    <header class="md:px-16 px-6 bg-white flex flex-wrap items-center md:py-0 py-2 hover:bg-blue-100 transition duration-500 ease-in-out">
        <div class="flex-1 flex justify-between items-center">
            <a href="#" class="font-bold text-2xl md:text-4xl text-purple-500">
                Siap Tanggap
            </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="{{ url('/home') }}">Beranda</a></li>
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="{{ url('/vaccination') }}">Lokasi Vaksinasi</a></li>
                    <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400" href="#">Forum Diskusi</a></li>
                    <!-- <li><a class="md:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-indigo-400 md:mb-0 mb-2" href="#">Support</a></li> -->
                </ul>
            </nav>
            <a href="#" class="md:ml-4 md:p-4 py-3 border-b-2 border-transparent hover:border-yellow-400 flex items-center font-medium justify-start md:mb-0 mb-4 pointer-cursor">
                Daftar Akun
            </a>

        </div>

    </header>


    <div class="mt-14 mb-28 main-content">
        @yield('main-content')
    </div>

    <div class="flex items-end justify-center bg-gray-800 text-white p-5 md:px-24">
        <div class="flex justify-between min-w-full h-full md:h-52 flex-col md:flex-row gap-y-5 divide-y-2 divide-blue-100 divide-solid md:divide-none">
            <div class="flex flex-col items-start">
                <div class="font-bold md:text-3xl">
                    Binus40TahunBerkarya
                </div>
            </div>
            <div class="flex flex-col items-start">
                <a href="#">Beranda</a>
                <a href="#">Lokasi Vaksinasi</a>
                <a href="#">Berita</a>
                <a href="#">Forum Diskusi</a>
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
    </div>
    
</body>

@yield('custom-script')

</html>