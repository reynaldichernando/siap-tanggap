@extends('layout')

@section('main-content')
    
    <section class="flex flex-col items-center mb-12">
        <h1 class="text-2xl md:text-8xl font-semibold mb-8">Lokasi Vaksinasi</h1>
        <div class="w-full md:w-5/6 h-12 flex items-center mb-5 rounded border-2 border-purple-300 justify-between">
            <input type="text" id="search-vaccination"
            class="w-full focus:outline-none ml-2"
            placeholder="Cari Lokasi Vaksinasi...">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-center w-5/6">
            <select name="vacc-province" id="vacc-province" class="flex-1 mx-2 border-2 border-purple-300 rounded focus:outline-none text-lg p-2">
                <option value="">Pilih Provinsi</option>
                <option value="1">DKI Jakarta</option>
                <option value="2">Kepulauan Riau</option>
            </select>

            <select name="vacc-city" id="vacc-city" class="flex-1 mx-2 border-2 border-purple-300 rounded focus:outline-none text-lg p-2">
                <option value="">Pilih Kota</option>
                <option value="1">Jakarta Barat</option>
                <option value="2">Batam</option>
            </select>

            <select name="vacc-hospital" id="vacc-hospital" class="flex-1 mx-2 border-2 border-purple-300 rounded focus:outline-none text-lg p-2">
                <option value="">Pilih Rumah Sakit</option>
                <option value="1">Awal Bros</option>
                <option value="2">Klinik Tong Fang</option>
            </select>

        </div>
    </section>


    <section class="flex flex-col-reverse justify-around bg-purple-50 py-16 mb-12 md:flex-row items-center">
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5 px-8">
            <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Apa itu Vaksin?</h1>
            <div class="">
                <p>Dirangkum dari laman World Health Organization (WHO), vaksin mengandung antigen yang sama dengan antigen yang menyebabkan penyakit. </p>
                <br>
                <p>Namun antigen yang ada di dalam vaksin tersebut sudah dikendalikan (dilemahkan) sehingga pemberian vaksin tidak menyebabkan orang menderita penyakit seperti jika orang tersebut terpapar dengan antigen yang sama secara alamiah.</p>
                <br>
                <p>Vaksinasi adalah kegiatan pemberian vaksin kepada seseorang di mana vaksin tersebut berisi satu atau lebih antigen.  Saat vaksin dimasukkan ke dalam tubuh, sistem kekebalan tubuh akan melihatnya sebagai antigen atau musuh.</p>
                <br>
                <p>Dengan begitu, sebagai respon adanya ancaman dari musuh maka tubuh akan memproduksi antibodi untuk melawan antigen tersebut. Namun, kekebalan yang didapat melalui vaksinasi, tidaklah bertahan seumur hidup terhadap infeksi penyakit berbahaya. </p>
            </div>
        </div>
        <div class="md:w-2/5">
            <div class="">
                <img src="http://mnctrijaya.com/uploads/news/vak(1).jpeg" alt="" class="">
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center mx-2 content-between">
        <div class="text-2xl md:text-6xl font-semibold text-purple-300 mb-12">
            Jenis-jenis Vaksin
        </div>

        <div class="flex flex-col md:flex-row  justify-between">

            <div class="bg-white my-1 flex-1 flex flex-col items-center hover:bg-green-300 rounded-md border-green-300 border-2 cursor-pointer mx-5">
                <div class="">
                    <img src="https://asset.kompas.com/crops/TuY9x76vXHPmw-KGVFzoohSvhxM=/8x65:1000x727/750x500/data/photo/2021/03/20/6055b465e9435.jpg" alt="" >
                </div>
                <div class="p-8">
                    <div class="text-green-600 text-2xl md: text-4xl mb-8">
                        Astrazeneca
                    </div>
                    <div>
                    AstraZeneca menggunakan virus adeno hidup (adenovirus) yang telah dimodifikasi sebagai 'pengirim' protein khusus. Protein tersebut akan menginstruksikan sel tubuh untuk memproduksi sebagian kecil dari virus Corona yang kemudian memicu respons imun.
                    </div>
                </div>
            </div>

            <div class="bg-white my-1 flex-1 flex flex-col items-center hover:bg-red-300 rounded-md border-red-300 border-2 cursor-pointer mx-5">
                <div class="">
                    <img src="https://static.straitstimes.com.sg/s3fs-public/styles/article_pictrure_780x520_/public/articles/2021/07/07/nz_sinovac_070721.jpg?itok=BY70dHOy&timestamp=1625628112" alt="">
                </div>
                <div class=" p-8">
                    <div class="text-red-600 text-2xl md: text-4xl mb-8">
                        Sinovac
                    </div>
                    <div>
                        Sinovac memanfaatkan virus SARS-COV-2 yang telah dimatikan (inactivated) untuk memicu respons imun. Metode ini sudah terbukti manjur dan telah digunakan dalam pengembangan vaksin lain, seperti vaksin flu dan vaksin polio.
                    </div>
                </div>
            </div>

            <div class="bg-white my-1 flex-1 flex flex-col items-center hover:bg-purple-300 rounded-md border-purple-300 border-2 cursor-pointer mx-5">
                <div class="">
                    <img src="https://asset.kompas.com/crops/rRp1NG4m7nR1Ta7ofeNoCn-dJYU=/0x0:1000x667/750x500/data/photo/2021/05/06/6093619da1817.jpg" alt="">
                </div>
                <div class=" p-8">
                    <div class="text-purple-600 text-2xl md: text-4xl mb-8">
                        Sinopharm
                    </div>
                    <div>
                        Sinopharm merupakan vaksin buatan China dan telah diujikan di beberapa negara. Vaksin Sinopharm telah masuk dalam list WHO dan mendapatkan EUA di China, Uni Emirat Arab, Bahrain, Mesir, dan Yordania, dan kini juga di Indonesia. Vaksin ini menggunakan platform yang sama dengan vaksin Sinovac, yaitu virus yang diinaktivasi.
                    </div>
                </div>
            </div>

        </div>

    </section>

    


@endsection