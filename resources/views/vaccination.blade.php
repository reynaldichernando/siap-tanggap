@extends('layouts.app')

@section('content')
<main class="flex flex-col items-center">
    <section class="flex justify-center bg-purple-100 w-full">
        <h1 class="text-4xl mt-16 mb-8">Vaccination Location</h1>
    </section>
    <section class="flex flex-col items-center justify-center w-full pt-20 pb-40 px-10 bg-purple-100">
        <h3 class="text-xl mb-10 text-center">Find Health Facilities Providing Covid-19 Vaccinations</h3>
        <form id="hospital-search" action="#" method="POST" class="flex flex-col items-center w-full mb-16">
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
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">What is Vaccine?</h1>
            <div class="leading-snug">
                <p>
                    Summarized from the World Health Organization (WHO) page, vaccine contains antigen with the same
                    antigen that causes disease.
                </p>
                <br>
                <p>
                    However, the antigen in the vaccine is already weakened so that vaccination does not cause people to
                    suffer the same disease as if that person is exposed to the same antigen naturally.
                </p>
                <br>
                <p>
                    Vaccination is a process of giving vaccine to somebody where the vaccine contains one or more
                    antigen.
                    When the vaccine enters the body, the imune system will see it as antigen or enemy.
                </p>
                <br>
                <p>
                    Therefore, as a response from threat, the body will then produce antibodies to fight the antigen.
                    However, the immunity received by vaccinations, does not last a lifetime against dangerous
                    infectious disease.
                </p>
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
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Why Vaccinate?
            </h1>
            <div class="leading-snug">
                <p>
                    Through vaccination, the body will be protected by creating antibodies response without having to
                    get sick first.
                    It means that the COVID-19 case can protect someone's body from the Coronavirus infection.
                    Not only that, if you are infected by the COVID-19, the vaccine can help prevent your body from
                    severe symptoms or the potential of serious complications.
                </p>
                <br>
                <p>
                    Besides that, by getting vaccinated, you also participate in helping speed up Covid-19 handling in
                    public by creating herd immunity.
                </p>
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center mb-8">
        <h3 class="text-3xl m-8 text-center">Vaccine Types</h3>

        <div class="flex flex-row flex-wrap justify-center my-4">
            <div
                class="bg-white flex flex-col items-center rounded-md border-green-300 border-2 mx-4 mb-4 w-72 md:w-96">
                <div class="">
                    <img src="{{URL::asset('/images/astrazeneca.jpg')}}" alt="">
                </div>
                <div class="p-8">
                    <h5 class="text-green-600 text-lg mb-8">AstraZeneca</h5>
                    <p class="leading-tight text-md">
                        AstreZeneca uses live adeno virus (adenovirus) that have been modified as 'sender' of certain
                        protein.
                        That protein will instruct the body cells to produce small portion of the Coronavirus which then
                        will trigger the immune response.
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
                        Sinovac utilizes SARS-COV-2 virus that has been inactivated to trigger the immune response.
                        This method is proven to be effective and has been used for other vaccine development, such as
                        flu vaccine and polio vaccine.
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
                        Sinopharm is a China made vaccine and has been tested in several countries. The Sinopharm
                        vaccine has been added to the WHO list and has received EUA in China, United Arab Emirates,
                        Bahrain, Egypt, Jordan, and now in Indoesia. This vaccine uses the same platform as Sinovac,
                        which is inactivated virus.
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
    let searchForm = document.querySelector('#hospital-search');
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