
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
         .tab input:checked ~ .tab-content {
         max-height: 100vh;
         }
         /* Label formatting when open */
         .tab input:checked + label{
         /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
         font-size: 1.25rem; /*.text-xl*/
         padding: 1.25rem; /*.p-5*/
         border-left-width: 2px; /*.border-l-2*/
         border-color: #6574cd; /*.border-indigo*/
         background-color: #f8fafc; /*.bg-gray-100 */
         color: #6574cd; /*.text-indigo*/
         }
         /* Icon */
         .tab label::after {
         float:right;
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
         .tab input[type=checkbox] + label::after {
         content: "+";
         padding-bottom: 4px;
         font-weight:bold; /*.font-bold*/
         border-width: 1px; /*.border*/
         border-radius: 9999px; /*.rounded-full */
         border-color: #b8c2cc; /*.border-grey*/
         display: flex;
         align-items: center;
         justify-content: center;
         text-align: center;
         }
         /* Icon formatting - open */
         .tab input[type=checkbox]:checked + label::after {
         transform: rotate(315deg);
         background-color: #6574cd; /*.bg-indigo*/
         color: #f8fafc; /*.text-grey-lightest*/
         }
    </style>
@endsection

@section('content')

    

    <section class="flex justify-center flex-row md:py-4 mb-5 md:mb-18 text-center flex-shrink">
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


    <section class="flex flex-col-reverse justify-around bg-blue-50 py-4 mb-12 md:flex-row">
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

    <section class="flex justify-around flex-col md:flex-row px-8 md:px-28 bg-blue-50 py-4 mb-12">
        <div class="md:w-2/5">
            <img src="https://image.freepik.com/free-vector/portrait-woman-get-sick-she-is-coughing-suffering-from-chest-pain-coronavirus-2019-ncov-flu-health-medical-illustration_253263-32.jpg   " alt="">
        </div>
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5">
            <h1 class="text-2xl md:text-4xl font-bold mb-5 md:mb-8">Gejala Covid-19</h1>
            <p class="md:text-lg">Gejala awal infeksi COVID-19 bisa menyerupai gejala flu, yaitu <span class="font-semibold">demam, pilek, batuk kering, sakit tenggorokan, dan sakit kepala</span>. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat. Penderita dengan gejala yang berat bisa mengalami demam tinggi, batuk berdahak atau berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut di atas muncul ketika tubuh bereaksi melawan virus COVID-19.</p>
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
                        <li><strong>Tingkat penularan virus:</strong> 43–90% lebih mudah menular dari virus Corona sebelumnya</li>
                        <li><strong>Tingkat keparahan infeksi:</strong> lebih berpotensi menimbulkan gejala berat dan peningkatan risiko rawat inap dari virus Corona jenis awal</li>
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
                        <li><strong>Tingkat keparahan infeksi:</strong> cenderung kebal terhadap pengobatan COVID-19</li>
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
                        <li><strong>Tingkat keparahan infeksi:</strong> potensi peningkatan risiko dibutuhkannya rawat inap hampir dua kali lipat dari varian Alfa</li>
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

    <section class="flex flex-col justify-around bg-blue-50 py-4 mb-12 md:flex-row">
        <div class="w-full  mx-auto px-8">
        <p class="text-center text-lg md:text-4xl mb-4">Diagnosis Covid-19</p>
        <div class="text-justify text-md md:text-lg">  
            <p>Untuk menentukan apakah pasien terinfeksi virus Corona, dokter akan menanyakan gejala yang dialami pasien dan apakah pasien baru saja bepergian atau tinggal di daerah yang memiliki kasus infeksi virus Corona sebelum gejala muncul. Dokter juga akan menanyakan apakah pasien ada kontak dengan orang yang menderita atau diduga menderita COVID-19.</p>
            <br>
            <p>Guna memastikan diagnosis COVID-19, dokter akan melakukan beberapa pemeriksaan berikut:</p>
            <br>
            <ul class="list-disc pl-5">
                <li class="p-2 hover:bg-green-100">Rapid test untuk mendeteksi antibodi (IgM dan IgG) yang diproduksi oleh tubuh untuk melawan virus Corona. Namun, rapid test antigen sekarang dianggap lebih akurat dibandingkan rapid antibodi. Meski demikian, pemeriksaan rapid test atau swab antigen tidak dianjurkan untuk dilakukan mandiri di rumah dan harus oleh petugas medis</li>
                <li class="p-2 hover:bg-green-100">Swab test atau tes PCR (polymerase chain reaction) untuk mendeteksi virus Corona di dalam dahak.</li>
                <li class="p-2 hover:bg-green-100">CT scan atau Rontgen dada untuk mendeteksi infiltrat atau cairan di paru-paru.</li>
            </ul>
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

@section('custom-script')
<script>
</script>
@endsection