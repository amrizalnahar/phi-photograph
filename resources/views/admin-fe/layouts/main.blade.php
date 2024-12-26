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
    <!-- CDN FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="img/icon-phi.png">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ config('app.name') }} | {{ $title }}</title>
</head>

<body>
    <!-- Navbar Start -->
    @include('admin-fe.layouts.partials.navbar')
    <!-- Navbar End -->


    <!-- Hero section start -->
    <section class="mb-10 pt-20 md:pt-20 lg:pt-20 lg:mb-20">
          @yield('container-admin-fe')
    </section>
    <!-- Hero section end -->

    <!-- footer start -->
    @include('admin-fe.layouts.partials.footer')
    <!-- footer end -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
