@extends('layouts.app')

@push('custom-style')
<style>
    #profilepic-div:hover #profilepic-content {
        opacity: 0.7;
    }

    #profilepic-div:hover #profilepic-image {
        opacity: .5;
    }

    /*Toast open/load animation*/
    .alert-toast {
        -webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    /*Toast close animation*/
    .alert-toast input:checked~* {
        -webkit-animation: fade-out-right 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: fade-out-right 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    @-webkit-keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes slide-out-top{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}}@keyframes slide-out-top{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}}@-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes slide-out-bottom{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}}@keyframes slide-out-bottom{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}}@-webkit-keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@-webkit-keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}@keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}
	
</style>
@endpush

@section('content')

@if(session()->has('message'))
<div class="alert-toast fixed top-16 md:top-24 right-0 m-8 w-5/6 md:w-full max-w-sm z-10">
    <input type="checkbox" class="hidden" id="footertoast">

    <label
        class="close cursor-pointer flex items-center justify-between w-full p-2 px-4 bg-green-500 h-14 rounded shadow-lg text-white"
        title="close" for="footertoast">
        {{ session()->get('message') }}

        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
            viewBox="0 0 18 18">
            <path
                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
            </path>
        </svg>
    </label>
</div>
@endif


<form class="flex flex-col lg:flex-row lg:items-start md:space-x-10 justify-center px-12 items-center mt-32 mb-52"
    method="POST" action="{{ route('profile.edit') }}" enctype="multipart/form-data">
    @csrf
    <div class="relative w-20 h-20 md:w-40 md:h-40 rounded-full overflow-hidden cursor-pointer" id="profilepic-div">
        <!-- profile image -->
        @if( Auth::user()->profile_picture )
        <img class="h-full w-full object-cover opacity-100 transition-opacity ease-in-out"
            src="{{ URL::asset('/uploads/'.Auth::user()->profile_picture) }}" alt="profile" id="profilepic-image">
        @else
        <img class="h-full w-full object-cover opacity-100 transition-opacity ease-in-out"
            src="{{ URL::asset('/images/default-profile-image.jpg') }}" alt="profile" id="profilepic-image">
        @endif
        <div class="absolute inset-0 bg-gray-500 flex flex-col justify-center items-center text-white opacity-0 transition-opacity ease-in-out"
            id="profilepic-content">
            <span class="text-md md:text-2xl font-semibold w-1/2 text-center">Ubah Foto Profil</span>
        </div>

        <input type="file" class="hidden" id="input-image" name="profile-picture">
    </div>

    <div id="div-form" class="">
        <label class="text-gray-600 font-light">Nama</label>
        <input type='text' value="{{ Auth::user()->name }}" name="name"
            class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500"
            id="input-name" />

        <label class="text-gray-600 font-light">Email</label>
        <input type='text' disabled value="{{ Auth::user()->email }}"
            class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />


        <button
            class="invisible md:float-right w-full md:w-auto bg-blue-500 py-2 px-4 border-b-4 border-blue-800 rounded text-white hover:border-blue-lighter hover:bg-blue-400 focus:outline-none"
            id="btn-save" type=submit>
            Simpan
        </button>


    </div>

</form>

@endsection

@push('scripts')
<script>
    let imageDiv = document.querySelector('#profilepic-div')
        let imageElement = document.querySelector('#profilepic-image')
        let inputImageElement = document.querySelector('#input-image')
        let inputNameElement = document.querySelector('#input-name')
        let btnSave = document.querySelector('#btn-save')

        inputNameElement.addEventListener('input', function(e) {
            btnSave.classList.remove('invisible')
        })

        inputImageElement.addEventListener('change', function(e) {
            let input = this;
            let url = this.value;
            let ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
            {
                let reader = new FileReader();

                reader.onload = function (e) {
                    imageElement.setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);

                btnSave.classList.remove('invisible');


            }
        })

        imageDiv.addEventListener('click', (e) => {
            inputImageElement.click();
        })
</script>
@endpush