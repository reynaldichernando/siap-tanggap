@extends('layouts.app')

@section('content')
<main class="flex flex-col items-center">
    <section class="flex justify-center bg-purple-100 w-full">
        <h1 class="text-4xl mt-16 mb-8">Lokasi Vaksinasi</h1>
    </section>
    <section class="flex flex-col items-center justify-center w-full pt-20 pb-40 px-10 bg-purple-100">
        <h3 class="text-xl mb-10 text-center">Cari Fasilitas Kesehatan Penyedia Vaksinasi Covid-19</h3>
        <form action="#" method="POST" class="flex flex-col items-center w-full mb-16">
            <div class="w-full md:w-4/5 lg:w-3/5 xl:w-2/5 flex items-center mb-4 relative">
                <input type="text" id="search" name="search" class="w-full focus:outline-none form-input p-4 pr-14"
                    placeholder="Klinik/Puskesmas/Kecamatan">
                <label class=" absolute right-4">
                    <input type="submit" class="hidden" />
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 mr-2 cursor-pointer text-gray-400 hover:text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </label>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center w-full md:w-4/5 lg:w-3/5 xl:w-2/5">
                <select name="provinceId" id="province"
                    class="w-full lg:w-1/3 form-select rounded focus:outline-none cursor-pointer">
                    <option value="" disabled selected>Provinsi</option>
                </select>

                <select name="cityId" id="city"
                    class="w-full lg:w-1/3 m-2 form-select rounded focus:outline-none cursor-pointer">
                    <option value="" disabled selected>Kota/Kabupaten</option>
                </select>

                <select name="districtId" id="district"
                    class="w-full lg:w-1/3 form-select rounded focus:outline-none cursor-pointer">
                    <option value="" disabled selected>Kecamatan</option>
                </select>
            </div>
        </form>

        <div id="hospital-container"
            class="hidden flex-col w-full md:w-4/5 lg:w-3/5 xl:w-2/5 p-4 bg-white rounded-lg h-96 overflow-y-auto">
            <h4 class="text-lg mb-5 text-center">List Fasilitas Kesehatan</h4>
            <div id="hospital-list" class="divide-y-2">

            </div>
        </div>


    </section>

    <section class="flex flex-col-reverse justify-around py-16 md:flex-row items-center">
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5 px-8">
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Apa itu Vaksin?</h1>
            <div class="leading-snug">
                <p>Dirangkum dari laman World Health Organization (WHO), vaksin mengandung antigen yang sama dengan
                    antigen
                    yang menyebabkan penyakit. </p>
                <br>
                <p>Namun antigen yang ada di dalam vaksin tersebut sudah dikendalikan (dilemahkan) sehingga pemberian
                    vaksin
                    tidak menyebabkan orang menderita penyakit seperti jika orang tersebut terpapar dengan antigen yang
                    sama
                    secara alamiah.</p>
                <br>
                <p>Vaksinasi adalah kegiatan pemberian vaksin kepada seseorang di mana vaksin tersebut berisi satu atau
                    lebih antigen. Saat vaksin dimasukkan ke dalam tubuh, sistem kekebalan tubuh akan melihatnya sebagai
                    antigen atau musuh.</p>
                <br>
                <p>Dengan begitu, sebagai respon adanya ancaman dari musuh maka tubuh akan memproduksi antibodi untuk
                    melawan antigen tersebut. Namun, kekebalan yang didapat melalui vaksinasi, tidaklah bertahan seumur
                    hidup terhadap infeksi penyakit berbahaya. </p>
            </div>
        </div>
        <div class="md:w-1/3 w-3/5">
            <div class="">
                <img src="{{URL::asset('/images/Drawkit-Vector-Illustration-Medical-05.svg')}}" alt=""
                    class="w-full h-full">
            </div>
        </div>
    </section>

    <section class="flex justify-around items-center flex-col md:flex-row px-8 md:px-28 bg-purple-100 py-16">
        <div class="md:w-2/5 w-3/5">
            <img src="{{URL::asset('/images/doctor-colour.svg')}}" alt="" class="w-full h-full">
        </div>
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5">
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Mengapa Harus Vaksin?</h1>
            <div class="leading-snug">
                <p>
                    Melalui vaksin, tubuh akan terlindungi dengan cara membentuk respons antibodi
                    tanpa
                    harus
                    sakit terlebih dahulu. Artinya, vaksin COVID-19 mampu melindungi tubuh seseorang dari infeksi virus
                    corona.
                    Tidak hanya itu, jika kamu terinfeksi virus penyebab COVID-19, vaksin bisa membantu mencegah tubuhmu
                    dari
                    sakit parah atau potensi munculnya komplikasi serius.
                </p>
                <br>
                <p>
                    Selain itu, dengan mengikuti vaksinasi kamu juga telah membantu mempercepat penanganan Covid-19 di
                    masyarakat dengan pembentukan herd immunity.
                </p>
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center mb-8">
        <h3 class="text-3xl m-8 text-center">Jenis Vaksin</h3>

        <div class="flex flex-row flex-wrap justify-center my-4">
            <div
                class="bg-white flex flex-col items-center rounded-md border-green-300 border-2 mx-4 mb-4 w-72 md:w-96">
                <div class="">
                    <img src="{{URL::asset('/images/astrazeneca.jpg')}}" alt="">
                </div>
                <div class="p-8">
                    <h5 class="text-green-600 text-lg mb-8">AstraZeneca</h5>
                    <p class="leading-tight text-md">
                        AstraZeneca menggunakan virus adeno hidup (adenovirus) yang telah dimodifikasi sebagai
                        'pengirim'
                        protein khusus. Protein tersebut akan menginstruksikan sel tubuh untuk memproduksi sebagian
                        kecil
                        dari virus Corona yang kemudian memicu respons imun.
                    </p>
                </div>
            </div>

            <div class="bg-white flex flex-col items-center rounded-md border-red-300 border-2 mx-4 mb-4 w-72 md:w-96">
                <div class="">
                    <img src="{{URL::asset('/images/sinovac.jpg')}}" alt="">
                </div>
                <div class="p-8">
                    <h5 class="text-red-600 text-lg mb-8">Sinovac</h5>
                    <p class="leading-tight text-md">
                        Sinovac memanfaatkan virus SARS-COV-2 yang telah dimatikan (inactivated) untuk memicu respons
                        imun.
                        Metode ini sudah terbukti manjur dan telah digunakan dalam pengembangan vaksin lain, seperti
                        vaksin
                        flu dan vaksin polio.
                    </p>
                </div>
            </div>

            <div
                class="bg-white flex flex-col items-center rounded-md border-purple-300 border-2 mx-4 mb-4 w-72 md:w-96">
                <div class="">
                    <img src="{{URL::asset('/images/sinopharm.jpg')}}" alt="">
                </div>
                <div class="p-8">
                    <h5 class="text-purple-600 text-lg mb-8">Sinopharm</h5>
                    <p class="leading-tight text-md">
                        Sinopharm merupakan vaksin buatan China dan telah diujikan di beberapa negara. Vaksin Sinopharm
                        telah masuk dalam list WHO dan mendapatkan EUA di China, Uni Emirat Arab, Bahrain, Mesir, dan
                        Yordania, dan kini juga di Indonesia. Vaksin ini menggunakan platform yang sama dengan vaksin
                        Sinovac, yaitu virus yang diinaktivasi.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    let provinceSelectElement = document.querySelector('#province');
    let citySelectElement = document.querySelector('#city');
    let districtSelectElement = document.querySelector('#district');
    let searchForm = document.querySelector('form');
    let hospitalContainerElement = document.querySelector('#hospital-container');
    let hospitalListElement = document.querySelector('#hospital-list');
    let submitButton = document.querySelector('input[type="submit"]');

    const submitForm = () => {
        submitButton.click();
    }
    
    const loadProvinces = () => {
        return fetch("https://api.pedulilindungi.id/users/v3/provinces", {
            "headers": {
                "authorization": "Basic dGVsa29tOmRhMWMyNWQ4LTM3YzgtNDFiMS1hZmUyLTQyZGQ0ODI1YmZlYQ==",
            }
        })
        .then(response => response.json())
        .then(res => {
            res.data.forEach(province => {
                provinceSelectElement.innerHTML += `<option value="${province.provinceId}">${province.provinceName}</option>`;
            });
        })
    }

    const loadCities = () => {
        return fetch(`https://api.pedulilindungi.id/users/v3/cities?provinceId=${provinceSelectElement.value}`, {
            "headers": {
                "authorization": "Basic dGVsa29tOmRhMWMyNWQ4LTM3YzgtNDFiMS1hZmUyLTQyZGQ0ODI1YmZlYQ==",
            }
        })
        .then(response => response.json())
        .then(res => {
            citySelectElement.innerHTML = `<option value="" disabled selected>Kota/Kabupaten</option>`;
            res.data.forEach(city => {
                citySelectElement.innerHTML += `<option value="${city.cityId}">${city.cityName}</option>`
            })
        })
    }

    const loadDistricts = () => {
        return fetch(`https://api.pedulilindungi.id/users/v3/districts?cityId=${citySelectElement.value}`, {
            "headers": {
                "authorization": "Basic dGVsa29tOmRhMWMyNWQ4LTM3YzgtNDFiMS1hZmUyLTQyZGQ0ODI1YmZlYQ==",
            }
        })
        .then(response => response.json())
        .then(res => {
            districtSelectElement.innerHTML = `<option value="" disabled selected>Kecamatan</option>`;
            res.data.forEach(district => {
                districtSelectElement.innerHTML += `<option value="${district.districtId}">${district.districtName}</option>`
            })
        })
    }

    provinceSelectElement.addEventListener('change', (event) => {
        loadCities()
        .then(loadDistricts)
        .then(submitForm);
    })

    citySelectElement.addEventListener('change', (event) => {
        loadDistricts()
        .then(submitForm);
    })

    districtSelectElement.addEventListener('change', (event) => {
        submitForm();
    })

    searchForm.addEventListener('submit', (event) => {
        event.preventDefault();
        let {search, provinceId, cityId, districtId} = event.target;

        fetch(`https://api.pedulilindungi.id/vaccine/v1/landingpage/hospital?provinceId=${provinceId.value}&cityId=${cityId.value}&search=${search.value}&districtId=${districtId.value}&size=99&page=1`, {
            "headers": {
                "authorization": "Basic VkFLU0lOOjVmYmNkNjc4NDE2ZjVkOTUzMzFlODJhNA==",
            }
        })
        .then(response => response.json())
        .then(res => {
            hospitalListElement.innerHTML = '';

            res.data.forEach(hospital => {
                hospitalListElement.innerHTML += 
                `<div class="py-6">
                    <h5 class="font-semibold mb-2">${hospital.name}</h5>
                    <p>${hospital.address}</p>
                </div>`;
            })

            hospitalContainerElement.classList.remove('hidden');
            hospitalContainerElement.classList.add('flex');
        })
    })

    loadProvinces();
    
</script>
@endpush