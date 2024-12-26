@extends('frontend.layouts.main')

@section('container')
<div class="container">
    <div>
        <h3 class="text-4xl md:text-5xl lg:text-6xl text-primary-2 text-center">Port<span
                class="text-4xl md:text-5xl lg:text-6xl text-primary-1 font-semibold">folio
            </span>
        </h3>
        <div class="h-[3px] w-12/12 bg-primary-2 block "></div>
    </div>

    <div class="mt-6 flex flex-wrap flex-col-4 justify-center gap-2">
        <button
            class="bg-primary-2 rounded-full text-white px-3 py-1 tracking-wide uppercase text-sm md:text-base hover:opacity-70 border">All</button>
        <button
            class="text-primary-2 px-3 py-1 tracking-wide uppercase text-sm md:text-base hover:bg-primary-2 hover:text-white hover:rounded-full">Wedding</button>
        <button
            class="text-primary-2 px-3 py-1 tracking-wide uppercase text-sm md:text-base hover:bg-primary-2 hover:text-white hover:rounded-full">PreWedding</button>
        <button
            class="text-primary-2 px-3 py-1 tracking-wide uppercase text-sm md:text-base hover:bg-primary-2 hover:text-white hover:rounded-full">Photoshot</button>
        <button
            class="text-primary-2 px-3 py-1 tracking-wide uppercase text-sm md:text-base hover:bg-primary-2 hover:text-white hover:rounded-full">Family</button>
        <button
            class="text-primary-2 px-3 py-1 tracking-wide uppercase text-sm md:text-base hover:bg-primary-2 hover:text-white hover:rounded-full">Couple</button>
        <button
            class="text-primary-2 px-3 py-1 tracking-wide uppercase text-sm md:text-base hover:bg-primary-2 hover:text-white hover:rounded-full">Event</button>
    </div>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-2 ">
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer">
            <!-- <div class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                style="background-image: url('img/porfolio/1.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/1.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/2.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/2.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/3.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/3.jpg" alt="">
        </div>
        <div
            class="h-15 aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[3/4]  overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer lg:row-span-2">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/4.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/4.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/5.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/5.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[3/4]  overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer lg:row-span-2">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/7.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/7.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[4/3] overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/6.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/6.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[3/4]  overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer lg:row-span-2">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/8.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/8.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[3/4]  overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer lg:row-span-2">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"  style="background-image: url('img/porfolio/9.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/9.jpg" alt="">
        </div>
        <div
            class="h-15  aspect-[4/3] rounded-lg md:aspect-[3/4] xl:aspect-[3/4] overflow-hidden group relative hover:scale-95 transition-all duration-500 cursor-pointer lg:row-span-2">
            <!-- <div
                class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500" style="background-image: url('img/porfolio/10.jpg');">
            </div> -->
            <img class="w-full h-full bg-cover bg-center absolute group-hover:scale-125 group-hover:rotate-12 transition-all duration-500"
                src="img/porfolio/10.jpg" alt="">
        </div>

        <!--
            <img src="img/porfolio/1.jpg" alt="1">
        <img src="img/porfolio/2.jpg" alt="2">
        <img src="img/porfolio/3.jpg" alt="3">
        <img class="md:row-span-2" src="img/porfolio/4.jpg" alt="4">
        <img src="img/porfolio/5.jpg" alt="5">
        <img class="md:row-span-2" src="img/porfolio/7.jpg" alt="6">
        <img src="img/porfolio/6.jpg" alt="7">
        <img  class="md:row-span-2" src="img/porfolio/8.jpg" alt="8">
        <img  class="md:row-span-2" src="img/porfolio/9.jpg" alt="9">
        <img  class="md:row-span-2" src="img/porfolio/10.jpg" alt="10">  -->

        <!-- <div class="h-80 w-full bg-primary-2  rounded-lg text-center">1</div>
        <div class="h-80 w-full bg-primary-2 rounded-lg text-center ">2</div>
        <div class="h-80 w-full bg-primary-2 rounded-lg text-center ">3</div>
        <div class="h-96 w-full bg-primary-2 rounded-lg text-center row-span-2">4</div>
        <div class="h-80 w-full bg-primary-2 rounded-lg text-center ">5</div>
        <div class="h-96 w-full bg-primary-2 rounded-lg text-center row-span-2">6</div>
        <div class="h-80 w-full bg-primary-2 rounded-lg text-center ">7</div>
        <div class="h-80 w-full bg-primary-2 rounded-lg text-center ">8</div>
        <div class="h-80 w-full bg-primary-2 rounded-lg text-center ">9</div>
        <div class="h-80 w-full bg-primary-2 rounded-lg text-center ">10</div> -->
    </div>
</div>


@endsection
