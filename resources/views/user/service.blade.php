        @extends('layouts.user.main')

        @section('title', 'Service - Fortu Digital Teknologi')

        @section('content')
            <!-- Hero Section -->
            <section class="relative hero-bg text-white">
                <div class="absolute inset-0 bg-purple-800 bg-opacity-80"></div>
                <div class="relative container mx-auto px-4 py-24 lg:py-32 flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 text-center md:text-left">
                        <h1 class="text-4xl lg:text-5xl font-bold mb-4">Sistem Manajemen Untuk Berbagai Perangkat</h1>
                        <p class="text-lg text-purple-200 max-w-lg">
                            Dashboard sentral untuk perangkat lunak dikelola oleh sistem manajemen konten yang dapat diakses
                            secara fleksibel kapan pun dan di mana saja melalui koneksi Internet.
                        </p>
                    </div>
                    <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">
                        <img src="https://placehold.co/450x300/FFFFFF/A78BFA?text=Grafik+Isometric" alt="Isometric Graphic"
                            class="w-full max-w-md opacity-80">
                    </div>
                </div>
            </section>

            <!-- After Sales Service Section -->
            <section class="py-16 lg:py-24">
                <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
                    <div class="grid grid-cols-2 gap-6 w-full md:w-1/3">
                        <div class="bg-purple-700 text-white p-6 rounded-lg text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="font-semibold">Maintenance</p>
                        </div>
                        <div class="bg-purple-700 text-white p-6 rounded-lg text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <p class="font-semibold">Integration</p>
                        </div>
                        <div class="bg-purple-700 text-white p-6 rounded-lg text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7.014A8.003 8.003 0 0112 3c2.39 0 4.56.942 6.181 2.486C20.5 7.5 21 10 21 12c0 2.02-.387 3.931-1.087 5.657zM12 12a3 3 0 100-6 3 3 0 000 6z">
                                </path>
                            </svg>
                            <p class="font-semibold">IoT Solution</p>
                        </div>
                        <div class="bg-purple-700 text-white p-6 rounded-lg text-center">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            <p class="font-semibold">Man Power</p>
                        </div>
                    </div>
                    <div class="w-full md:w-2/3">
                        <p class="text-purple-600 font-semibold">Our Focus</p>
                        <h2 class="text-3xl font-bold mb-4">After Sales Service</h2>
                        <p class="text-gray-600 leading-relaxed">
                            Fokus kami adalah kepuasan pelanggan dengan memberikan layanan purna jual yang cepat, responsif,
                            dan yang paling penting.
                        </p>
                        <p class="text-gray-600 leading-relaxed mt-2">
                            Dengan layanan purna jual, pengunjung seperti di Customer Service Center, kami siap membantu
                            Anda dengan solusi untuk mendukung berbagai kebutuhan Anda.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Quality Control Section -->
            <section class="py-16 lg:py-24 bg-white overflow-hidden">
                <div class="container mx-auto px-4">
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <!-- Left Side: Image with Text Overlay -->
                        <div class="md:w-1/2 relative text-white rounded-lg overflow-hidden">
                            <img src="https://placehold.co/600x450/3B0764/FFFFFF?text=Latar+Belakang"
                                alt="Quality Control Background" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-purple-900 bg-opacity-75 p-8 flex flex-col justify-center">
                                <h2 class="text-3xl font-bold">Quality Control</h2>
                                <p class="text-purple-300 font-semibold mb-4">Pemenuhan Persyaratan Kualitas</p>
                                <div class="space-y-3 text-sm text-purple-200 leading-relaxed">
                                    <p>
                                        Fortu berkomitmen untuk memastikan bahwa kualitas produk atau layanan yang
                                        diberikan telah memenuhi persyaratan & standar yang ditetapkan dengan ketat.
                                    </p>
                                    <p>
                                        Kami percaya hal tersebut merupakan sarana untuk membangun kepercayaan baik dengan
                                        pelanggan maupun mitra bisnis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Right Side: Isometric Illustration -->
                        <div class="md:w-1/2 flex justify-center">
                            <img src="https://placehold.co/500x400/FFFFFF/A78BFA?text=Ilustrasi+QC"
                                alt="Quality Control Illustration" class="w-full max-w-md">
                        </div>
                    </div>
                </div>
            </section>

            <!-- One Stop Solution Section -->
            <section class="py-16 lg:py-24">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold">One Stop Solution</h2>
                    <p class="text-gray-500 mb-12">Professional Interactive Digital Information Display</p>
                    <div class="relative flex justify-center items-center">
                        <img src="https://placehold.co/800x500/F3E8FF/A78BFA?text=Ilustrasi+Solusi"
                            alt="One Stop Solution Illustration" class="w-full max-w-4xl">
                        <div
                            class="absolute bottom-10 right-0 md:right-20 bg-purple-800 text-white p-8 rounded-lg max-w-sm text-left shadow-lg">
                            <h3 class="text-2xl font-bold mb-2">Commitment to Serve</h3>
                            <p class="text-purple-200 text-sm">
                                Untuk akan mendorong kami dengan memberikan solusi terbaik yang didukung dengan teknologi
                                dan dukungan pelanggan yang profesional.
                            </p>
                        </div>
                    </div>
                </div>
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