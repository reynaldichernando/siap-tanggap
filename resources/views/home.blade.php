@extends('layouts.app')

@section('custom-style')
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
@endsection

@section('content')
<section class=" my-5 md:my-18 text-center flex justify-center">
    <div class="rounded-lg shadow-lg bg-white flex justify-center flex-row flex-shrink w-3/5 md:py-4">
        <div class="flex justify center flex-col mx-1 md:mx-10">
            <h2 class="font-bold text-sm md:text-3xl">Jumlah Kasus</h2>
            <br>
            <h3 id="confirmed" class="md:text-xl font-semibold">
                <div class="h-5 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
            </h3>
        </div>

        <div class="flex justify center flex-col mx-1 md:mx-10">
            <h2 class="font-bold text-sm md:text-3xl">Jumlah Kesembuhan</h2>
            <br>
            <h3 id="recovered" class="md:text-xl font-semibold">
                <div class="h-5 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
            </h3>
        </div>

        <div class="flex justify center flex-col mx-1 md:mx-10">
            <h2 class="font-bold text-sm md:text-3xl">Jumlah Kematian</h2>
            <br>
            <h3 id="death" class="md:text-xl font-semibold">
                <div class="h-5 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
            </h3>
        </div>
    </div>
</section>

<section class="flex flex-col-reverse justify-around bg-blue-50 py-4 mb-12 md:flex-row leading-leading-relaxed">
    <div class="md:w-3/6 flex flex-col justify-center text-justify py-5 px-8">
        <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Apa itu Covid-19?</h1>
        <p class="md:text-lg">COVID-19 adalah penyakit yang disebabkan oleh virus severe acute respiratory syndrome
            coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan gangguan sistem pernapasan, mulai dari gejala yang
            ringan seperti flu, hingga infeksi paru-paru, seperti pneumonia.</p>
    </div>
    <div class="w-2/5 mx-auto">
        <img src="{{URL::asset('/images/pablo-573.png')}}" alt="">
        <div class="text-sm text-center text-gray-300 mt-2">Illustration by <a
                href="https://icons8.com/illustrations/author/5c07e68d82bcbc0092519bb6">Icons 8</a> from <a
                href="https://icons8.com/illustrations">Ouch!</a></a></div>
    </div>
</section>

<section class="flex justify-around flex-col md:flex-row px-8 md:px-28 bg-blue-50 py-4 mb-12 leading-relaxed">
    <div class="w-2/5 mx-auto">
        <img src="{{URL::asset('/images/pablo-578.png')}}" alt="">
        <div class="text-sm text-center text-gray-300 mt-2">Illustration by <a
                href="https://icons8.com/illustrations/author/5c07e68d82bcbc0092519bb6">Icons 8</a> from <a
                href="https://icons8.com/illustrations">Ouch!</a></div>
    </div>
    <div class="md:w-3/6 flex flex-col justify-center text-justify py-5">
        <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Gejala Covid-19</h1>
        <p class="md:text-lg">Gejala awal infeksi COVID-19 bisa menyerupai gejala flu, yaitu <span
                class="font-semibold">demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala</span>. Setelah
            itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami
            demam tinggi, batuk berdahak atau berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut di atas
            muncul ketika tubuh bereaksi melawan virus COVID-19.</p>
    </div>
</section>

<section class="flex flex-col justify-around bg-blue-50 py-4 mb-12 md:flex-row">
    <div class="w-full mx-auto px-8">
        <p class="text-center text-lg md:text-4xl mb-4">Varian Covid-19</p>
        <div class="shadow-md">
            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-one">Varian Alfa</label>
                <div class="tab-content overflow-hidde bg-gray-100 leading-normal pl-8">
                    <ul class="list-disc py-4">
                        <li><strong>Kode varian:</strong> B. 1.1.7</li>
                        <li><strong>Kasus pertama kali ditemukan:</strong> Inggris, September 2020</li>
                        <li><strong>Tingkat penularan virus:</strong> 43–90% lebih mudah menular dari virus Corona
                            sebelumnya</li>
                        <li><strong>Tingkat keparahan infeksi:</strong> lebih berpotensi menimbulkan gejala berat dan
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
                        <li><strong>Tingkat penularan virus:</strong> 30–100% lebih mudah menular dari varian Alfa</li>
                        <li><strong>Tingkat keparahan infeksi:</strong> potensi peningkatan risiko dibutuhkannya rawat
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

<section class="flex flex-col justify-around bg-blue-50 py-4 mb-12 md:flex-row leading-relaxed">
    <div class="w-full  mx-auto px-8">
        <p class="text-center text-lg md:text-4xl mb-4">Diagnosis Covid-19</p>
        <div class="text-justify text-md md:text-lg">
            <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien
                dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona
                sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita
                atau diduga menderita COVID-19.</p>
            <br>
            <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:</p>
            <br>
            <ul class="list-disc pl-5">
                <li class="p-2 hover:bg-green-100">Rapid test untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi
                    oleh tubuh untuk melawan virus Corona. Namun, rapid test antigen sekarang dianggap lebih akurat
                    dibandingkan rapid antibodi. Meski demikian, pemeriksaan rapid test atau swab antigen tidak
                    dianjurkan untuk dilakukan mandiri di rumah dan harus oleh petugas medis</li>
                <li class="p-2 hover:bg-green-100">Swab test atau tes PCR (polymerase chain reaction) untuk mendeteksi
                    virus Corona di dalam dahak.</li>
                <li class="p-2 hover:bg-green-100">CT scan atau Rontgen dada untuk mendeteksi infiltrat atau cairan di
                    paru-paru.</li>
            </ul>
        </div>
</section>


<section class="mb-6">
    <h1 class="text-center text-2xl md:text-4xl mb-4 font-semibold">
        Berita Terkini
    </h1>
    <div class="border-gray-200 flex flex-col overflow-x-auto overflow-y-hidden mx-auto w-5/6 no-scrollbar pb-1 space-y-2"
        id="section-news">

    </div>
</section>
@endsection

@push('scripts')
<script>
    let statisticURL = '{{ route('api.statistics') }}';
    let confirmedElement = document.querySelector('#confirmed'); 
    let recoveredElement = document.querySelector('#recovered'); 
    let deathElement = document.querySelector('#death'); 

    fetch(statisticURL)
    .then(response => response.json())
    .then(data => {
        confirmedElement.innerHTML = data.positif;
        recoveredElement.innerHTML = data.sembuh;
        deathElement.innerHTML = data.meninggal;
    })

    let newsURL = '{{ route('api.news') }}';
    let newsSectionElement = document.querySelector('#section-news');

    const createNewsTemplate = (url, title, description, imageUrl) => `
        <a href="${url}" target="_blank"
            class="flex flex-col-reverse md:flex-row items-center justify-center h-full bg-gray-800 rounded-xl md:space-x-10 p-2 text-white hover:text-black hover:bg-gray-200 border border-gray-800 transition duration-300 ease-in-out">
            <div class="md:w-2/3">
                <p class="w-full md:text-2xl font-semibold" name="news-title">${title}</p>
                <br>
                <p class="w-full pb-8 text-sm tracking-wide leading-tight" name="news-desc">${description}</p>
            </div>
            <div class="md:w-1/5 mb-2 md:mb-0">
                ${!!imageUrl ? `
                <img class="flex-1 h-full w-full rounded-lg" src="${imageUrl}" alt="${title}" />
                ` : `
                <img class="flex-1 h-full w-full rounded-lg" src="/images/default-placeholder.png" alt="No Image" />
                `}
            </div>
        </a>
    `;

    fetch(newsURL)
    .then(response => response.json())
    .then(data => {
        data.articles.forEach(article => {
            newsSectionElement.innerHTML += createNewsTemplate(article.url, article.title, article.description, article.urlToImage);
        });
    })
</script>
@endpush