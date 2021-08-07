@extends('layouts.app')

@section('content')
<main class="flex flex-col items-center py-8">
    <h1 class="text-4xl">Forum Diskusi</h1>
    @auth
    <div class="flex flex-col md:flex-row w-11/12 md:w-3/5 lg:w-1/2 bg-white p-4 rounded shadow my-8">
        <!-- <div class="h-10 w-10 mr-4 bg-teal-300 rounded-full hidden md:block">
        </div> -->

        <!-- profile image -->
        @if( Auth::user()->profile_picture )
        <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ URL::asset('/uploads/'.Auth::user()->profile_picture) }}"
                    alt="profile" id="profilepic-image">
        @else
        <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ URL::asset('/images/default-profile-image.jpg') }}"
                    alt="profile" id="profilepic-image">
        @endif

        <form class="flex flex-col w-full" method="POST" action="{{ route('post.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col flex-1">
                <textarea
                    class="shadow appearance-none border rounded mb-4 text-gray-700 resize-none p-2 focus:outline-none focus:shadow-outline leading-snug"
                    name="description" id="description" rows="4" maxlength="200"
                    placeholder="Apa yang ada di pikiran anda?" required></textarea>
                <div class="flex items-center">
                    <label
                        class="font-bold text-sm text-teal-500 hover:text-teal-800 cursor-pointer"
                        for="image" id="lblImage">+ Tambah Gambar</label>
                    <button id="clear-image" class="hidden ml-4 focus:outline-none" onclick="event.preventDefault(); document.querySelector('#image').value = ''; document.querySelector('#lblImage').innerHTML = '+ Add Image'; this.classList.add('hidden')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                    </button>
                </div>
                <input type="file" name="image" id="image" class="hidden" accept="image/*"
                    onchange="document.querySelector('#lblImage').innerHTML = !!this.value ? this.value.replace(/.*[\/\\]/, '') : '+ Add Image'; !!this.value ? document.querySelector('#clear-image').classList.remove('hidden') : document.querySelector('#clear-image').classList.add('hidden')">
            </div>
            <div class="text-right">
                <button
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Kirim</button>
            </div>
        </form>
    </div>
    @endauth
    <div class="flex flex-col w-full items-center mt-8" id="post-list"></div>

    <div class="hidden flex-col w-full items-center animate-pulse" id="post-skeleton">
        <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 mb-4 bg-white p-4 rounded shadow">
            <div class="flex items-center mb-4">
                <div class="h-10 w-10 mr-4 bg-gray-300 rounded-full"></div>
                <div>
                    <div class="bg-gray-300 h-4 w-28 rounded-full"></div>
                    <div class="text-xs mt-2 bg-gray-300 h-3 w-12 rounded-full"></div>
                </div>
            </div>
            <div class="flex bg-gray-300 h-4 w-full rounded-full mb-2"></div>
            <div class="flex bg-gray-300 h-4 w-full rounded-full mb-2"></div>
            <div class="flex bg-gray-300 h-4 w-4/5 rounded-full"></div>
            <div class="mt-4 bg-gray-300 h-4 w-24 rounded-full"></div>
        </div>
    </div>

    <button id="load-more"
        class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-4 px-4 rounded-full focus:outline-none"
        onclick="loadMore()">Load More</button>
</main>
@endsection

@push('scripts')
<script>
    let URL = '{{ route('api.posts') }}';
    let loadMoreButton = document.querySelector('#load-more');
    let postSkeletonElement = document.querySelector('#post-skeleton');

    const createPostItemTemplate = (id, username, profile_picture, description, image, time) => `
    <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 mb-4 bg-white py-4 rounded shadow">
        <div class="flex items-center mb-4 px-4">
            

            <!-- profile image -->
            ${!!profile_picture ? `<img class="h-10 w-10 mr-4 object-cover rounded-full border-2" src="uploads/${profile_picture}"
                        alt="profile" id="profilepic-image">`
            :
                `<img class="h-10 w-10 mr-4 rounded-full border-2 object-cover" src="images/default-profile-image.jpg"
                        alt="profile" id="profilepic-image">`
            }

            

            
            <div>
                <div class="font-semibold">${username}</div>
                <div class="text-xs mt-2">${time}</div>
            </div>
        </div>
        <p class="flex flex-col flex-1 leading-snug px-4">${description}</p>
        ${!!image ? 
            `<a href="uploads/${image}" target="_blank" rel="noopener noreferrer"><img class="mt-4 w-full" src="uploads/${image}" alt="${username}'s post"></a>` : 
            ''}
        <a class="mt-4 self-start text-sm text-gray-700 mx-4" href="discussion/${id}">Lihat Komentar</a>
    </div>
    `;

    const showLoader = () => {
        postSkeletonElement.classList.add('flex');
        postSkeletonElement.classList.remove('hidden');
        loadMoreButton.classList.add('hidden');
    }

    const hideLoader = () => {
        postSkeletonElement.classList.add('hidden');
        postSkeletonElement.classList.remove('flex');
        loadMoreButton.classList.remove('hidden');
    }

    const loadMore = () => {
        showLoader();

        fetch(URL)
        .then(response => response.json())
        .then(data => {
            let postListElement = document.querySelector('#post-list');
            data.data.forEach(post => {
                postListElement.innerHTML += createPostItemTemplate(post.id, post.user.name, post.user.profile_picture, post.description, post.image, post.human_readable_time)
            });

            hideLoader();

            URL = data.next_page_url;
            if(!URL) {
                loadMoreButton.classList.add('hidden');
            }
        })
    }

    loadMore();

</script>
@endpush