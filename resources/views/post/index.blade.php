@extends('layouts.app')

@section('content')
<main class="flex flex-col items-center">
    @auth
    <div class="flex flex-col md:flex-row w-11/12 md:w-3/5 lg:w-1/2 bg-white p-4 rounded shadow">
        <div class="h-10 w-10 mr-4 bg-blue-300 rounded-full hidden md:block"></div>
        <form class="flex flex-col w-full" action="">
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
    <h1 class="text-4xl m-8">Posts</h1>
    <div class="flex flex-col w-full items-center" id="post-list">

    </div>
</main>
@endsection

@push('scripts')
<script>
    let URL = '{{ route('posts') }}';

    const createPostItemTemplate = (id, username, description) => `
    <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 mb-4 bg-white p-4 rounded shadow">
            <div class="flex items-center mb-4">
                <div class="h-10 w-10 mr-4 bg-blue-300 rounded-full"></div>
                <p class="font-semibold">${username}</p>
            </div>
            <div class="flex flex-col flex-1">${description}</div>
            <a class="mt-4 self-start text-sm text-gray-700" href="/discussion/${id}">View Replies</a>
        </div>
    `;

    fetch(URL)
    .then(response => response.json())
    .then(data => {
        let postListElement = document.querySelector('#post-list');
        data.data.forEach(post => {
            postListElement.innerHTML += createPostItemTemplate(post.id, post.user.name, post.description)
        });
    })
</script>
@endpush