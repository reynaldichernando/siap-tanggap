@extends('layouts.app')

@push('custom-style')
<style>
    /* Tab content - closed */
    .tab-content {
        max-height: 0;
        -webkit-transition: max-height .35s;
        -o-transition: max-height .35s;
        transition: max-height .35s;
    }

    /* :checked - resize to full height */
    .tab input:checked~.tab-content {
        max-height: 100vh;
    }

    /* Label formatting when open */
    .tab input:checked+label {
        /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
        font-size: 1.25rem;
        /*.text-xl*/
        padding: 1.25rem;
        /*.p-5*/
        border-left-width: 2px;
        /*.border-l-2*/
        border-color: #6574cd;
        /*.border-indigo*/
        background-color: #f8fafc;
        /*.bg-gray-100 */
        color: #6574cd;
        /*.text-indigo*/
        transition-duration: 100ms;
    }

    .tab input[type=checkbox]+label {
        transition-duration: 50ms;
    }

    /* Icon */
    .tab label::after {
        float: right;
        right: 0;
        top: 0;
        display: block;
        width: 1.5em;
        height: 1.5em;
        line-height: 1.5;
        font-size: 1.25rem;
        text-align: center;
        -webkit-transition: all .35s;
        -o-transition: all .35s;
        transition: all .35s;
    }

    /* Icon formatting - closed */
    .tab input[type=checkbox]+label::after {
        content: "+";
        padding-bottom: 4px;
        font-weight: bold;
        /*.font-bold*/
        border-width: 1px;
        /*.border*/
        border-radius: 9999px;
        /*.rounded-full */
        border-color: #b8c2cc;
        /*.border-grey*/
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    /* Icon formatting - open */
    .tab input[type=checkbox]:checked+label::after {
        transform: rotate(315deg);
        background-color: #6574cd;
        /*.bg-indigo*/
        color: #f8fafc;
        /*.text-grey-lightest*/
    }
</style>
@endpush

@section('content')
<main class="flex flex-col items-center">
    <section class="flex flex-col justify-center w-11/12 md:w-3/5 lg:w-1/2 items-center my-5 md:my-18 text-center">
        <h1 class="text-4xl m-4 font-semibold">Kasus COVID-19 Indonesia</h1>
        <div
            class="rounded-xl shadow-lg bg-white w-4/5 p-4 m-16">
            <div class="flex flex-wrap justify-center">
                <div class="flex justify center flex-col p-5">
                    <h2 class="text-sm md:text-xl">Terkonfirmasi</h2>
                    <h3 id="confirmed" class="m-2 text-4xl font-semibold">
                        <div class="h-9 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
                    </h3>
                </div>
    
                <div class="flex justify center flex-col p-5">
                    <h2 class="text-sm md:text-xl">Sembuh</h2>
                    <h3 id="recovered" class="m-2 text-4xl font-semibold">
                        <div class="h-9 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
                    </h3>
                </div>
    
                <div class="flex justify center flex-col p-5">
                    <h2 class="text-sm md:text-xl">Meninggal</h2>
                    <h3 id="death" class="m-2 text-4xl font-semibold">
                        <div class="h-9 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
                    </h3>
                </div>
            </div>
            <div class="w-full text-right">
                <small id="date" class="text-xs text-gray-600"></small>
            </div>
        </div>
    </section>

    <section class="flex flex-col-reverse justify-around py-16 md:flex-row items-center bg-blue-100">
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5 px-8">
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Apa itu Covid-19?</h1>
            <div class="leading-snug">
                <p>COVID-19 adalah penyakit yang disebabkan oleh virus severe acute respiratory syndrome
                    coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan gangguan sistem pernapasan, mulai dari gejala
                    yang
                    ringan seperti flu, hingga infeksi paru-paru, seperti pneumonia.</p>
            </div>
        </div>
        <div class="md:w-1/3 w-3/5">
            <div class="">
                <img src="{{URL::asset('/images/undraw_social_distancing_2g0u.svg')}}" alt=""
                    class="w-full h-full">
            </div>
        </div>
    </section>

    <section class="flex justify-around items-center flex-col md:flex-row px-8 md:px-28 py-16">
        <div class="md:w-2/5 w-3/5">
            <img src="{{URL::asset('/images/undraw_sleep_analysis_o5f9.svg')}}" alt="" class="w-full h-full">
        </div>
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5">
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Gejala Covid-19</h1>
            <div class="leading-snug">
                Gejala awal infeksi COVID-19 bisa menyerupai gejala flu, yaitu <span
                    class="font-semibold">demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala</span>.
                Setelah
                itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa
                mengalami
                demam tinggi, batuk berdahak atau berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut di atas
                muncul ketika tubuh bereaksi melawan virus COVID-19.
            </div>
        </div>
    </section>

    <section class="flex flex-col bg-blue-100 py-16 w-full">
        <div class="w-full mx-auto p-8">
            <h3 class="text-center text-xl md:text-4xl mb-8 font-semibold">Varian Covid-19</h3>
            <div class="shadow-md bg-white lg:w-1/2 mx-auto">
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-one">Varian Alfa</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Kode varian:</strong> B. 1.1.7</li>
                            <li><strong>Kasus pertama kali ditemukan:</strong> Inggris, September 2020</li>
                            <li><strong>Tingkat penularan virus:</strong> 43–90% lebih mudah menular dari virus Corona
                                sebelumnya</li>
                            <li><strong>Tingkat keparahan infeksi:</strong> lebih berpotensi menimbulkan gejala berat
                                dan
                                peningkatan risiko rawat inap dari virus Corona jenis awal</li>
                        </ul>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-two" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-two">Varian Beta</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Kode varian:</strong> B. 1.351</li>
                            <li><strong>Kasus pertama kali ditemukan:</strong> Afrika Selatan, Mei 2020</li>
                            <li><strong>Tingkat penularan virus:</strong> belum diketahui</li>
                            <li><strong>Tingkat keparahan infeksi:</strong> lebih berisiko menyebabkan gejala berat</li>
                        </ul>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-three" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-three">Varian Gamma</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Kode varian:</strong> P. 1</li>
                            <li><strong>Kasus pertama kali ditemukan:</strong> Brazil, November 2020</li>
                            <li><strong>Tingkat penularan virus:</strong> belum diketahui</li>
                            <li><strong>Tingkat keparahan infeksi:</strong> cenderung kebal terhadap pengobatan COVID-19
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-four" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-four">Varian Delta</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Kode varian:</strong> B.1.617.2</li>
                            <li><strong>Kasus pertama kali ditemukan:</strong> India, Oktober 2020</li>
                            <li><strong>Tingkat penularan virus:</strong> 30–100% lebih mudah menular dari varian Alfa
                            </li>
                            <li><strong>Tingkat keparahan infeksi:</strong> potensi peningkatan risiko dibutuhkannya
                                rawat
                                inap hampir dua kali lipat dari varian Alfa</li>
                        </ul>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-five" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-five">Varian Lambda</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Kode varian:</strong> C. 37</li>
                            <li><strong>Kasus pertama kali ditemukan:</strong> Peru, Desember 2020</li>
                            <li><strong>Tingkat penularan virus:</strong> belum diketahui</li>
                            <li><strong>Tingkat keparahan infeksi:</strong> belum diketahui</li>
                        </ul>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-six" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-six">Varian Kappa</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Kode varian:</strong> 1.617.2</li>
                            <li><strong>Kasus pertama kali ditemukan:</strong> India, Oktober 2020</li>
                            <li><strong>Tingkat penularan virus:</strong> belum diketahui</li>
                            <li><strong>Tingkat keparahan infeksi:</strong> belum diketahui</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center flex-col md:flex-row px-8 md:px-28 py-16">
        <div class="md:w-4/6 flex flex-col justify-center text-justify py-5">
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Diagnosis Covid-19</h1>
            <div class="leading-snug">
                <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami
                    pasien
                    dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus
                    Corona
                    sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang
                    menderita
                    atau diduga menderita COVID-19.</p>
                <br>
                <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:</p>
                <br>
                <ul class="list-disc pl-5">
                    <li class="p-2">Rapid test untuk mendeteksi antibodi (IgM dan IgG) yang
                        diproduksi
                        oleh tubuh untuk melawan virus Corona. Namun, rapid test antigen sekarang dianggap lebih akurat
                        dibandingkan rapid antibodi. Meski demikian, pemeriksaan rapid test atau swab antigen tidak
                        dianjurkan untuk dilakukan mandiri di rumah dan harus oleh petugas medis</li>
                    <li class="p-2">Swab test atau tes PCR (polymerase chain reaction) untuk
                        mendeteksi
                        virus Corona di dalam dahak.</li>
                    <li class="p-2">CT scan atau Rontgen dada untuk mendeteksi infiltrat atau cairan
                        di
                        paru-paru.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="w-full bg-blue-100 py-16">
        <h1 class="text-center text-2xl md:text-4xl mb-4 font-semibold">
            Berita Terkini
        </h1>
        <div class="flex mx-auto w-5/6 flex-wrap items-center justify-center"
            id="section-news">

        </div>
    </section>
</main>
@endsection

@push('scripts')
<script>
    const numberWithCommas = (x) => {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    let statisticURL = '{{ route('api.statistics') }}';
    let confirmedElement = document.querySelector('#confirmed'); 
    let recoveredElement = document.querySelector('#recovered'); 
    let deathElement = document.querySelector('#death'); 

    fetch(statisticURL)
    .then(response => response.json())
    .then(data => {
        confirmedElement.innerHTML = numberWithCommas(data.numbers.infected);
        recoveredElement.innerHTML = numberWithCommas(data.numbers.recovered);
        deathElement.innerHTML = numberWithCommas(data.numbers.fatal);
    })

    let newsURL = '{{ route('api.news') }}';
    let newsSectionElement = document.querySelector('#section-news');

    const createNewsTemplate = (url, title, source, imageUrl) => `
        <a href="${url}" target="_blank"
            class="flex flex-col bg-white p-3 max-w-xs m-2 h-72">
            <div class="mb-2 w-full h-40">
                ${!!imageUrl ? `
                <img class="object-cover object-center w-full h-40 rounded" src="${imageUrl}" alt="${title}" onerror="this.src = '/images/default-placeholder.png';" />
                ` : `
                <img class="object-cover object-center w-full h-40 rounded" src="/images/default-placeholder.png" alt="No Image" />
                `}
            </div>
            <div>
                <p class="w-full font-semibold mb-2 leading-snug" name="news-title">${title}</p>
                <small class="text-xs text-gray-500">${source}</small>
            </div>
        </a>
    `;

    fetch(newsURL)
    .then(response => response.json())
    .then(data => {
        data.articles.forEach(article => {
            newsSectionElement.innerHTML += createNewsTemplate(article.url, article.title, article.source.name, article.urlToImage);
        });
    })

    let dateElement = document.querySelector('#date');
    let month = ['January', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Desember'];

    let today = new Date();
    let dd = today.getDate();
    let mmmm = month[today.getMonth()];
    let yyyy = today.getFullYear();


    date.innerHTML = `${dd} ${mmmm} ${yyyy}`;
</script>
@endpush