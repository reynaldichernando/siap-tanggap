@extends('layouts.app')

@push('custom-style')
<style>
    html {
        scroll-behavior: smooth
    }

    #jumbotron {
        height: calc(100vh - 96px);
    }

    @media only screen and (max-width: 768px) {
        #jumbotron {
            height: calc(100vh - 64px);
        }
    }
</style>
@endpush

@section('content')
<main class="flex flex-col items-center">
    <section id="jumbotron"
        class="flex flex-col relative space-y-6 items-center justify-center w-full text-white text-center bg-cover bg-center"
        style="background-image: url('{{URL::asset('/images/landing-bg.jpg')}}')">
        <div class="text-5xl md:text-6xl font-bold" style="filter: drop-shadow(0 0 2px rgba(0, 0, 0, 0.30));">
            {{ config('app.name', 'siaptanggap') }}
        </div>
        <p class="w-4/5 md:w-2/5 text-lg leading-6" style="filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.50));">
            Pusat informasi Covid-19 di Indonesia. Dapatkan informasi terbaru terkait Covid-19 serta pelaksanaan vaksinasi
            di Indonesia.
        </p>
        <a href="{{ route('home') }}"
            class="border-blue-200 border-2 bg-transparent py-2 px-4 rounded-full hover:bg-blue-200 hover:text-gray-500">Mulai</a>
        <a class=" absolute bottom-12" href="#first-content"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg></a>
    </section>
    
    <div id="first-content"
        class='w-full bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 flex flex-col py-24 text-white'>
        <div
            class='flex flex-col md:flex-row md:space-x-4 justify-center items-center space-y-4 md:space-y-0 lg:px-52 font-semibold text-center'>
            <img src="{{ URL::asset('/images/taxi-satch-virus-molecules-1.png') }}" class="md:w-1/2" alt="">
            <div class="w-4/5 md:w-2/5">
                <h2 class="text-3xl text-left mb-6">Pantau Kasus dan Berita Covid-19 Terbaru</h2>
                <p class="text-left text-lg leading-relaxed">
                    Pahami virusnya dan cara menghadapinya dan Baca berita terbaru dan terpercaya di website kami. Pelajari
                    jenis varian Covid-19 serta diagnosis dan gejalanya.
                </p>
            </div>
        </div>
    </div>
    
    <div class='w-full bg-gradient-to-b from-pink-500 to-purple-500 flex flex-co py-24 text-white'>
        <div
            class='flex flex-col-reverse md:flex-row md:space-x-4 justify-center items-center space-y-4 md:space-y-0 lg:px-52 font-semibold text-center'>
            <div class="w-4/5 md:w-2/5">
                <h2 class="text-3xl text-left mb-6">Cari Lokasi Vaksinasi Terdekat</h2>
                <p class="text-left text-lg leading-relaxed">
                    Ketik nama daerah dan cari lokasi vaksinasi di daerah anda. Anda juga dapat mencari tahu tujuan vaksin
                    dan jenis-jenis vaksin yang tersedia.
                </p>
            </div>
            <img src="{{ URL::asset('/images/corona virus covid 19 vaccine_5878465.png') }}" class="md:w-1/2" alt="">
        </div>
    </div>
    
    <div class='w-full bg-gradient-to-b from-purple-500 to-orange-500 flex flex-col py-24 text-white'>
        <div
            class='flex flex-col md:flex-row md:space-x-4 justify-center items-center space-y-4 md:space-y-0 lg:px-52 font-semibold text-center'>
            <img src="{{ URL::asset('/images/undraw_Public_discussion_re_w9up.svg') }}" class="md:w-1/2" alt="">
            <div class="w-4/5 md:w-2/5">
                <h2 class="text-3xl text-left mb-6">Gabung Dalam Komunitas</h2>
                <p class="text-left text-lg leading-relaxed">
                    Adakan diskusi dengan sesama pengguna di forum. Dapatkan jawaban-jawaban yang anda cari.
                </p>
            </div>
        </div>
    </div>
    
    <div id='features' class='text-center w-full bg-orange-500 flex flex-col space-y-4 py-12 md:py-24 text-white'>
        <div class='text-4xl font-semibold'>
            <h2>Fitur</h2>
            <hr class="border-t-2 border-orange-400 w-1/6 mt-6 mb-12 mx-auto" />
        </div>
        <div
            class='flex flex-col md:flex-row md:space-x-4 justify-center md:px-52 space-y-4 md:space-y-0 font-semibold text-center'>
            <div class='flex-1 py-2 rounded-xl'>
                <p class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </p>
                <h3 class="text-lg p-4">Beranda</h3>
                <p class="text-xs">Cari tahu kasus Covid-19 di Indonesia saat ini dan info seputar Covid-19</p>
            </div>
            <div class='flex-1 py-2 rounded-xl'>
                <p class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </p>
                <h3 class="text-lg p-4">Lokasi Vaksinasi</h3>
                <p class="text-xs">Cari tahu lokasi vaksinasi terdekat di daerah kamu</p>
            </div>
            <div class='flex-1 py-2 rounded-xl'>
                <p class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                </p>
                <h3 class="text-lg p-4">Forum Diskusi</h3>
                <p class="text-xs">Ajukan pertanyaan dan diskusikan bersama para pengguna lainnya</p>
            </div>
        </div>
    </div>
</main>
@endsection