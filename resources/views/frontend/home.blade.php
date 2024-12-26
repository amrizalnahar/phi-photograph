@extends('frontend.layouts.main')

@section('container')
    <!-- Hero section start -->
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8  h-full w-full">
                <div class="lg:w-full w-full self-center">
                    <h3 class="text-3xl md:text-5xl lg:text-6xl text-primary-2">PHI <span class="text-primary-1 text-4xl md:text-5xl lg:text-6xl uppercase font-bold block font-mono
                        font-tt">Photograph</span> </h3>
                </div>
                <div
                    class="lg:w-full bg-gradient-to-tr from-neutral-700 to-neutral-300 h-96 lg:h-auto  w-full relative">
                    <img class="w-full h-full object-cover mix-blend-overlay relative" src="img/frame-1.png"
                        alt="">
                    <a class="bg-[#F2F2F2] inline-block absolute p-2 ml-4 top-1/2 left-0 hover:opacity-70 hover:shadow-md"
                        href="#">
                        <img src="img/arrow-left.svg" alt="">
                    </a>
                    <a class="bg-[#F2F2F2] inline-block absolute p-2 mr-4 top-1/2 right-0 hover:opacity-70 hover:shadow-md"
                        href="#">
                        <img src="img/arrow-right.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    <!-- Hero section end -->
@endsection
