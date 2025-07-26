{{-- Menggunakan layout utama --}}
@extends('layouts.user.main')

{{-- Mengatur judul spesifik untuk halaman ini --}}
@section('title', 'Beranda - Fortu Digital')

@push('cssOnPage')
    <style>
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
@endpush
{{-- Mendefinisikan konten untuk bagian 'content' di layout utama --}}
@section('content')

    <section class="h-[60vh] md:h-[90vh] bg-gray-200">
        <img src="{{ $hero ? asset('storage/' . $hero->image_1) : 'https://placehold.co/1200x600/C7C7C7/080808?text=Hero+Image' }}"
            alt="Main Hero" class="w-full h-full object-cover">
    </section>

    <section class="py-16 lg:py-24 px-4">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-8">
                <div class="flex items-center mr-3">
                    <div class="w-5 h-5 rounded-full bg-gray-400"></div>
                    <div class="w-5 h-5 rounded-full bg-gray-500 -ml-2"></div>
                    <div class="w-5 h-5 rounded-full bg-gray-600 -ml-2"></div>
                </div>
                <h2 class="text-2xl font-bold">Interactive Display Canggih Buatan Anak Bangsa</h2>
            </div>

            <div id="interactive-carousel" class="carousel-container">
                <div class="carousel-slide active">
                    <div class="relative">
                        <img src="https://placehold.co/1200x600/C7C7C7/4C1D95?text=Fortu+Video+Wall" alt="Fortu Video Wall"
                            class="w-full rounded-lg">
                        <div class="absolute top-8 left-8 bg-black bg-opacity-50 text-white p-6 rounded-lg max-w-xs">
                            <h3 class="text-2xl font-bold">Fortu Video Wall</h3>
                            <a href="#" class="inline-block mt-4 font-semibold text-gray-300 hover:text-white">Read
                                More &gt;</a>
                        </div>

                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="relative">
                        <img src="https://placehold.co/1200x600/C4B5FD/5B21B6?text=Smart+Board" alt="Smart Board"
                            class="w-full rounded-lg">
                        <div class="absolute top-8 left-8 bg-black bg-opacity-50 text-white p-6 rounded-lg max-w-xs">
                            <h3 class="text-2xl font-bold">Smart Board</h3>
                            <a href="#" class="inline-block mt-4 font-semibold text-purple-300 hover:text-white">Read
                                More &gt;</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="relative">
                        <img src="https://placehold.co/1200x600/A5B4FC/6D28D9?text=Digital+Signage" alt="Digital Signage"
                            class="w-full rounded-lg">
                        <div class="absolute top-8 left-8 bg-black bg-opacity-50 text-white p-6 rounded-lg max-w-xs">
                            <h3 class="text-2xl font-bold">Digital Signage</h3>
                            <a href="#" class="inline-block mt-4 font-semibold text-purple-300 hover:text-white">Read
                                More &gt;</a>
                        </div>
                    </div>
                </div>

                <button
                    class="carousel-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="carousel-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-gray-700 text-white py-16 px-4">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="md:w-1/2 flex items-start gap-4">
                <div class="bg-white p-2 rounded-md">
                    <svg class="w-8 h-8 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold">TKDN</h2>
                    <p class="text-gray-300">Tingkat Komponen Dalam Negeri</p>
                    <p class="mt-4 text-sm max-w-md">
                        PT. Fortu Digital Teknologi adalah perusahaan yang sudah besertifikasi TKDN >40% untuk
                        produk-produknya. Kami yakin dengan tingkat komponen dalam negeri yang ada pada produk kami
                        menjadikan produk kami dapat bersaing dengan produk lokal maupun global.
                    </p>
                </div>
            </div>
            <div class="md:w-1/2 flex flex-col items-center md:items-end">
                <p class="text-7xl font-bold text-white">>40%</p>
                <a href="#"
                    class="mt-4 inline-block px-6 py-2 border border-white text-white font-semibold rounded-full hover:bg-white hover:text-gray-600 transition-colors">
                    Visit P3DN Kemenperin
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 px-4">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 text-center">
                <div class="bg-gradient-to-t from-gray-300 to-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-500 text-sm">Found & Started</p>
                    <p class="text-5xl font-bold text-gray-800 my-2">2017</p>
                    <img src="https://placehold.co/80x80/E9D5FF/3B0764?text=Robot" alt="Robot icon" class="mx-auto">
                </div>
                <div class="bg-gradient-to-t from-gray-300 to-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-500 text-sm">Products Hardware & Software</p>
                    <p class="text-5xl font-bold text-gray-800 my-2">30</p>
                    <img src="https://placehold.co/120x80/E9D5FF/3B0764?text=Produk" alt="Products icon" class="mx-auto">
                </div>
                <div class="bg-gradient-to-t from-gray-300 to-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-500 text-sm">Vertical Market Solution</p>
                    <p class="text-5xl font-bold text-gray-800 my-2">+10</p>
                    <img src="https://placehold.co/80x80/E9D5FF/3B0764?text=Toko" alt="Market icon" class="mx-auto">
                </div>
                <div class="bg-gradient-to-t from-gray-300 to-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-500 text-sm">Clients From Any Sector</p>
                    <p class="text-5xl font-bold text-gray-800 my-2">+300</p>
                    <img src="https://placehold.co/80x80/E9D5FF/3B0764?text=Klien" alt="Clients icon" class="mx-auto">
                </div>
                <div class="bg-gradient-to-t from-gray-300 to-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-500 text-sm">Solds & Used in any Business Sector</p>
                    <p class="text-5xl font-bold text-gray-800 my-2">+1000</p>
                    <img src="https://placehold.co/80x80/E9D5FF/3B0764?text=Terjual" alt="Solds icon" class="mx-auto">
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('{{ asset('storage/background/bg_1_1.png') }}')" class="py-16 lg:py-24 bg-no-repeat bg-cover bg-center px-4">
            <div class="container mx-auto px-4">
            <div class="flex items-center mb-8">
                <div class="flex items-center mr-3">
                    <div class="w-5 h-5 rounded-full bg-gray-400"></div>
                    <div class="w-5 h-5 rounded-full bg-gray-500 -ml-2"></div>
                    <div class="w-5 h-5 rounded-full bg-gray-600 -ml-2"></div>
                </div>
                <h2 class="text-2xl font-bold">Client Experience</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                @foreach ($clientExperience as $item)
                    <div class="relative bg-white rounded-2xl shadow-lg overflow-hidden">

                        <div class="py-4 flex justify-center">
                            <img src="{{ asset('storage/' . $item->logo) }}" alt="Logo Klien" class="h-10 w-auto">
                        </div>

                        <div class="h-56 w-full">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="p-6 text-center">
                            <p class="font-bold text-xl">{{ $item->title }}</p>
                            <p class="text-sm text-gray-500 mt-1">{{ $item->description }}</p>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-black text-white font-bold py-3 px-8 rounded-full hover:bg-gray-800 transition-colors duration-300">
                    See More
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-24 px-4">
        <div class="container mx-auto px-4">
            <div class="flex items-center mb-8">
                <div class="flex items-center mr-3">
                    <div class="w-5 h-5 rounded-full bg-gray-400"></div>
                    <div class="w-5 h-5 rounded-full bg-gray-500 -ml-2"></div>
                    <div class="w-5 h-5 rounded-full bg-gray-600 -ml-2"></div>
                </div>
                <h2 class="text-2xl font-bold">Smart Device for Smart Collaboration</h2>
            </div>
            <div class="relative rounded-lg overflow-hidden shadow-2xl">
                <img src="https://placehold.co/1200x600/374151/FFFFFF?text=Video+Thumbnail" alt="Video Thumbnail"
                    class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                    <button
                        class="w-20 h-20 bg-white bg-opacity-30 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/50 hover:bg-opacity-50 transition-all">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white text-lg font-semibold">
                    Fortu Presentation Board
                </div>
            </div>
        </div>
    </section>

@endsection

@push('jsOnPage')
    <script>
        console.log('ad')
        const carousel = document.getElementById('interactive-carousel');
        if (carousel) {
            const slides = carousel.querySelectorAll('.carousel-slide');
            const prevButton = carousel.querySelector('.carousel-prev');
            const nextButton = carousel.querySelector('.carousel-next');
            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });
            }

            if (prevButton && nextButton) {
                prevButton.addEventListener('click', () => {
                    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
                    showSlide(currentIndex);
                });

                nextButton.addEventListener('click', () => {
                    currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
                    showSlide(currentIndex);
                });
            }
        }
    </script>
@endpush
