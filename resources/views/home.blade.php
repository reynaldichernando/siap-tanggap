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
        <h1 class="text-4xl m-4 font-semibold">COVID-19 Cases in Indonesia</h1>
        <div class="rounded-xl shadow-lg bg-white w-4/5 p-4 m-16">
            <div class="flex flex-wrap justify-center">
                <div class="flex justify center flex-col p-5">
                    <h2 class="text-sm md:text-xl">Confirmed</h2>
                    <h3 id="confirmed" class="m-2 text-4xl font-semibold">
                        <div class="h-9 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
                    </h3>
                </div>

                <div class="flex justify center flex-col p-5">
                    <h2 class="text-sm md:text-xl">Recovered</h2>
                    <h3 id="recovered" class="m-2 text-4xl font-semibold">
                        <div class="h-9 w-36 mx-auto bg-gray-300 animate-pulse rounded-full"></div>
                    </h3>
                </div>

                <div class="flex justify center flex-col p-5">
                    <h2 class="text-sm md:text-xl">Deaths</h2>
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
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">What is Covid-19?</h1>
            <div class="leading-snug">
                <p>
                    COVID-19 is a disease caused by the severe acute respiratory syndrome coronavirus 2 virus
                    (SARS-CoV-2).
                    COVID-19 can causes respiratory system disorders, ranging from mild symptoms such as flu, to lung
                    infection such as pneumonia.
                </p>
            </div>
        </div>
        <div class="md:w-1/3 w-3/5">
            <div class="">
                <img src="{{URL::asset('/images/undraw_social_distancing_2g0u.svg')}}" alt="" class="w-full h-full">
            </div>
        </div>
    </section>

    <section class="flex justify-around items-center flex-col md:flex-row px-8 md:px-28 py-16">
        <div class="md:w-2/5 w-3/5">
            <img src="{{URL::asset('/images/undraw_sleep_analysis_o5f9.svg')}}" alt="" class="w-full h-full">
        </div>
        <div class="md:w-3/6 flex flex-col justify-center text-justify py-5">
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Covid-19 Symptoms</h1>
            <div class="leading-snug">
                Early symptoms of COVID-19 can resemble flu such as <span class="font-semibold">fever, runny nose, dry
                    cough, sore throat and headache</span>.
                After that, symptoms can disappear and recover or instead worsen. Patient with severe symptoms can
                experience
                high fever, cough with phlegm or blood, difficulty breathing, and chest pain. These symptoms appear
                when the body reacted by fighting the COVID-19 virus.
            </div>
        </div>
    </section>

    <section class="flex flex-col bg-blue-100 py-16 w-full">
        <div class="w-full mx-auto p-8">
            <h3 class="text-center text-xl md:text-4xl mb-8 font-semibold">Covid-19 Variants</h3>
            <div class="shadow-md bg-white lg:w-1/2 mx-auto">
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-one">Alpha Variant</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Variant Code:</strong> B. 1.1.7</li>
                            <li><strong>First discovered case:</strong> England, September 2020</li>
                            <li><strong>Virus infection rate:</strong> 43–90% more easily transmitted than previous
                                Coronavirus</li>
                            <li><strong>Infection severity:</strong> higher potential to cause severe symptoms and
                                higher risk of hospitalization from previous Coronavirus</li>
                        </ul>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-two" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-two">Beta Variant</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Variant Code:</strong> B. 1.351</li>
                            <li><strong>First discovered case:</strong> South Africa, May 2020</li>
                            <li><strong>Virus infection rate:</strong> Unknown</li>
                            <li><strong>Infection severity:</strong> higher risk to cause severe symptoms</li>
                        </ul>
                    </div>
                </div>
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-three" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-three">Gamma Variant</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Variant Code:</strong> P. 1</li>
                            <li><strong>First discovered case:</strong> Brazil, November 2020</li>
                            <li><strong>Virus infection rate:</strong> Unknown</li>
                            <li><strong>Infection severity:</strong> tend to be immune to COVID-19 treatment</li>
                        </ul>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-four" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-four">Delta Variant</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Variant Code:</strong> B.1.617.2</li>
                            <li><strong>First discovered case:</strong> India, October 2020</li>
                            <li><strong>Virus infection rate:</strong> 30–100% more easily transmitted than Alpha
                                variant</li>
                            <li><strong>Infection severity:</strong> almost twice the potential of hospitalization from
                                Alpha variant</li>
                        </ul>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-five" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-five">Lambda Variant</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Variant Code:</strong> C. 37</li>
                            <li><strong>First discovered case:</strong> Peru, December 2020</li>
                            <li><strong>Virus infection rate:</strong> Unknown</li>
                            <li><strong>Infection severity:</strong> Unknown</li>
                        </ul>
                    </div>
                </div>

                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-multi-six" type="checkbox" name="tabs">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-multi-six">Kappa Variant</label>
                    <div class="tab-content overflow-hidden bg-gray-100 leading-normal pl-8">
                        <ul class="list-disc py-4">
                            <li><strong>Variant Code:</strong> 1.617.2</li>
                            <li><strong>First discovered case:</strong> India, October 2020</li>
                            <li><strong>Virus infection rate:</strong> Unknown</li>
                            <li><strong>Infection severity:</strong> Unknown</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center flex-col md:flex-row px-8 md:px-28 py-16">
        <div class="md:w-4/6 flex flex-col justify-center text-justify py-5">
            <h1 class="text-2xl md:text-4xl font-semibold mb-5 md:mb-8 text-left">Covid-19 Diagnosis</h1>
            <div class="leading-snug">
                <p>
                    To determine whether a patient is infected by Coronavirus, a doctor will ask the symptoms the
                    patient
                    is experiencing and whether the patient has just visited or been to a place with Coronavirus
                    infection
                    case before symptoms arose.
                </p>
                <br>
                <p>In order to confirm the diagnosis of COVID-19, a doctor will do these tests:</p>
                <br>
                <ul class="list-disc pl-5">
                    <li class="p-2">
                        Rapid test to detect antibodies (IgM and IgG) produced by the body to fight Coronavirus. However,
                        antigen rapid tests are now considered more accurate than antibodies rapid test.
                        Even then, rapid test or antigen swab is not recommended to be done independently at home and
                        instead should be done by medical personnel.
                    </li>
                    <li class="p-2">Swab test or PCR test (polymerase chain reaction) to detect Coronavirus in phlegm.</li>
                    <li class="p-2">CT scan or Rontgen to detect infiltrate or liquid in the lung.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="w-full bg-blue-100 py-16">
        <h1 class="text-center text-2xl md:text-4xl mb-4 font-semibold">
            Latest News
        </h1>
        <div class="flex mx-auto w-5/6 flex-wrap items-center justify-center" id="section-news">

        </div>
        <div class="flex mx-auto w-5/6 flex-wrap items-center justify-center" id="news-skeleton">
            <div class="flex flex-col bg-white p-3 max-w-xs m-2 h-72 w-full">
                <div class="animate-pulse">
                    <div class="mb-2 w-full h-40 bg-gray-300 rounded"></div>
                    <div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-10/12 mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="bg-gray-300 mt-4 w-1/3 h-3 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white p-3 max-w-xs m-2 h-72 w-full">
                <div class="animate-pulse">
                    <div class="mb-2 w-full h-40 bg-gray-300 rounded"></div>
                    <div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-10/12 mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="bg-gray-300 mt-4 w-1/3 h-3 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white p-3 max-w-xs m-2 h-72 w-full">
                <div class="animate-pulse">
                    <div class="mb-2 w-full h-40 bg-gray-300 rounded"></div>
                    <div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-10/12 mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="bg-gray-300 mt-4 w-1/3 h-3 rounded"></div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-white p-3 max-w-xs m-2 h-72 w-full">
                <div class="animate-pulse">
                    <div class="mb-2 w-full h-40 bg-gray-300 rounded"></div>
                    <div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-full mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="w-10/12 mb-2 bg-gray-300 h-4 rounded"></div>
                        <div class="bg-gray-300 mt-4 w-1/3 h-3 rounded"></div>
                    </div>
                </div>
            </div>

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
    let newsSkeletonElement = document.querySelector('#news-skeleton');

    const createNewsTemplate = (url, title, source, imageUrl) => `
        <a href="${url}" target="_blank"
            class="flex flex-col bg-white p-3 max-w-xs m-2 md:h-72">
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
        data.items.forEach(article => {
            newsSectionElement.innerHTML += createNewsTemplate(`https://today.line.me/id/v2/article/${article.url.hash}`, article.title, article.publisher, `https://obs.line-scdn.net/${article.thumbnail.hash}/w1200`);
        });
        newsSkeletonElement.classList.remove('flex');
        newsSkeletonElement.classList.add('hidden');
    })

    let dateElement = document.querySelector('#date');
    let month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'December'];

    let today = new Date();
    let dd = today.getDate();
    let mmmm = month[today.getMonth()];
    let yyyy = today.getFullYear();


    date.innerHTML = `${dd} ${mmmm} ${yyyy}`;
</script>
@endpush