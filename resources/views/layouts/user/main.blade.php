<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Judul halaman bisa dinamis --}}
    <title>@yield('title', 'Sentuh - Solusi Digital Interaktif')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .carousel-container {
            position: relative;
        }
        .carousel-slide {
            display: none;
        }
        .carousel-slide.active {
            display: block;
        }
    </style>
    @stack('cssOnPage')
</head>
<body class="bg-white text-gray-800">

    {{-- Memanggil Header --}}
    @include('layouts.user.header')

    <main>
        {{-- Area konten utama yang akan diisi oleh halaman lain --}}
        @yield('content')
    </main>

    {{-- Memanggil Footer --}}
    @include('layouts.user.footer')

    
    {{-- JavaScript Global --}}

    
    <script>
        // JavaScript untuk menu mobile
        document.addEventListener("DOMContentLoaded", () => {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });

        // JavaScript untuk Carousel (hanya akan berjalan jika elemennya ada)
    </script>

    @stack('jsOnPage')
</body>
</html>