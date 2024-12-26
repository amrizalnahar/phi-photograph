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
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ config('app.name') }} | {{ $title }}</title>
</head>

<body>
    <!-- Navbar Start -->
    @include('frontend.layouts.partials.navbar')
    <!-- Navbar End -->


    <!-- Hero section start -->
    <section class="mb-10 pt-24 md:pt-28 lg:pt-32 lg:mb-14">
          @yield('container')
    </section>
    <!-- Hero section end -->

    <!-- footer start -->
    @include('frontend.layouts.partials.footer')
    <!-- footer end -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
