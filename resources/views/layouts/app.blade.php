<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Asets, properti, investasi, pengelolaan properti, solusi properti, Indonesia" />
    <title>Asets - @yield('title')</title>
    {{-- FONTS CDN --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.6/dist/cdn.min.js"></script>
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-057LB4FWDX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-057LB4FWDX');
    </script>
</head>

<body class="poppins-regular">
    <main>
        <div>
            @if (!isset($hideNavbar) || !$hideNavbar)
                <header>
                    <x-navbar />
                </header>
            @endif
            @yield('content')
            <x-footer />
        </div>
    </main>
    @if (session('successLogin'))
        <script>
            Swal.fire({
                imageUrl: '/assets/img/logo-asets.png',
                imageWidth: 180,
                imageAlt: 'Logo asets',
                title: 'Welcome to asets',
                text: 'Start exploring the best features we have crafted to support your digital needs.',
                showCloseButton: true,
                showConfirmButton: false,
                timer: 6000,
            });
        </script>
    @endif
    @if (session('successLogout'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Logout success',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 3000,
            });
        </script>
    @endif
    @stack('scripts')
</body>

</html>
