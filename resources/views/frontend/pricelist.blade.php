@extends('frontend.layouts.main')

@section('container')
    <div class="container">
        <div>
            <h3 class="text-4xl md:text-5xl lg:text-6xl text-primary-2 text-center">Price<span
                    class="text-4xl md:text-5xl lg:text-6xl text-primary-1 font-semibold">list
                </span>
            </h3>
            <div class="h-[3px] w-12/12 bg-primary-2 block "></div>
        </div>

        <div class="flex flex-cols-1 sm:flex-cols-2 gap-2 sm:gap-6 mt-6 lg:justify-center">
            <!-- <div class="hidden sm:flex sm:w-10/12 lg:w-3/6 h-72 bg-cover"
                style="background-image: url('img/pricelist/1.png');">
            </div> -->
            <img class="hidden sm:flex sm:w-10/12 lg:w-3/6 h-72 bg-cover bg-center" src="img/pricelist/1.png"
                alt="">
            <div class=" bg-primary-3 p-4 sm:w-6/12 lg:w-3/12 sm:h-72">
                <img class="sm:hidden" src="img/pricelist/1.png" alt="">
                <div class="grid justify-items-center">
                    <h3 class="text-xl md:text-base lg:text-2xl  mt-3 font-semibold">Paket Wedding</h3>
                    <p class="text-sm md:text-xs lg:text-base my-4 text-center">Untuk mengabadikan momen bersejarah
                        antara 2 manusia yang memiliki ikatan, kami menyediakan paket Wedding untuk memberikan
                        kenangan yang begitu indah</p>
                    <a href="paket-wedding.html"> <button
                            class="bg-white px-6 py-2 flex md:text-xs md:px-4 md:py-2 md:gap-1 text-sm items-center gap-2 uppercase hover:opacity-70">
                            View More <img src="img/arrow-right.svg" alt=""> </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-cols-1 sm:flex-cols-2 gap-2 sm:gap-6 mt-6 lg:justify-center">
            <div class=" bg-primary-3 p-4 sm:w-6/12 lg:w-3/12 sm:h-72">
                <img class="sm:hidden" src="img/pricelist/2.png" alt="">
                <div class="grid justify-items-center">
                    <h3 class="text-xl md:text-base lg:text-2xl  mt-3 font-semibold">Paket Prewedding</h3>
                    <p class="text-sm md:text-xs lg:text-base my-4 text-center">Prewedding merupakan momen
                        mengabadikan sebelum
                        acara sakral
                        pernikahan diadakan yang memberikan kesan keromantisan masing-masing pasangan.</p>
                    <button
                        class="bg-white px-6 py-2 flex md:text-xs md:px-4 md:py-2 md:gap-1 text-sm items-center gap-2 uppercase hover:opacity-70">
                        View More <img src="img/arrow-right.svg" alt=""> </button>
                </div>
            </div>
            <!-- <div class="hidden sm:flex sm:w-10/12 lg:w-3/6 h-72 bg-cover"
                style="background-image: url('img/pricelist/2.png');">
            </div> -->
            <img class="hidden sm:flex sm:w-10/12 lg:w-3/6 h-72 bg-cover bg-center" src="img/pricelist/2.png"
                alt="">
        </div>
        <div class="flex flex-cols-1 sm:flex-cols-2 gap-2 sm:gap-6 mt-6 lg:justify-center">
            <!-- <div class="hidden sm:flex sm:w-10/12 lg:w-3/6 h-72 bg-cover bg-center"
                style="background-image: url('img/pricelist/3.png');">
            </div> -->
            <img class="hidden sm:flex sm:w-10/12 lg:w-3/6 h-72 bg-cover bg-center" src="img/pricelist/3.png"
                alt="">
            <div class=" bg-primary-3 p-4 sm:w-6/12 lg:w-3/12 sm:h-72">
                <img class="sm:hidden" src="img/pricelist/3.png" alt="">
                <div class="grid justify-items-center">
                    <h3 class="text-xl md:text-xl lg:text-2xl mt-3 font-semibold">Paket Photoshot</h3>
                    <p class="text-sm md:text-xs lg:text-base my-4 text-center">Untuk mengabadikan momen tertentu
                        kepada anda, kami menyediakan paket photoshot untuk memberikan kenangan yang begitu indah.
                    </p>
                    <button
                        class="bg-white px-6 py-2 flex text-sm md:text-xs md:px-4 md:py-2 md:gap-1 items-center gap-2 uppercase hover:opacity-70">
                        View More <img src="img/arrow-right.svg" alt=""> </button>
                </div>
            </div>
        </div>
    </div>
@endsection
