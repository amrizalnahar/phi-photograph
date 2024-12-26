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
                        class="text-4xl md:text-5xl lg:text-6xl text-primary-1 font-semibold">-Up
                    </span>
                </h3>
                <div class="h-[4px] w-5/12 bg-primary-1 block mt-2"></div>
            </div>

            <div class="mt-6 text-center grid justify-items-center">
                <!-- <img class="h-32 md:h-36 w-auto " src="dist/img/user-circle.svg" alt=""> -->
                <div class="grid grid-cols-1 mt-3 gap-2 border border-solid rounded-lg p-4">
                    <input
                        class="border-b-2 w-full py-2 px-3 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                        type="text" placeholder="Nama Lengkap">
                    <input
                        class="border-b-2 w-full py-2 px-3 focus:drop-shadow-md text-sm rounded focus:outline-none block"
                        type="email" placeholder="Alamat Email">
                    <input
                        class="border-b-2 w-full py-2 px-3 focus:drop-shadow-md text-sm rounded focus:outline-none block
                        type="password" placeholder="Password">
                    <input
                        class="border-b-2 w-full py-2 px-3 focus:drop-shadow-md text-sm rounded focus:outline-none block
                        type="password" placeholder="Ulangi Password">
                    <button
                        class="border w-[300px] py-2 px-3 text-white font-semibold tracking-widest hover:opacity-70 hover:drop-shadow-md bg-sky-600 text-sm">Register</button>
                    <p class="text-xs text-primary-1">Sudah punya akun? <a class="text-xs underline
                        " href="/login">Masuk</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

</body>

</html>
