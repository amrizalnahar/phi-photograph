
<nav class="fixed top-0 left-0 bg-transparent bg-opacity-70 backdrop-blur-lg w-full shadow z-[9999]">
    <div class="container m-auto flex justify-between items-center text-gray-700">
        <a href="/">
            <img class="pl-8 py-4 text-xl font-bold" src="../img/logo.png"></img>
        </a>

        <ul class="hidden lg:flex items-center text-base font-semibold cursor-pointer">
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "Home") ? 'nav-line' : '' }}"></span>
                    <a class="relative" href="/">Home</a>
                <span class="{{ ($title == "Home") ? 'nav-line' : '' }}"></span>
            </li>
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "Blog") ? 'nav-line' : '' }}"></span>
                    <a class="relative" href="/blogs">Blog</a>
                <span class="{{ ($title == "Blog") ? 'nav-line' : '' }}"></span>
            </li>
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "Portfolio") ? 'nav-line' : '' }}"></span>
                    <a class="relative" href="/portfolio">Portfolio</a>
                <span class="{{ ($title == "Portfolio") ? 'nav-line' : '' }}"></span>
            </li>
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "Pricelist") ? 'nav-line' : '' }}"></span>
                <a href="/pricelist">Pricelist</a>
                <span class="{{ ($title == "Pricelist") ? 'nav-line' : '' }}"></span>
            </li>
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "About Me") ? 'nav-line' : '' }}"></span>
                <a href="/about">About Me</a>
                <span class="{{ ($title == "About Me") ? 'nav-line' : '' }}"></span>
            </li>
            <li class="hover:opacity-70 py-4 px-6">
                <span class="{{ ($title == "Contact Us") ? 'nav-line' : '' }}"></span>
                <a href="/contact">Contact Us</a>
                <span class="{{ ($title == "Contact Us") ? 'nav-line' : '' }}"></span>
            </li>
        </ul>

        <!-- Tombol Sign In dan Sign Up Start-->
        <ul class="hidden lg:flex items-center text-base font-semibold cursor-pointer">
            <li class=" py-4 px-6 flex items-center gap-2">
                <a class="py-1 px-4 text-base tracking-wider hover:opacity-60" href="/login">Sign
                    In</a>
                <a href="/register">
                    <button
                        class="border-2 rounded-full py-1 px-4 border-primary-1 text-base bg-primary-1 hover:opacity-70 text-white hover:border-primary-1 tracking-wider">Sign
                        Up
                    </button>
                </a>
            </li>
        </ul>
        <!-- Tombol Sign In dan Sign Up End-->

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


