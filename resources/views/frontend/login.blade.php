<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon-phi.png">
    <link rel="stylesheet" href="output.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Dev Phi Photograph | {{ $title }}</title>
</head>

<body>
    <!-- Hero section start -->
    <section class="mb-10 pt-24 md:pt-28 lg:pt-32 lg:mb-14">
        <div class="container">
            <div class="grid justify-center">
                <h3 class="text-4xl md:text-5xl lg:text-6xl text-primary-2 text-center">Sign<span
                        class="text-4xl md:text-5xl lg:text-6xl text-primary-1 font-semibold">-in
                    </span>
                </h3>
                <div class="h-[4px] w-5/12 bg-primary-1 block mt-2 "></div>
            </div>

            <div class="mt-6 text-center grid justify-items-center ">
                <img class="h-32 md:h-36 w-auto " src="img/user-circle.svg" alt="">
                <div class="grid grid-cols-1 mt-3 gap-2  border border-solid rounded-lg p-4">
                    <input
                        class="border w-[300px] py-2 px-3 bg-slate-100 text-sm focus:outline-none focus:ring-1 focus:ring-primary-2"
                        type="text" placeholder="Masukkan username atau email...">
                    <input
                        class="border w-[300px] py-2 px-3 bg-slate-100 text-sm focus:outline-none focus:ring-1 focus:ring-primary-2"
                        type="password" placeholder="Masukkan password">
                    <a href="user.html"> <button
                            class="border w-[300px] py-2 px-3 text-white font-semibold tracking-widest hover:opacity-70 hover:drop-shadow-md bg-green-600 text-sm">Login</button>
                    </a>
                    <p class="text-xs text-primary-1">Belum punya akun? <a class="text-xs underline
                        " href="/register">Register</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

</body>

</html>
