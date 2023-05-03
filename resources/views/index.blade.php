@extends('layouts.app')

@section('content')
    {{-- start main --}}
    <div class="image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">welcome to fitnes blog</h1>
        <a href="{{ route('blog.index') }}"
            class="no-underline  bg-gray-100 text-emerald-950 py-3 px-4 rounded-lg font-bold uppercase">start
            reading</a>
    </div>
    {{-- end main --}}
    {{-- start be expert --}}
    <div class="container sm:grid grid-cols-2 gap-3 mx-auto py-5">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/237/960/620" alt="">
        </div>
        <div class="flex flex-col items-left justify-content-center mt-5 sm:-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase ">how to be expert in 2023</h2>
            <p class="font-bold text-gray-600 text-xl pt-2 ">you can find many blogs about fitness here</p>
            <p class="py-4 text-gray-500 text-sm leading-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum
                repellendus deleniti nam asperiores nostrum inventore a ex nulla</p>

            <a href=""
                class="no-underline bg-gray-700 text-gray-100 py-3 px-4 rounded-lg font-bold uppercase place-self-start">read
                more</a>
        </div>
    </div>
    {{-- end be expert --}}
    {{-- start blog categories --}}
    <div class="text-center p-3 bg-gray-700 text-gray-100">
        <h2 class="">blog categories</h2>
        <div class="container mx-auto pt-5 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">ux design thinking</div>
            <div class="font-bold text-2xl py-2">ux design thinking</div>
            <div class="font-bold text-2xl py-2">ux design thinking</div>
            <div class="font-bold text-2xl py-2">ux design thinking</div>
        </div>
    </div>
    {{-- end blog categories --}}
    {{-- recent posts --}}
    <div class="conatiner mx-auto text-center py-4">
        <h2 class="font-bold text-5xl py-4">Recent posts</h2>
        <p class="text-gray-400 leading-6 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus
            voluptatum doloremque perspiciatis, optio reprehenderit libero nobis modi iure numquam rerum commodi pariatu</p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-5">
            <div class="block m-auto pt-2 pb-3 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 hover:bg-yellow-500 p-2  rounded inline-block my-1 md:my-0"><a href="/"
                            class="no-underline text-yellow-500 hover:text-yellow-100">php</a>
                    </li>
                    <li class="bg-yellow-100 hover:bg-yellow-500 p-2  rounded inline-block my-1 md:my-0"><a href="/"
                            class="no-underline text-yellow-500 hover:text-yellow-100">php</a>
                    </li>
                    <li class="bg-yellow-100 hover:bg-yellow-500 p-2 rounded inline-block my-1 md:my-0"><a href="/"
                            class="no-underline text-yellow-500 hover:text-yellow-100">php</a>
                    </li>
                    <li class="bg-yellow-100 hover:bg-yellow-500  p-2  rounded inline-block my-1 md:my-0"><a href="/"
                            class="no-underline text-yellow-500 hover:text-yellow-100">php</a>
                    </li>
                </ul>
                <h3 class="text-l py-5 lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit consectetur
                    reprehenderit voluptate a quis fuga in exercitationem possimus, veniam eaque, minus qui expedita
                    repellat molestias neque quam tenetur! Deserunt?
                </h3>
                <a href=""
                    class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">read
                    more</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/241/960/620" alt="">

        </div>
    </div>
    {{-- end posts --}}
@endsection
