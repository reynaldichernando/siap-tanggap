@extends('layouts.app')

<style>

    #profilepic-div:hover #profilepic-content {
        opacity: 0.7;
    }

    #profilepic-div:hover #profilepic-image {
        opacity: .5;
    }

</style>



@section('content')

    <form class="flex flex-col md:flex-row md:items-start md:space-x-10 justify-center px-12 items-center mt-32 mb-52" method="POST" action="{{ route('profile.edit') }}"
            enctype="multipart/form-data">
            @csrf
        <div class="relative w-20 h-20 md:w-40 md:h-40 rounded-full overflow-hidden cursor-pointer" id="profilepic-div">
            <!-- profile image -->
            @if( Auth::user()->profile_picture )
            <img class="h-full w-full object-cover opacity-100 transition-opacity ease-in-out" src="{{ Storage::url(Auth::user()->profile_picture) }}"
                        alt="profile" id="profilepic-image">
            @else
            <img class="h-full w-full object-cover opacity-100 transition-opacity ease-in-out" src="{{ URL::asset('/images/default-profile-image.jpg') }}"
                        alt="profile" id="profilepic-image">
            @endif
            <div class="absolute inset-0 bg-gray-500 flex flex-col justify-center items-center text-white opacity-0 transition-opacity ease-in-out"
                id="profilepic-content">
                <span class="text-2xl font-semibold w-1/2 text-center">Ubah Foto Profil</span>
            </div>
            
            <input type="file" class="hidden" id="input-image" name="profile-picture">
        </div>

        <div id="div-form" class="">
            <label class="text-gray-600 font-light">Nama</label>
            <input type='text' value="{{ Auth::user()->name }}" name="name" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" 
                id="input-name"/>
            
            <label class="text-gray-600 font-light">Email</label>
            <input type='text' disabled value="{{ Auth::user()->email }}" class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />

            
            <button class="invisible md:float-right w-full md:w-auto bg-blue-500 py-2 px-4 border-b-4 border-blue-800 rounded text-white hover:border-blue-lighter hover:bg-blue-400 focus:outline-none"
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

        

        window.addEventListener("load", function() {
            @if(session()->has('message'))
                alert("{{ session()->get('message') }}")
            @endif
        });




    </script>
@endpush