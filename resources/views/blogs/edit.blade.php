@extends('layouts.app')
@section('content')
    <div class="container m-auto text-center pt-3 pb-3">
        <h1 class="text-4xl font-bold">update post</h1>
    </div>
    <div class="container  pt-3 pb-3">
        <form action="{{ route('blog.update', $post->slug) }}" method="post" class="flex flex-col items-center"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" class="w-75 h-20 text-5xl rounded-lg drop-shadow-lg border-b p-4 mb-5" name="title"
                placeholder="title" value="{{ $post->title }}">
            <textarea class="w-75 text-l rounded-lg drop-shadow-lg border-b p-4 mb-5" name="description" placeholder="description"
                id="" cols="30" rows="10">
                {{ $post->description }}
            </textarea>
            <div class="mb-5">
                <label
                    class="bg-gray-100 hover:bg-gray-700 
                            text-center 
                            text-gray-700 hover:text-gray-100
                            transition duration-300 
                            cursor-pointer
                            p-3 rounded-lg font-bold
                            uppercase">
                    <span>select image to impload</span>
                    <input type="file" name="image">
                </label>
            </div>
            <button type="submit"
                class="bg-green-700
                        text-gray-100
                        transition duration-300 
                            cursor-pointer
                            p-3 rounded-lg font-bold
                            uppercase">submit
                the post</button>

        </form>
    </div>
@endsection
