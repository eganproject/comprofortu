        @extends('layouts.user.main')
        @section('title', 'Product - Fortu Digital Teknologi')

        @push('cssOnPage')
            <style>
                .card-glow {
                    position: relative;
                    overflow: hidden;
                }

                .card-glow::before {
                    content: '';
                    position: absolute;
                    top: -50%;
                    left: -50%;
                    width: 200%;
                    height: 200%;
                    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
                    transform: rotate(15deg);
                    transition: transform 0.5s;
                }

                .card-glow:hover::before {
                    transform: rotate(30deg) scale(1.1);
                }

                /* CSS untuk Animasi Scroll pada Ikon */
                .scroll-animate-icon .icon-circle {
                    opacity: 0;
                    /* Atur transisi untuk semua properti transform dan opacity */
                    transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1), opacity 0.4s ease-out;
                }

                /* Posisi Awal Lingkaran (sebelum terlihat) */
                .scroll-animate-icon .icon-circle-1 {
                    transform: translateX(-25px) scale(0.5);
                    transition-delay: 0s;
                }

                .scroll-animate-icon .icon-circle-2 {
                    transform: translateX(-25px) scale(0.5);
                    transition-delay: 0.1s;
                }

                .scroll-animate-icon .icon-circle-3 {
                    transform: translateX(-25px) scale(0.5);
                    transition-delay: 0.2s;
                }

                /* Posisi Akhir Lingkaran (setelah terlihat) */
                .scroll-animate-icon.is-visible .icon-circle {
                    opacity: 1;
                    transform: translateX(0) scale(1);
                }
            </style>
        @endpush

        @section('content')
            <!-- Hero Section -->
            <section class="h-[60vh] md:h-[90vh] bg-slate-200">
                <img src="{{ $hero ? asset('storage/' . $hero->image_1) : 'https://placehold.co/1200x600/94a3b8/080808?text=Hero+Image' }}"
                    alt="Main Hero" class="w-full h-full object-cover">
            </section>

            <!-- Fortu Smart Board Section -->
            <section class="py-12">
                <div class="container mx-auto px-4">
                    <!-- Tambahkan class 'scroll-animate-icon' untuk target JS -->
                    <div class="flex items-center mb-8 scroll-animate-icon">
                        <div class="flex items-center mr-3">
                            <div class="w-5 h-5 rounded-full bg-gray-400 icon-circle icon-circle-1"></div>
                            <div class="w-5 h-5 rounded-full bg-gray-500 -ml-2 icon-circle icon-circle-2"></div>
                            <div class="w-5 h-5 rounded-full bg-gray-600 -ml-2 icon-circle icon-circle-3"></div>
                        </div>
                        <h2 class="text-2xl font-bold">Fortu Smart Board</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Product Card 1 -->
                        <div class="bg-gradient-to-t from-slate-400 to-slate-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="https://placehold.co/400x250/FFFFFF/000000?text=Produk+Smart+Board"
                                alt="Fortu Smart Board" class="w-full h-auto object-contain mb-4 rounded-lg">
                            <h3 class="font-bold text-lg mb-2">Fortu Smart Board</h3>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">65</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">75</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">85</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">86</span>
                            </div>
                            <p class="text-sm text-green-600 font-semibold mb-1">Touchscreen</p>
                            <p class="text-sm text-gray-500 mb-4">TKDN (%): <span
                                    class="font-bold text-gray-700">41,17</span></p>
                            <a href="/product/show" class="text-purple-600 font-semibold hover:underline">Selengkapnya </a>
                        </div>
                        <!-- Product Card 2 -->
                       <div class="bg-gradient-to-t from-slate-400 to-slate-100 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="https://placehold.co/400x250/FFFFFF/000000?text=Produk+Smart+Board"
                                alt="Fortu Smart Board" class="w-full h-auto object-contain mb-4 rounded-lg">
                            <h3 class="font-bold text-lg mb-2">Fortu Smart Board</h3>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">43</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">49</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">65</span>
                            </div>
                            <p class="text-sm text-green-600 font-semibold mb-1">Touchscreen</p>
                            <p class="text-sm text-gray-500 mb-4">TKDN (%): <span
                                    class="font-bold text-gray-700">40,43</span></p>
                            <a href="/product/show"
                                class="text-purple-600 font-semibold hover:underline hover:cursor-pointer">Selengkapnya </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Digital Signage Section -->
            <section class="py-12 bg-white">
                <div class="container mx-auto px-4">
                    <!-- Tambahkan class 'scroll-animate-icon' untuk target JS -->
                    <div class="flex items-center mb-8 scroll-animate-icon">
                        <div class="flex items-center mr-3">
                            <div class="w-5 h-5 rounded-full bg-gray-400 icon-circle icon-circle-1"></div>
                            <div class="w-5 h-5 rounded-full bg-gray-500 -ml-2 icon-circle icon-circle-2"></div>
                            <div class="w-5 h-5 rounded-full bg-gray-600 -ml-2 icon-circle icon-circle-3"></div>
                        </div>
                        <h2 class="text-2xl font-bold">Digital Signage</h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Card Template -->
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100 rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=Digital+Signage"
                                alt="Digital Signage Non Touch" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">Digital Signage Non Touch</h3>
                            <p class="text-xs text-gray-500 mb-1">Screen Type</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">43</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3">TKDN (%): <span
                                    class="font-bold text-gray-700">40,26</span></p>
                            <a href="/product/show"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100  rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=Digital+Signage"
                                alt="Digital Signage Touch" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">Digital Signage Touch</h3>
                            <p class="text-xs text-gray-500 mb-1">Screen Type</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">43</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3">TKDN (%): <span
                                    class="font-bold text-gray-700">40,43</span></p>
                            <a href="/product/show"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100  rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=Digital+Signage"
                                alt="Digital Signage Premium Double Sided" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">Digital Signage Premium Double Sided</h3>
                            <p class="text-xs text-gray-500 mb-1">Screen Type</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55
                                    Standing</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55
                                    Hanging</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3">TKDN (%): <span
                                    class="font-bold text-gray-700">40,43</span></p>
                            <a href="/product/show"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100  rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=Digital+Signage"
                                alt="Digital Signage Wall Mount Non Touch" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">Digital Signage Wall Mount Non Touch</h3>
                            <p class="text-xs text-gray-500 mb-1">Screen Type</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">43</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3">TKDN (%): <span
                                    class="font-bold text-gray-700">40,26</span></p>
                            <a href="#"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100  rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=Digital+Signage"
                                alt="Digital Signage Wall Mount Touch" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">Digital Signage Wall Mount Touch</h3>
                            <p class="text-xs text-gray-500 mb-1">Screen Type</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">43</span>
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3">TKDN (%): <span
                                    class="font-bold text-gray-700">40,26</span></p>
                            <a href="/product/show"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100  rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=OLED+Transparent"
                                alt="OLED Transparent" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">OLED Transparent</h3>
                            <p class="text-xs text-green-600 font-semibold mb-1">Touchscreen</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">55</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3 invisible">TKDN</p> <!-- Placeholder for alignment -->
                            <a href="/product/show"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100  rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=Digital+Signage"
                                alt="Digital Signage Outdoor Single Side" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">Digital Signage Outdoor Single Side</h3>
                            <p class="text-xs text-gray-500 mb-1">Screen Type</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">65</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3">TKDN (%): <span
                                    class="font-bold text-gray-700">40,43</span></p>
                            <a href="/product/show"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                        <div
                            class="bg-gradient-to-t from-slate-400 to-slate-100  rounded-2xl p-4 text-center shadow-lg hover:shadow-xl transition-shadow duration-300 ">
                            <img src="https://placehold.co/300x300/FFFFFF/000000?text=Digital+Signage"
                                alt="Digital Signage Outdoor Double Side" class="w-full h-48 object-contain mb-4">
                            <h3 class="font-bold text-md mb-2">Digital Signage Outdoor Double Side</h3>
                            <p class="text-xs text-gray-500 mb-1">Screen Type</p>
                            <div class="flex justify-center space-x-2 mb-3">
                                <span class="bg-gray-800 text-white text-xs font-semibold px-3 py-1 rounded">65</span>
                            </div>
                            <p class="text-xs text-gray-500 mb-3">TKDN (%): <span
                                    class="font-bold text-gray-700">40,43</span></p>
                            <a href="/product/show"
                                class="inline-block border border-purple-500 text-purple-500 text-sm font-semibold px-6 py-2 rounded-full hover:bg-purple-500 hover:text-white transition-colors">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </section>

        @endsection

        @push('jsOnPage')
            <script>
                const animatedElements = document.querySelectorAll('.scroll-animate-icon');

                if (animatedElements.length > 0) {
                    const observer = new IntersectionObserver((entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-visible');
                                // Hentikan pengamatan setelah animasi berjalan sekali
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        // Atur threshold ke 0.1, artinya animasi akan berjalan
                        // saat 10% dari elemen terlihat
                        threshold: 0.1
                    });

                    animatedElements.forEach(el => {
                        observer.observe(el);
                    });
                }
            </script>
        @endpush
