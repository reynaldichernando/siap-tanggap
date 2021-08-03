@extends('layouts.app')
@section('content')
    <section class="flex flex-col space-y-4 items-center justify-center py-48 text-white text-center" style="background-image: url('{{URL::asset('/images/landing-bg.jpg')}}')">
        <div class="text-6xl font-bold">
            SIAP TANGGAP
        </div>
        <p class="w-1/3 text-lg leading-6">
            Selamat datang di website kami! Anda dapat mendapatkan informasi terbaru seputar Covid-19, lokasi vaksinasi terdekat,
            serta berdiskusi dengan pengguna lainnya di forum kami.
        </p>
        <a href="{{ route('home') }}" class="border-blue-200 border-2 bg-transparent py-2 px-4 rounded-lg hover:bg-blue-200 hover:text-gray-500">Lanjut</a>
    </section>



    <div id='features' class='text-center w-full bg-orange-500 flex flex-col space-y-4 py-24 text-white'>
        <div class='text-4xl font-semibold'>
          <h2>Features</h2>
          <hr class="border-t-2 border-blue-400 w-1/6 mt-6 mb-12 mx-auto" />
        </div>
        <div class='flex flex-col md:flex-row md:space-x-4 justify-center px-52 font-semibold text-center'>
            <div class='flex-1 border-2 border-dashed border-transparent hover:border-gray-400 cursor-pointer py-2 rounded-xl hover:text-blue-200'>
                <p class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </p>
                <h3 class="text-lg p-4">Beranda</h3>
                <p class="text-xs">Cari tahu kasus Covid-19 di Indonesia saat ini dan info seputar Covid-19</p>
            </div>
            <div class='flex-1 border-2 border-dashed border-transparent hover:border-gray-400 cursor-pointer py-2 rounded-xl hover:text-blue-200'>
                <p class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </p>
                <h3 class="text-lg p-4">Lokasi Vaksinasi</h3>
                <p class="text-xs">Cari tahu lokasi vaksinasi terdekat di daerah anda</p>
            </div>
            <div class='flex-1 border-2 border-dashed border-transparent hover:border-gray-400 cursor-pointer py-2 rounded-xl hover:text-blue-200'>
                <p class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                </svg>
                </p>
                <h3 class="text-lg p-4">Forum Diskusi</h3>
                <p class="text-xs">Ajukan pertanyaan dan diskusikan bersama para pengguna yang lain</p>
            </div>
        </div>
    </div>





@endsection