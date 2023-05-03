@extends('layouts.app')
@section('content')
    @if (session()->has('message'))
        <div class="bg-indigo-900 text-center py-4 lg:px-4">
            <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
                <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('message') }}</span>
                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
            </div>
        </div>
    @endif

    <div class="container m-auto text-center pt-3 pb-3">
        <h1 class="text-4xl font-bold">{{ $post->title }}</h1>
        <div class="mt-2">
            <span>
                by : <span class="text-gray-500 italic">{{ $post->user->name }}</span>
                on : <span class="text-gray-500 italic">{{ date('d-m-Y', strtotime($post->updated_at)) }}</span>
            </span>
        </div>
    </div>
    <div class="container  pt-3 pb-3">
        <div class="flex h-96">
            <img class="object-cover w-100" src="/images/{{ $post->image_path }}" alt="">
        </div>
        <p class="text-l text-gray-700 py-8 leading-10	 ">{{ $post->description }}</p>
        @if (auth()->user() && auth()->user()->id == $post->user_id)
            <a href="{{ route('blog.edit', $post->slug) }}"
                class="no-underline  
                bg-green-700 
                text-gray-100 py-3 px-4 
                rounded-lg font-bold 
                uppercase">edit
                post</a>
            <form action="{{ route('blog.destroy', $post->slug) }}" method="post" class="inline-block">
                @csrf
                @method('delete')
                <button
                    class="no-underline  
                    bg-red-700 
                    text-gray-100 py-3 px-4 
                    rounded-lg font-bold 
                    uppercase">delete
                    post</button>
            </form>
        @endif
    </div>
@endsection
