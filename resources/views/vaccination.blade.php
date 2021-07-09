@extends('layout')

@section('main-content')
    
    <section class="flex flex-col items-center mx-2">
        <h1 class="text-2xl md:text-8xl font-semibold mb-8">Lokasi Vaksinasi</h1>
        <div class="w-full md:w-5/6 h-12 flex items-center mb-5 rounded border-2 border-blue-300 justify-between">
            <input type="text" id="search-vaccination"
            class="w-full focus:outline-none ml-2"
            placeholder="Cari Lokasi Vaksinasi...">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-center w-5/6">
            <select name="vacc-province" id="vacc-province" class="flex-1 mx-2 border-2 border-blue-300 rounded focus:outline-none text-lg p-2">
                <option value="">Pilih Provinsi</option>
                <option value="1">DKI Jakarta</option>
                <option value="2">Kepulauan Riau</option>
            </select>

            <select name="vacc-city" id="vacc-city" class="flex-1 mx-2 border-2 border-blue-300 rounded focus:outline-none text-lg p-2">
                <option value="">Pilih Kota</option>
                <option value="1">Jakarta Barat</option>
                <option value="2">Batam</option>
            </select>

            <select name="vacc-hospital" id="vacc-hospital" class="flex-1 mx-2 border-2 border-blue-300 rounded focus:outline-none text-lg p-2">
                <option value="">Pilih Rumah Sakit</option>
                <option value="1">Awal Bros</option>
                <option value="2">Klinik Tong Fang</option>
            </select>

        </div>
    </section>


    


@endsection