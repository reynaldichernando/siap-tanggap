@extends('layouts.app')

@section('content')
<main class="flex flex-col items-center py-8">
    <h1 class="text-4xl">Posts</h1>
    @auth
    <div class="flex flex-col md:flex-row w-11/12 md:w-3/5 lg:w-1/2 bg-white p-4 rounded shadow my-8">
        <div class="h-10 w-10 mr-4 bg-blue-300 rounded-full hidden md:block"></div>
        <form class="flex flex-col w-full" method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="flex flex-col flex-1">
                <textarea
                    class="shadow appearance-none border rounded mb-4 text-gray-700 resize-none p-2 focus:outline-none focus:shadow-outline leading-snug"
                    name="description" id="description" rows="4" maxlength="200"
                    placeholder="What are you thinking?"></textarea>
                <label
                    class="self-start align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 cursor-pointer"
                    for="image" id="lblImage">+ Add Image</label>
                <input type="file" name="image" id="image" class="hidden" accept="image/*"
                    onchange="document.querySelector('#lblImage').innerHTML = this.value.replace(/.*[\/\\]/, '');">
            </div>
            <div class="text-right">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Send</button>
            </div>
        </form>
    </div>
    @endauth
    <div class="flex flex-col w-full items-center mt-8" id="post-list"></div>

    <div class="hidden flex-col w-full items-center animate-pulse" id="post-skeleton">
        <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 mb-4 bg-white p-4 rounded shadow">
            <div class="flex items-center mb-4">
                <div class="h-10 w-10 mr-4 bg-gray-300 rounded-full"></div>
                <div class="bg-gray-300 h-4 w-28 rounded-full"></div>
            </div>
            <div class="flex bg-gray-300 h-4 w-full rounded-full mb-2"></div>
            <div class="flex bg-gray-300 h-4 w-full rounded-full mb-2"></div>
            <div class="flex bg-gray-300 h-4 w-4/5 rounded-full"></div>
            <div class="mt-4 bg-gray-300 h-4 w-24 rounded-full"></div>
        </div>
    </div>

    <button id="load-more"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-4 rounded-full focus:outline-none"
        onclick="loadMore()">Load More</button>
</main>
@endsection

@push('scripts')
<script>
    let URL = '{{ route('api.posts') }}';
    let loadMoreButton = document.querySelector('#load-more');
    let postSkeletonElement = document.querySelector('#post-skeleton');

    const createPostItemTemplate = (id, username, description) => `
    <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 mb-4 bg-white p-4 rounded shadow">
        <div class="flex items-center mb-4">
            <div class="h-10 w-10 mr-4 bg-blue-300 rounded-full"></div>
            <div class="font-semibold">${username}</div>
        </div>
        <p class="flex flex-col flex-1 leading-snug">${description}</p>
        <a class="mt-4 self-start text-sm text-gray-700" href="/discussion/${id}">View Replies</a>
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
                postListElement.innerHTML += createPostItemTemplate(post.id, post.user.name, post.description)
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