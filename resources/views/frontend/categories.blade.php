@extends('frontend.layouts.main')

@section('container')
<div class="container">
    <div>
        <h3 class="text-4xl md:text-5xl lg:text-6xl text-primary-1 text-center">Blog Category :<span
                class="text-4xl md:text-5xl lg:text-6xl text-primary-2 font-semibold">{{ $category }}
            </span>
        </h3>
        <div class="h-[3px] w-12/12 bg-primary-2 block "></div>
    </div>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-2 ">
        @foreach ($blogs as $blog)
        <div class="max-w-sm rounded overflow-hidden shadow-lg border border-solid p-4">
            <img class="w-full" src="https://source.unsplash.com/random/300×300/?pre-wedding" alt="Sunset in the mountains">
            <div class="px-6 py-4">
              <h1 class="font-bold text-xl mb-2 text-primary-1">{{ $blog->title }}</h1>
              <p class="text-gray-700 text-base">{{ $blog->excerpt }}</p>
              <div class="flex justify-end">
                  <button class="bg-primary-2 text-white hover:opacity-70 rounded-full py-2 px-6 font-bold tracking-wider mt-3">
                      <a href="/blogs/{{ $blog->slug }}">Selengkapnya</a>
                  </button>
              </div>
            </div>
            <div class="px-6 pt-4 pb-2">
                <a href="/category/{{ $blog->category->slug }}">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $blog->category->jenis_kategori }}</span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
