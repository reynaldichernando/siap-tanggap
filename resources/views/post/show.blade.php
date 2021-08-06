@extends('layouts.app')

@section('content')
<main class="flex flex-col items-center pt-4 pb-8">
    <div class="flex w-11/12 md:w-3/5 lg:w-1/2 m-2">
        <a class="flex flex-row items-center" href="{{ route('post') }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
          </svg><span class="text-md ml-1">Kembali ke Forum</span></a>
    </div>
    <div class="flex flex-col w-11/12 md:w-3/5 lg:w-1/2 m-4 bg-white py-4 rounded shadow">
        <div class="flex items-center mb-4 px-4">
            <!-- profile image -->
            @if( $post->user->profile_picture )
            <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ Storage::url($post->user->profile_picture) }}"
                        alt="profile" id="profilepic-image">
            @else
            <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ URL::asset('/images/default-profile-image.jpg') }}"
                        alt="profile" id="profilepic-image">
            @endif
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
                    <!-- profile image -->
                    @if( $reply->user->profile_picture )
                    <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ Storage::url($reply->user->profile_picture) }}"
                                alt="profile" id="profilepic-image">
                    @else
                    <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ URL::asset('/images/default-profile-image.jpg') }}"
                                alt="profile" id="profilepic-image">
                    @endif
                    <div>
                        <div class="font-semibold">{{ $reply->user->name }}</div>
                        <div class="text-xs mt-2">{{ $reply->human_readable_time }}</div>
                    </div>
                </div>
                <p class="flex flex-col flex-1 leading-snug px-4">{{ $reply->description }}</p>
            </div>
        </div>
        @empty
        <p>Belum ada komentar.</p>
        @endforelse
    </div>

    @auth
    <div class="flex flex-col md:flex-row w-11/12 md:w-3/5 lg:w-1/2">
        <h3 class="text-2xl mt-8 ">Komentar</h3>
    </div>
    <div class="flex flex-col md:flex-row w-11/12 md:w-3/5 lg:w-1/2 bg-white p-4 rounded shadow my-8">
        <!-- profile image -->
        @if( Auth::user()->profile_picture )
        <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ Storage::url(Auth::user()->profile_picture) }}"
                    alt="profile" id="profilepic-image">
        @else
        <img class="h-10 w-10 rounded-full border-2 object-cover hidden md:block mr-4" src="{{ URL::asset('/images/default-profile-image.jpg') }}"
                    alt="profile" id="profilepic-image">
        @endif
        <form class="flex flex-col w-full" method="POST" action="{{ route('reply.store', ['post' => $post]) }}">
            @csrf
            <div class="flex flex-col flex-1">
                <textarea
                    class="shadow appearance-none border rounded mb-4 text-gray-700 resize-none p-2 focus:outline-none focus:shadow-outline leading-snug"
                    name="description" id="description" rows="4" maxlength="200"
                    placeholder="Apa yang ada di pikiran anda?" required></textarea>
            </div>
            <div class="text-right">
                <button
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Kirim</button>
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