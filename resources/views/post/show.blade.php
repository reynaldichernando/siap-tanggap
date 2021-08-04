@extends('layouts.app')

@section('content')
<main class="flex flex-col items-center py-8">
    <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 m-4 bg-white py-4 rounded shadow">
        <div class="flex items-center mb-4 px-4">
            <div class="h-10 w-10 mr-4 bg-blue-300 rounded-full"></div>
            <div>
                <div class="font-semibold">{{ $post->user->name }}</div>
                <div class="text-xs mt-2">{{ $post->human_readable_time }}</div>
            </div>
        </div>
        <p class="flex flex-col flex-1 leading-snug px-4">{{ $post->description }}</p>
        @if ($post->image)
        <a href="{{ Storage::url($post->image) }}" target="_blank" rel="noopener noreferrer"><img class="mt-4 w-full"
                src="{{ Storage::url($post->image) }}" alt="${username}'s post"></a>
        @endif
    </div>

    <div class="flex flex-col w-full items-center" id="reply-list">
        @forelse ($post->reply->sortBy('created_at') as $reply)
        <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 m-2">
            <div class="bg-white py-4 ml-14 rounded shadow">
                <div class="flex items-center mb-4 px-4">
                    <div class="h-10 w-10 mr-4 bg-blue-300 rounded-full"></div>
                    <div>
                        <div class="font-semibold">{{ $reply->user->name }}</div>
                        <div class="text-xs mt-2">{{ $reply->human_readable_time }}</div>
                    </div>
                </div>
                <p class="flex flex-col flex-1 leading-snug px-4">{{ $reply->description }}</p>
            </div>
        </div>
        @empty
        <p>No replies yet.</p>
        @endforelse
    </div>

    @auth
    <div class="flex flex-col md:flex-row w-11/12 md:w-3/5 lg:w-1/2">
        <h3 class="text-2xl mt-8 ">Post Reply</h3>
    </div>
    <div class="flex flex-col md:flex-row w-11/12 md:w-3/5 lg:w-1/2 bg-white p-4 rounded shadow my-8">
        <div class="h-10 w-10 mr-4 bg-blue-300 rounded-full hidden md:block"></div>
        <form class="flex flex-col w-full" method="POST" action="{{ route('reply.store', ['post' => $post]) }}">
            @csrf
            <div class="flex flex-col flex-1">
                <textarea
                    class="shadow appearance-none border rounded mb-4 text-gray-700 resize-none p-2 focus:outline-none focus:shadow-outline leading-snug"
                    name="description" id="description" rows="4" maxlength="200"
                    placeholder="What are you thinking?" required></textarea>
            </div>
            <div class="text-right">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Send</button>
            </div>
        </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @endauth
</main>
@endsection