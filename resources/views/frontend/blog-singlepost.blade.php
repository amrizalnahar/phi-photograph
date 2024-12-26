@extends('frontend.layouts.main')

@section('container')
<div class="container">
    <div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-primary-2 text-left">{{ $post->title }}</h1>
        <div class="h-[3px] w-12/12 bg-primary-2 block mt-2"></div>
        <p>Author: <span class="underline font-semibold">
            <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
        </span></p>
    </div>

    <div class="mt-6 text-left grid justify-items-center">
        {{-- Displaying Unescaped Data {!! $name !!} --}}
        <p class="text-sm md:text-base"> {!! $post->deskripsi !!}</p>
        <!-- <img class="h-48 md:h-56 w-auto " src="dist/img/logo-phi.png" alt="">  -->
    </div>
    <div class="px-6 pt-4 pb-2 flex justify-end gap-4">
        <a href="/category/{{ $post->category->slug }}">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm hover:opacity-70 font-semibold text-gray-700 mr-2 mb-2">{{ $post->category->jenis_kategori }}</span>
        </a>

    </div>
    <div class="mt-8 ">
        <button class="bg-slate-200 border border-solid text-black hover:opacity-70 rounded-lg  py-2 px-6 font-bold tracking-wider mt-3">
            <a href="/blogs">Kembali</a>
        </button>
    </div>

</div>


@endsection




