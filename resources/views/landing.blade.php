<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .news-card{
            min-width: 15rem;
            border-radius: 0.25rem;
            overflow: hidden;
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
            -webkit-box-shadow: inset 0 0 6px     rgb(129, 145, 167);
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
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

</head>
<body class="">
<!-- 
    <nav class="flex flex-row justify-center py-5 relative">
        <a href="#" class="font-bold text-2xl ml-5 flex-shrink text-red-300 absolute left-5">
            Binus40TahunBerkarya
        </a>
        <div class="flex flex-row justify-center text-lg font-semibold">
            <a href="#" class="mr-5">Beranda</a>
            <a href="#" class="mx-5">Lokasi Vaksinasi</a>
            <a href="#" class="mx-5">Berita</a>
            <a href="#" class="ml-5">Forum Diskusi</a>
        </div>
        <div class="mr-5 absolute right-5">
            <a href="#">Daftar Akun</a>
        </div>
    </nav> -->


    <div class="mt-14 mb-28">

        <section class="flex justify-center flex-row md:py-16 mb-5 md:mb-18 text-center flex-shrink">
            <div class="flex justify center flex-col mx-1 md:mx-10">
                <h2 class="font-bold text-sm md:text-3xl">Jumlah Kasus</h2>
                <h3 class="md:text-xl font-semibold">2.26 Juta</h3>
            </div>

            <div class="flex justify center flex-col mx-1 md:mx-10">
                <h2 class="font-bold text-sm md:text-3xl">Jumlah Kesembuhan</h2>
                <h3 class="md:text-xl font-semibold">1.9 Juta</h3>
            </div>

            <div class="flex justify center flex-col mx-1 md:mx-10">
                <h2 class="font-bold text-sm md:text-3xl">Jumlah Kematian</h2>
                <h3 class="md:text-xl font-semibold">60 Ribu</h3>
            </div>

        </section>


        <section class="flex flex-col-reverse justify-between px-8 md:px-28 bg-blue-200 py-16 mb-12 md:flex-row">
            <div class="md:w-3/6 flex flex-col justify-center text-right py-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Apa itu Covid-19?</h1>
                <p class="md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum cupiditate possimus reprehenderit hic corporis deleniti, nulla commodi ratione delectus nam reiciendis voluptate magni blanditiis. Reprehenderit itaque magnam nulla sapiente ducimus!</p>
            </div>
            <div class="md:w-2/5">
                <div class="">
                    <img src="https://png.pngtree.com/png-vector/20200317/ourlarge/pngtree-covid-19-coronavirus-wuhan-vector-illustration-png-image_2162376.jpg" alt="" class="">
                </div>
            </div>
        </section>

        <section class="flex justify-between flex-col md:flex-row px-8 md:px-28 bg-purple-200 py-16 mb-12">
            <div class="md:w-2/5">
                <img src="https://image.freepik.com/free-vector/cartoon-coronavirus-vaccine-illustration_23-2148849133.jpg" alt="">
            </div>
            <div class="md:w-3/6 flex flex-col justify-center text-left py-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Apa itu Vaksinasi?</h1>
                <p class="md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum cupiditate possimus reprehenderit hic corporis deleniti, nulla commodi ratione delectus nam reiciendis voluptate magni blanditiis. Reprehenderit itaque magnam nulla sapiente ducimus!</p>
            </div>
        </section>



        <section class="max-h-80 border-gray-200 flex overflow-x-auto overflow-y-hidden mx-auto w-5/6 no-scrollbar pb-1" id="section-news">
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://cdn1-production-images-kly.akamaized.net/4bvbAuZWibTVBWEqqdb8o3NLZX0=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3499878/original/044370100_1625281607-1280X720.jpg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://images.unsplash.com/photo-1481349518771-20055b2a7b24?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmFuZG9tfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://static1.srcdn.com/wordpress/wp-content/uploads/2021/03/Among-Us-Random-Name-Generator.jpg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://i.ytimg.com/vi/D0fq67Fyvls/maxresdefault.jpg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://images2.minutemediacdn.com/image/upload/c_fill,w_912,h_516,f_auto,q_auto,g_auto/shape/cover/sport/5c4b4fc02e4e3c90fa000001.jpeg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://images2.minutemediacdn.com/image/upload/c_fill,w_912,h_516,f_auto,q_auto,g_auto/shape/cover/sport/5c4b4f58545610dfc8000001.jpeg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota2_social.jpg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://cdns.klimg.com/merdeka.com/i/w/news/2021/06/24/1322429/540x270/lampu-merah-kematian-anak-indonesia-karena-covid-19-rev-1.jpg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/360x192/webp/photo/2021/02/09/2671496043.jpg?v=202107" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            <a href="#" class="news-card w-24 h-52 text-left bg-gray-100 mx-1 shadow-md flex flex-col">
                <div class="">
                    <img class="object-cover" src="https://cdn.antaranews.com/cache/800x533/2021/04/13/WhatsApp-Image-2021-04-13-at-04.02.21.jpeg" alt="">
                </div>
                <div class="p-1 text-sm overflow-hidden">
                    Berita Virus Corona COVID-19 Hari Ini - Kabar Terbaru Terkini | Liputan6.com
                </div>
            </a>
            
        </section>

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
</html>