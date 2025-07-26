        @extends('layouts.user.main')

        @section('title', 'Service - Fortu Digital Teknologi')

        @section('content')
            <!-- Hero Section -->
            <style>
                .hero-bg {
                    background-image: url('{{ $hero ? asset('storage/' . $hero->image_1) : 'https://placehold.co/1200x600/C7C7C7/080808?text=Hero' }}');
                    background-size: cover;
                    background-position: center;
                }
            </style>
            <section class="relative hero-bg text-white">
                <div class="absolute inset-0 bg-gray-800 bg-opacity-80"></div>
                <div class="relative container mx-auto px-4 py-24 lg:py-32 flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 text-center md:text-left">
                        <h1 class="text-4xl lg:text-5xl font-bold mb-4">{{ $hero ? $hero->title : '' }}</h1>
                        <p class="text-lg text-white max-w-lg">
                            {!! $hero ? $hero->text : '' !!}
                        </p>
                    </div>
                    <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">
                        <img src="{{ $hero ? asset('storage/' . $hero->image_2) : 'https://placehold.co/450x300/C7C7C7/080808?text=Grafik+Isometric' }}"
                            alt="Isometric Graphic" class="w-full max-w-md opacity-80">
                    </div>
                </div>
            </section>

            <!-- After Sales Service Section -->
            <section class="py-16 lg:py-24">
                @foreach ($services as $item)
                    {{-- Container utama dengan logika pengecekan ganjil/genap --}}
                    {{-- Kelas 'md:flex-row-reverse' akan ditambahkan hanya pada urutan genap --}}
                    <div
                        class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12 py-16 {{ $loop->even ? 'md:flex-row-reverse' : '' }}">

                        {{-- Kontainer Gambar --}}
                        <div class="w-48 h-48 flex-shrink-0">
                            <img src="{{ asset('storage/' . $item->image_2) }}" alt="Fokus layanan purna jual perusahaan"
                                class="w-full h-full">
                        </div>

                        {{-- Kontainer Teks --}}
                        <div class="max-w-2xl">
                            <p class="text-gray-800 font-semibold">{{ $item->title }}</p>
                            <h2 class="text-3xl font-bold mb-4">{{ $item->subtitle }}</h2>
                            <p class="text-gray-600 leading-relaxed">
                                {{ $item->description }}
                            </p>
                        </div>

                    </div>
                @endforeach
            </section>



            <!-- Valuable Solution Section -->
            <section class="bg-gray-50 py-16 lg:py-24">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold">Our Valuable Solution</h2>
                    <p class="text-gray-500 mb-12">Solusi Berbagai Cara</p>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6 max-w-5xl mx-auto">
                        <!-- Icon Box Template -->
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Konsultasi</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 6V3m0 18v-3M5.636 5.636l-1.414-1.414M19.778 19.778l-1.414-1.414M18.364 5.636l-1.414 1.414M4.222 19.778l1.414-1.414M12 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Hardware & Software Solution</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h5V4H4zm0 9h5v5H4v-5zm9-9h5v5h-5V4zm0 9h5v5h-5v-5z"></path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Instalasi & Konfigurasi</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Digital Signage Solution</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Quality Check</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l2 2h8a1 1 0 001-1z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 17h.01">
                                </path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Pengiriman Tepat Waktu</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Garansi Terjamin</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Pelatihan Produk</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">Pusat Bantuan</p>
                        </div>
                        <div class="bg-purple-100 p-6 rounded-lg">
                            <svg class="w-12 h-12 mx-auto mb-3 text-purple-700" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                            </svg>
                            <p class="font-semibold text-sm text-purple-900">After Sales Service</p>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
        <!-- End of content section -->
