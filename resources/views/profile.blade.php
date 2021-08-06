@extends('layouts.app')

@section('custom-style')
    <style>
    </style>
@endsection


@section('content')

    <form class="flex flex-col md:flex-row md:items-start md:space-x-10 justify-center px-12 items-center mt-32 mb-52" method="POST" action="{{ route('profile.edit') }}"
            enctype="multipart/form-data">
            @csrf
        <div class="relative">
            <!-- profile image -->
            @if( Auth::user()->profile_picture )
            <img class="object-cover rounded-full w-20 h-20 md:w-40 md:h-40
                        border-2 p-1 cursor-pointer" src="{{ Storage::url(Auth::user()->profile_picture) }}"
                        alt="profile" id="profile-pic">
            @else
            <img class="object-cover rounded-full w-20 h-20 md:w-40 md:h-40
                        border-2 p-1 cursor-pointer" src="{{ URL::asset('/images/default-profile-image.jpg') }}"
                        alt="profile" id="profile-pic">
            @endif
            <input type="file" class="hidden" id="input-image" name="profile-picture">

        </div>

        <div id="div-form" class="">
            <label class="text-gray-600 font-light">Username</label>
            <input type='text' value="{{ Auth::user()->name }}" name="name" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" 
                id="input-name"/>
            
            <label class="text-gray-600 font-light">email</label>
            <input type='text' disabled value="{{ Auth::user()->email }}" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />

            
            <button class="invisible md:float-right bg-blue-500 py-2 px-4 border-b-4 border-blue-800 rounded text-white hover:border-blue-lighter hover:bg-blue-400 focus:outline-none"
                id="btn-save" type=submit>
                    Simpan
               
                <!-- <span class="flex items-center justify-center">
                    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        class="h-8 w-8" viewBox="0 0 50 50" xml:space="preserve">
                    <path fill="#fff" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                        <animateTransform attributeType="xml"
                        attributeName="transform"
                        type="rotate"
                        from="0 25 25"
                        to="360 25 25"
                        dur="0.6s"
                        repeatCount="indefinite"/>
                        </path>
                    </svg>
                    Menyimpan
                </span> -->
            </button>


        </div>

    </form>

@endsection

@push('scripts')
    <script>
        let imageElement = document.querySelector('#profile-pic')
        let inputImageElement = document.querySelector('#input-image')
        let inputNameElement = document.querySelector('#input-name')
        let btnSave = document.querySelector('#btn-save')

        inputNameElement.addEventListener('input', function(e) {
            btnSave.classList.remove('invisible')
        })


        btnSave.addEventListener('click', function(e) {

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

        imageElement.addEventListener('click', (e) => {
            inputImageElement.click();
        })





    </script>
@endpush