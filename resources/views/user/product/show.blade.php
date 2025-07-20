@extends('layouts.user.main')
@section('title', 'Product - Sentuh Digital Teknologi')
@section('content')
    <!-- Hero Section - Digital Signage -->
    <section class="hero-gradient py-16 lg:py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-5/12">
                <h1 class="text-5xl font-bold mb-4" style="font-family: cursive; color: #333;">Digital Signage</h1>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Solusi komunikasi visual yang menggunakan layar elektronik untuk menampilkan informasi, iklan, video,
                    gambar, atau konten multimedia yang dinamis.
                </p>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Dilengkapi dengan CMS (Content Management System) yang akan memudahkan pengguna untuk membuat,
                    mengelola, dan mengorganisir konten Digital Signage secara terpusat.
                </p>
                <h2 class="text-xl font-bold text-gray-800">Display Visual Canggih Buatan Anak Bangsa</h2>
                <div class="mt-8 flex items-center gap-4">
                    <img src="https://placehold.co/48x48/A7F3D0/047857?text=Android" alt="Android Base" class="h-12">
                    <p class="font-semibold">Android Base</p>
                </div>
            </div>
            <div class="md:w-7/12 relative">
                <img src="https://placehold.co/800x500/FFFFFF/3B0764?text=Produk+Digital+Signage"
                    alt="Digital Signage Products" class="rounded-lg w-full">
                <div
                    class="absolute top-4 right-4 bg-pink-500 text-white text-center rounded-full p-3 w-24 h-24 flex flex-col justify-center shadow-lg">
                    <span class="font-semibold text-sm">TKDN</span>
                    <span class="font-bold text-3xl">>40%</span>
                </div>
                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">10</span>
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">22</span>
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">43</span>
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">49</span>
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">55</span>
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">65</span>
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">75</span>
                    <span class="bg-gray-800 text-white text-sm font-semibold px-4 py-2 rounded">85</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3D Icons Feature Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-y-12 text-center">
                <!-- Feature Item -->
                <div class="flex flex-col items-center">
                    <div class="bg-gray-100 rounded-full p-4 mb-4 inline-block shadow-md">
                        <img src="https://placehold.co/100x100/FFFFFF/000000?text=Ikon+3D" alt="Media Advertising"
                            class="w-24 h-24">
                    </div>
                    <h3 class="font-semibold text-gray-800">Media <span class="font-bold">Advertising</span></h3>
                </div>
                <!-- Feature Item -->
                <div class="flex flex-col items-center">
                    <div class="bg-gray-100 rounded-full p-4 mb-4 inline-block shadow-md">
                        <img src="https://placehold.co/100x100/FFFFFF/000000?text=Ikon+3D" alt="Image & Video Collage"
                            class="w-24 h-24">
                    </div>
                    <h3 class="font-semibold text-gray-800">Image & Video <span class="font-bold">Collage</span></h3>
                </div>
                <!-- Feature Item -->
                <div class="flex flex-col items-center">
                    <div class="bg-gray-100 rounded-full p-4 mb-4 inline-block shadow-md">
                        <img src="https://placehold.co/100x100/FFFFFF/000000?text=Ikon+3D" alt="Content Scheduling"
                            class="w-24 h-24">
                    </div>
                    <h3 class="font-semibold text-gray-800">Content <span class="font-bold">Scheduling</span></h3>
                </div>
                <!-- Feature Item -->
                <div class="flex flex-col items-center">
                    <div class="bg-gray-100 rounded-full p-4 mb-4 inline-block shadow-md">
                        <img src="https://placehold.co/100x100/FFFFFF/000000?text=Ikon+3D" alt="Hardware Customization"
                            class="w-24 h-24">
                    </div>
                    <h3 class="font-semibold text-gray-800">Hardware <span class="font-bold">Customization</span></h3>
                </div>
                <!-- Feature Item -->
                <div class="flex flex-col items-center">
                    <div class="bg-gray-100 rounded-full p-4 mb-4 inline-block shadow-md">
                        <img src="https://placehold.co/100x100/FFFFFF/000000?text=Ikon+3D" alt="Real-time Update Content"
                            class="w-24 h-24">
                    </div>
                    <h3 class="font-semibold text-gray-800">Real-time <br><span class="font-bold">Update Content</span></h3>
                </div>
                <!-- Feature Item -->
                <div class="flex flex-col items-center">
                    <div class="bg-gray-100 rounded-full p-4 mb-4 inline-block shadow-md">
                        <img src="https://placehold.co/100x100/FFFFFF/000000?text=Ikon+3D" alt="User Friendly"
                            class="w-24 h-24">
                    </div>
                    <h3 class="font-semibold text-gray-800">User <span class="font-bold">Friendly</span></h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="flex items-center justify-center mb-2">
                    <div class="w-5 h-5 rounded-full bg-purple-600"></div>
                    <div class="w-5 h-5 rounded-full bg-purple-500 -ml-2"></div>
                    <div class="w-5 h-5 rounded-full bg-purple-400 -ml-2"></div>
                </div>
                <h2 class="text-3xl font-bold">Fitur</h2>
            </div>

            <div class="space-y-8 max-w-5xl mx-auto">
                <!-- Feature 1 -->
                <div class="feature-card p-8 flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2">
                        <img src="https://placehold.co/400x300/FFFFFF/4C1D95?text=Feature+Image"
                            class="rounded-xl shadow-md w-full">
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Media Advertising & Information Center</h3>
                        <p class="text-gray-700 leading-relaxed">Sentuh Digital Signage dapat memberikan pengalaman visual
                            yang kaya dengan menampilkan beragam konten, seperti gambar, video, grafis, animasi, suara, baik
                            yang bersifat interaktif maupun non-interaktif.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="feature-card p-8 flex flex-col md:flex-row-reverse items-center gap-8">
                    <div class="md:w-1/2">
                        <img src="https://placehold.co/400x300/FFFFFF/4C1D95?text=Feature+Image"
                            class="rounded-xl shadow-md w-full">
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Centralized Content, Schedule & System updates</h3>
                        <p class="text-gray-700 leading-relaxed">Sentuh Digital Signage dapat dikelola secara tersentral.
                            Jadi pengguna dapat melakukan pembaruan konten, menghidupkan/mematikan alat, penjadwalan konten,
                            campaign area, menyetujui/menolak konten yang akan ditayangkan, serta monitoring banyaknya dan
                            durasi konten yang ditayangkan hingga pembaruan sistem Sentuh Digital Signage, secara mudah dan
                            terpusat.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="feature-card p-8 flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2">
                        <img src="https://placehold.co/400x300/FFFFFF/4C1D95?text=Feature+Image"
                            class="rounded-xl shadow-md w-full">
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Realtime Active Website</h3>
                        <p class="text-gray-700 leading-relaxed">Sentuh Digital Signage dapat menampilkan informasi atau
                            konten secara realtime, website berjalan secara aktif dan dapat dinavigasi dengan teknologi
                            touchscreen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specification Download Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div
                class="max-w-5xl mx-auto bg-gray-800 text-white rounded-3xl p-8 flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h2 class="text-3xl font-bold">Spesifikasi</h2>
                    <p class="text-gray-300 mt-1">Silahkan Download Brochure untuk mendapatkan spesifikasi produk Sentuh
                        Smart Teller Machine</p>
                </div>
                <div class="mt-6 md:mt-0">
                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-3 border border-green-400 text-base font-medium rounded-full text-green-400 hover:bg-green-400 hover:text-gray-900 transition-colors">
                        Download
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V9a2 2 0 012-2h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    </main>
@endsection
