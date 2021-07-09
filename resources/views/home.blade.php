
@extends('layout')

@section('main-content')
    

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


    <section class="flex flex-col-reverse justify-around bg-blue-50 py-16 mb-12 md:flex-row">
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5 px-8">
            <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Apa itu Covid-19?</h1>
            <p class="md:text-lg">COVID-19 adalah penyakit yang disebabkan oleh virus severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan gangguan sistem pernapasan, mulai dari gejala yang ringan seperti flu, hingga infeksi paru-paru, seperti pneumonia.</p>
        </div>
        <div class="md:w-2/5">
            <div class="">
                <img src="https://png.pngtree.com/png-vector/20200317/ourlarge/pngtree-covid-19-coronavirus-wuhan-vector-illustration-png-image_2162376.jpg" alt="" class="">
            </div>
        </div>
    </section>

    <section class="flex justify-around flex-col md:flex-row px-8 md:px-28 bg-blue-50 py-16 mb-12">
        <div class="md:w-2/5">
            <img src="https://image.freepik.com/free-vector/portrait-woman-get-sick-she-is-coughing-suffering-from-chest-pain-coronavirus-2019-ncov-flu-health-medical-illustration_253263-32.jpg   " alt="">
        </div>
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5">
            <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Gejala Covid-19</h1>
            <p class="md:text-lg">Gejala awal infeksi COVID-19 bisa menyerupai gejala flu, yaitu <span class="font-semibold">demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala</span>. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak atau berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut di atas muncul ketika tubuh bereaksi melawan virus COVID-19.</p>
        </div>
    </section>

    <section class="flex flex-col-reverse justify-around bg-blue-50 py-16 mb-12 md:flex-row">
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5 px-8">
            <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Varian Alfa</h1>
            <p class="md:text-lg">COVID-19 varian Alfa diketahui lebih cepat menular dan menyebar karena lebih mampu menembus sistem kekebalan tubuh manusia. Bahkan, sejak April 2021 varian ini sudah menjadi salah satu varian virus Corona yang dominan di Amerika Serikat dan Inggris.</p>
            <br>
            <p class="md:text-lg">Laporan kasus sejauh ini menunjukkan bahwa pasien COVID-19 yang terinfeksi virus Corona varian Alfa bisa mengalami gejala yang lebih parah. Namun, pada orang yang telah menerima vaksin COVID-19, gejala infeksi virus Corona varian ini umumnya lebih ringan.</p>
        </div>
        <div class="md:w-2/5">
            <div class="">
                <img src="https://png.pngtree.com/png-vector/20200317/ourlarge/pngtree-covid-19-coronavirus-wuhan-vector-illustration-png-image_2162376.jpg" alt="" class="">
            </div>
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

@endsection