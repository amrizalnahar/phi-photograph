@extends('frontend.layouts.main')

@section('container')
    <div class="container">
        <div>
            <h3 class="text-4xl md:text-5xl lg:text-6xl text-primary-2 text-center">Hubungi<span
                    class="text-4xl md:text-5xl lg:text-6xl text-primary-1 font-semibold">Kami ya
                </span>
            </h3>
            <div class="h-[3px] w-12/12 bg-primary-2 block mt-2"></div>
        </div>

        <p class="text-base md:text-xl text-primary-1 text-center my-3">Silahkan untuk meninggalkan pesan kepada
            kami melalui form atau link sosial media di bawah ini:</p>

        <div class="flex flex-wrap mt-6 justify-between">

            <div class="grid grid-cols-1 lg:w-1/2 w-full gap-3 text-primary-2">
                <div class="w-full  flex">
                    <label class="w-4/12 py-2 px-3 font-semo after:content-['*']" for="Nama">Input Nama</label>
                    <input class="w-8/12 py-2 px-3 text-sm border focus:outline-none focus:ring-1" type="text">
                </div>
                <div class="w-full  flex">
                    <label class="w-4/12 py-2 px-3 after:content-['*']" for="email">Input Email</label>
                    <input class="w-8/12 py-2 px-3 text-sm border focus:outline-none focus:ring-1" type="email">
                </div>
                <div class="w-full  flex">
                    <label class="w-4/12 py-2 px-3" for="url">Input Website URL</label>
                    <input class="w-8/12 py-2 px-3 text-sm border focus:outline-none focus:ring-1" type="url">
                </div>
                <div class="w-full  flex">
                    <label class="w-4/12 py-2 px-3 after:content-['*']" for="message">Tulis Pesan Kamu</label>
                    <textarea class="w-8/12 py-2 px-3 text-sm border focus:outline-none focus:ring-1" name="message"
                        id="message"></textarea>
                </div>
                <div class="w-full flex justify-center">
                    <button
                        class="py-2 px-4 text-base bg-primary-2 rounded-lg text-white hover:opacity-70 hover:shadow-lg">Kirim Sekarang</button>
                </div>
            </div>
            <div class="flex lg:w-1/2 w-full mt-3 md:mt-0">

                <div class="w-3/12 h-52 flex-row py-3 ">
                    <!-- <img class="h-1/4 w-full" src="dist/img/facebook-black.svg" alt=""> -->
                    <a href="#facebook" target="_blank"> <svg class="h-1/4 w-full fill-primary-2"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.0" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"
                            class="icon icons8-Facebook-Filled">
                            <path
                                d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z">
                            </path>
                        </svg></a>

                    <!-- <img class="h-1/4 w-full my-4" src="dist/img/twitter-black.svg" alt=""> -->
                    <a href="#twitter" target="_blank"><svg class="h-1/4 w-full my-4 fill-primary-2"
                            viewBox="328 355 335 276" xmlns="http://www.w3.org/2000/svg">
                            <path d="
                        M 630, 425
                        A 195, 195 0 0 1 331, 600
                        A 142, 142 0 0 0 428, 570
                        A  70,  70 0 0 1 370, 523
                        A  70,  70 0 0 0 401, 521
                        A  70,  70 0 0 1 344, 455
                        A  70,  70 0 0 0 372, 460
                        A  70,  70 0 0 1 354, 370
                        A 195, 195 0 0 0 495, 442
                        A  67,  67 0 0 1 611, 380
                        A 117, 117 0 0 0 654, 363
                        A  65,  65 0 0 1 623, 401
                        A 117, 117 0 0 0 662, 390
                        A  65,  65 0 0 1 630, 425
                        Z" />
                        </svg></a>

                    <!-- <img class="h-1/4 w-full" src="dist/img/instagram-black.svg" alt=""> -->
                    <a href="#instagram" target="_blank"><svg class="h-1/4 w-full fill-primary-2"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a>

                </div>

                <div class="w-9/12 h-52 py-3 px-5 ">
                    <div class="place-content-center text-primary-1">
                        <h3 class="text-xl font-semibold pt-4 uppercase">Phi Photograph</h3>
                        <h3 class="pt-6">Jl. Sukadamai No. 154 424566</h3>
                        <h3 class="">Nganjuk, Jawa Timur</h3>
                        <h3 class="">phiphotograph@gmail.com</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
