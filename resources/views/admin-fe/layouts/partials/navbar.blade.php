
<nav class="fixed top-0 left-0 bg-transparent bg-opacity-70 backdrop-blur-lg w-full shadow z-[9999]">
    <div class="container m-auto flex justify-between items-center text-gray-700">
        <a href="/">
            <img class="pl-8 py-4 text-xl font-bold" src="/img/logo.png"></img>
        </a>

        <ul class="hidden lg:flex items-center text-base font-semibold cursor-pointer">
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "dashboard") ? 'nav-line' : '' }}"></span>
                    <a class="relative" href="/admin-fe/dashboard">Dashboard</a>
                <span class="{{ ($title == "dashboard") ? 'nav-line' : '' }}"></span>
            </li>
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "package") ? 'nav-line' : '' }}"></span>
                    <a class="relative" href="/admin-fe/package">Package</a>
                <span class="{{ ($title == "package") ? 'nav-line' : '' }}"></span>
            </li>
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "order") ? 'nav-line' : '' }}"></span>
                    <a class="relative" href="/admin-fe/order">Order</a>
                <span class="{{ ($title == "order") ? 'nav-line' : '' }}"></span>
            </li>
        </ul>

        <!-- Tombol Sign out -->
        <ul class="hidden lg:flex items-center text-base font-semibold cursor-pointer">
            <li class="py-4 px-6 flex items-center gap-2">
                <a class="py-1 px-4 text-base tracking-wider hover:opacity-60" href="/login">
                    <!-- Ikon Sign Out -->
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
        <!-- Tombol Sign out -->


        <!-- Hamburger Menu Start -->
        <button class="block lg:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-gray-200 group">
            <div class="w-5 h-1 bg-gray-600 mb-1"></div>
            <div class="w-5 h-1 bg-gray-600 mb-1"></div>
            <div class="w-5 h-1 bg-gray-600 "></div>

            <div
                class="absolute top-0 -right-full h-screen w-7/12 md:w-4/12 bg-white border opacity-0 group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                <ul class="flex flex-col items-center w-full text-base cursor-pointer pt-16">
                    <li class="hover:bg-primary-2 hover:text-white py-4 px-6 w-full"> <a
                            href="/">Beranda</a>
                    </li>
                    <li class="hover:bg-primary-2 hover:text-white py-4 px-6 w-full"> <a
                        href="/blogs">Blog</a> </li>
                    <li class="hover:bg-primary-2 hover:text-white py-4 px-6 w-full"> <a
                            href="/portofolio">Portofolio</a> </li>
                    <li class="hover:bg-primary-2 hover:text-white py-4 px-6 w-full"> <a
                            href="/pricelist">Pricelist</a> </li>
                    <li class="hover:bg-primary-2 hover:text-white py-4 px-6 w-full"> <a href="/about">About</a>
                    </li>
                    <li class="hover:bg-primary-2 hover:text-white py-4 px-6 w-full"> <a
                            href="/hubungi-kami">Hubungi Kami</a></li>
                    <!-- Tombol Sign In dan Sign Up Start-->
                    <li>
                        <div
                            class="hover:bg-primary-2 hover:text-white hover:border-primary-2 border-2 rounded-full py-2 px-6 font-bold tracking-wider">
                            <a href="/login">Sign In</a>
                        </div>
                        <div
                            class="bg-primary-2 text-white hover:opacity-70 rounded-full py-2 px-6 font-bold tracking-wider mt-3">
                            <a href="/register">Sign Up</a>
                        </div>
                    </li>
                    <!-- Tombol Sign In dan Sign Up End-->
                </ul>
            </div>
        </button>
        <!-- Hamburger Menu End -->
    </div>
</nav>


