@extends('admin-fe.layouts.main')

@section('container-admin-fe')
    <!-- Hero section start -->
        <div class="container">
            <div class="mb-6">
                <h1 class="text-xl md:text-2xl lg:text-4xl text-primary-2 text-left">View Package</h1>
                <div class="h-[3px] w-full bg-primary-2 block mt-2"></div>
                <!-- Breadcrumb -->
                <nav class="mt-2" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li>
                            <a href="/admin-fe/dashboard" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mx-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <a href="/admin-fe/package" class="text-sm font-medium text-gray-500 hover:text-gray-700">Package</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mx-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500">View</p>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="flex flex-cols-1 sm:flex-cols-2 gap-2 sm:gap-6 mt-6 lg:justify-center">
                <img class="hidden sm:flex sm:w-10/12 lg:w-3/6 h-72 bg-cover bg-center" src="/img/pricelist/1.png"
                    alt="">
            </div>

            <div class="my-6 text-left grid justify-items-center">
                <p class="text-sm md:text-base">Phi Photograph merupakan salah satu jasa foto freelancer yang aktif di
                    Kota Nganjuk, Jawa Timur. Tim yang beranggotakan 4 orang yang masing-masing memiliki pengalaman
                    dalam bidang fotografi dan muldiayang dimiliki. Phi Photograph menyediakan berbagai paket foto yang
                    menarik sehingga banyak anak muda dan orang tua merasa puas dengan hasil yang diberikan. Saat ini
                    Phi Photograph sedang mengupgrade teknologi yang dimilikinya salah satunya website yang menyediakan
                    layanan pemesanan sehingga memudahkan Phi Photograph berkomunikasi dengan pelanggan setia mereka.
                </p>
            </div>


            <div class="flex flex-cols-1 sm:flex-cols-2 gap-2 sm:gap-6 mt-6 lg:justify-center">
                <div class=" bg-primary-3 p-4 sm:w-6/12 lg:w-3/12 sm:h-72">
                    <div class="grid justify-items-center">
                        <h3 class="text-xl md:text-base lg:text-2xl  mt-3 font-semibold">Paket Wedding 1</h3>
                        <h3 class="text-xs md:text-base lg:text-xl  mt-3 font-semibold">Rp.1.500.000</h3>
                        <p class="text-sm md:text-xs lg:text-base my-4 text-center">Untuk mengabadikan momen bersejarah
                            antara 2 manusia yang memiliki ikatan, kami menyediakan paket Wedding untuk memberikan
                            kenangan yang begitu indah
                        </p>
                    </div>
                </div>
                <div class=" bg-primary-3 p-4 sm:w-6/12 lg:w-3/12 sm:h-72">
                    <div class="grid justify-items-center">
                        <h3 class="text-xl md:text-base lg:text-2xl  mt-3 font-semibold">Paket Wedding 2</h3>
                        <h3 class="text-xs md:text-base lg:text-xl  mt-3 font-semibold">Rp.1.500.000</h3>
                        <p class="text-sm md:text-xs lg:text-base my-4 text-center">Untuk mengabadikan momen bersejarah
                            antara 2 manusia yang memiliki ikatan, kami menyediakan paket Wedding untuk memberikan
                            kenangan yang begitu indah
                        </p>
                    </div>
                </div>
                <div class=" bg-primary-3 p-4 sm:w-6/12 lg:w-3/12 sm:h-72">
                    <div class="grid justify-items-center">
                        <h3 class="text-xl md:text-base lg:text-2xl  mt-3 font-semibold">Paket Wedding 3</h3>
                        <h3 class="text-xs md:text-base lg:text-xl  mt-3 font-semibold">Rp.1.500.000</h3>
                        <p class="text-sm md:text-xs lg:text-base my-4 text-center">Untuk mengabadikan momen bersejarah
                            antara 2 manusia yang memiliki ikatan, kami menyediakan paket Wedding untuk memberikan
                            kenangan yang begitu indah
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <!-- Hero section end -->
@endsection
