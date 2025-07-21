@extends('layouts.user.main')
@section('title', 'Blog - Fortu Digital Teknologi')
@section('content')

    <div class="container mx-auto px-4 max-w-4xl">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-8">
            <a href="./blog.html" class="text-sm font-semibold text-gray-600 hover:text-purple-700">&larr; All Posts</a>
            <button class="text-gray-500 hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>

        <!-- Article Header -->
        <div class="mb-8">
            <div class="flex justify-between items-start mb-4">
                <div class="flex items-center space-x-3">
                    <img class="w-10 h-10 rounded-full" src="https://placehold.co/40x40/CFD8DC/78909C?text=A"
                        alt="Author avatar">
                    <div class="text-sm">
                        <p class="font-semibold text-gray-800">marketing05372</p>
                        <p class="text-gray-500">Sep 13, 2024 &middot; 2 min read</p>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                    </svg>
                </button>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                PT Fortu Digital Teknologi Berkontribusi dalam Event Pengenalan Toko Daring Bela Pengadaan dan
                E-Katalog V6 untuk Memajukan Pengadaan Barang dan Jasa di Pemerintahan
            </h1>
        </div>

        <!-- Featured Image -->
        <div class="mb-8">
            <img src="https://placehold.co/800x500/FCA5A5/7F1D1D?text=Event+Image" alt="Event Pengenalan Toko Daring"
                class="w-full rounded-lg">
        </div>

        <!-- Article Body -->
        <article class="prose max-w-none text-gray-700 leading-relaxed">
            <div class="flex items-center space-x-4 mb-6 border-y py-3">
                <img src="https://placehold.co/80x30/CCCCCC/FFFFFF?text=Logo1" alt="Partner Logo 1">
                <img src="https://placehold.co/80x30/CCCCCC/FFFFFF?text=Logo2" alt="Partner Logo 2">
                <img src="https://placehold.co/80x30/CCCCCC/FFFFFF?text=Logo3" alt="Partner Logo 3">
            </div>
            <p>
                Dalam upaya mendukung digitalisasi dan efisiensi dalam pengadaan barang dan jasa di pemerintahan, PT
                Fortu Digital Teknologi dengan bangga turut berpartisipasi dalam event Pengenalan Toko Daring Bela
                Pengadaan dan E-Katalog V6, yang diselenggarakan pada 10 September 2024 di Hotel Yuan Pasar Baru. Acara
                ini diorganisir oleh Bappenas (Badan Perencanaan Pembangunan Nasional) dan Indotrading, serta melibatkan
                berbagai instansi penting dalam pengadaan barang dan jasa di Indonesia, termasuk PPK (Panitia Pembuat
                Komitmen), PPBJ (Pengelola Pengadaan Barang dan Jasa), Biro Umum, serta LKPP (Lembaga Kebijakan
                Pengadaan Barang dan Jasa).
            </p>
            <p>
                Event tersebut dihadiri lebih dari 100 peserta yang berasal dari berbagai instansi pemerintahan, baik
                dari tingkat pusat maupun daerah, seperti Pemda, Pemprov, dan Pemkot. Peserta terdiri dari para
                profesional di bidang pengadaan barang dan jasa, yang bertanggung jawab atas berbagai proyek pemerintah.
                Melalui event ini, pemerintah berupaya mempercepat adopsi platform daring dan memperkenalkan E-Katalog
                V6.
            </p>
        </article>

        <!-- Post Footer -->
        <div class="mt-8">
            <div class="flex items-center text-blue-800 font-semibold mb-4">
                <span>🤗</span>
                <span class="ml-2">#BanggaBuatanIndonesia #UdahGakZamannyaManual</span>
            </div>
            <div class="border-t border-b py-3 flex justify-between items-center">
                <div class="flex items-center space-x-4 text-gray-600">
                    <a href="#" class="hover:text-blue-800"><svg class="w-5 h-5" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M9.198 21.5h4.14c.891 0 1.59-.724 1.59-1.615v-5.023h2.833c.594 0 .88-.724.47-1.123l-5.45-5.45c-.307-.307-.81-.307-1.117 0l-5.45 5.45c-.41.4-.124 1.123.47 1.123h2.833v5.023c0 .891.7 1.615 1.59 1.615z">
                            </path>
                        </svg></a>
                    <a href="#" class="hover:text-blue-800"><svg class="w-5 h-5" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616v.064c0 2.298 1.634 4.212 3.793 4.649-.65.177-1.354.238-2.08.088.602 1.945 2.346 3.36 4.416 3.398-1.623 1.27-3.666 2.023-5.88 2.023-.383 0-.76-.023-1.129-.066 2.094 1.348 4.593 2.13 7.29 2.13 8.656 0 13.38-7.16 13.38-13.38 0-.204-.005-.407-.014-.61A9.49 9.49 0 0024 4.557z">
                            </path>
                        </svg></a>
                    <a href="#" class="hover:text-blue-800"><svg class="w-5 h-5" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z">
                            </path>
                        </svg></a>
                    <a href="#" class="hover:text-blue-800"><svg class="w-5 h-5" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.423 12.601c.498-1.52 1.309-3.013 2.508-4.216.043.01.085.021.127.031l2.427 1.011c.92.384 1.358 1.428.974 2.348-1.472 3.535-4.23 6.365-7.75 7.855-.92.384-1.965-.053-2.348-.974l-1.011-2.427c-.01-.042-.021-.084-.031-.127 1.203-1.199 2.696-2.01 4.216-2.508zm-1.034-3.142c-.297.297-2.187-1.593-1.89-1.89.297-.297 2.187 1.593 1.89 1.89zm5.209 11.541c-3.031.09-5.912-1.038-8.12-3.249-4.444-4.444-4.444-11.667 0-16.111 2.208-2.211 5.089-3.34 8.12-3.249.342.01.666.146.904.384l2.427 1.011c.92.384 1.358 1.428.974 2.348-1.472 3.535-4.23 6.365-7.75 7.855-.92.384-1.965-.053-2.348-.974l-1.011-2.427c-.19-.456-.582-.78-1.05-.854-.23-.037-.464.01-.676.127-4.444 4.444-4.444 11.667 0 16.111 2.208 2.211 5.089 3.34 8.12 3.249.467-.015.869-.339 1.05-.854l1.011-2.427c.384-.92.053-1.965-.974-2.348l-2.427-1.011c-.238-.238-.562-.374-.904-.384z">
                            </path>
                        </svg></a>
                </div>
            </div>
            <div class="flex justify-between items-center mt-3 text-sm text-gray-500">
                <span>29 views &nbsp;&nbsp; 3 comments</span>
                <button class="flex items-center text-red-500 hover:text-red-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Recent Posts Section -->
        <section class="mt-16 pt-8 border-t">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-gray-800">Recent Posts</h2>
                <a href="./blog.html" class="text-sm font-semibold text-purple-600 hover:underline">See All</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Recent Post Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden">
                    <a href="#" class="block">
                        <img src="https://placehold.co/400x250/C4B5FD/3B0764?text=Blog+Post" alt="Blog post image"
                            class="w-full h-40 object-cover">
                    </a>
                    <div class="py-4">
                        <h3 class="font-bold text-md mb-3 h-16">
                            <a href="#" class="hover:text-purple-700">Dukung Transformasi Digital, SDT
                                berpartisipasi sebagai...</a>
                        </h3>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <div class="flex space-x-4">
                                <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg> 58</span>
                                <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg> 1</span>
                            </div>
                            <button class="flex items-center hover:text-red-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Recent Post Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden">
                    <a href="#" class="block">
                        <img src="https://placehold.co/400x250/A5B4FC/3B0764?text=Blog+Post" alt="Blog post image"
                            class="w-full h-40 object-cover">
                    </a>
                    <div class="py-4">
                        <h3 class="font-bold text-md mb-3 h-16">
                            <a href="#" class="hover:text-purple-700">Perkuat Brand Teknologi Lokal, Fortu
                                berpartisipasi dalam...</a>
                        </h3>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <div class="flex space-x-4">
                                <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg> 94</span>
                                <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg> 1</span>
                            </div>
                            <button class="flex items-center text-red-500">
                                <svg class="w-4 h-4" fill="currentColor" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Recent Post Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden">
                    <a href="#" class="block">
                        <img src="https://placehold.co/400x250/FBCFE8/831843?text=Blog+Post" alt="Blog post image"
                            class="w-full h-40 object-cover">
                    </a>
                    <div class="py-4">
                        <h3 class="font-bold text-md mb-3 h-16">
                            <a href="#" class="hover:text-purple-700">New Era of Digital Education Tools
                                Presented by PT Sentu...</a>
                        </h3>
                        <div class="flex justify-between items-center text-xs text-gray-500">
                            <div class="flex space-x-4">
                                <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg> 67</span>
                                <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg> 2</span>
                            </div>
                            <button class="flex items-center hover:text-red-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comments Section -->
        <section class="mt-16 pt-8 border-t">
            <h2 class="text-xl font-bold text-gray-800 mb-4">3 Comments</h2>
            <div class="mb-6">
                <textarea class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500" rows="3"
                    placeholder="Write a comment..."></textarea>
            </div>
            <div class="flex justify-start items-center mb-6">
                <label for="sort-by" class="text-sm text-gray-600 mr-2">Sort by:</label>
                <select id="sort-by" class="text-sm font-semibold border-0 focus:ring-0">
                    <option>Newest</option>
                    <option>Oldest</option>
                </select>
            </div>

            <!-- Comments List -->
            <div class="space-y-8">
                <!-- Comment 1 -->
                <div class="flex items-start space-x-4">
                    <img class="w-10 h-10 rounded-full" src="https://placehold.co/40x40/F472B6/FFFFFF?text=GA"
                        alt="Gabrielle Ann avatar">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-semibold text-gray-900">Gabrielle Ann</p>
                                <p class="text-xs text-gray-500">Jul 07</p>
                            </div>
                            <button class="text-gray-400 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                            </button>
                        </div>
                        <ol class="list-decimal list-inside mt-2 text-sm text-gray-700 space-y-1">
                            <li><a href="#" class="text-purple-600 hover:underline">bahagia777</a></li>
                            <li><a href="#" class="text-purple-600 hover:underline">bebasbet</a></li>
                            <li><a href="#" class="text-purple-600 hover:underline">mari777</a></li>
                            <li><a href="#" class="text-purple-600 hover:underline">rahasia slot</a></li>
                            <li><a href="#" class="text-purple-600 hover:underline">rahasia slot</a></li>
                            <li><a href="#" class="text-purple-600 hover:underline">bahagia77</a></li>
                        </ol>
                        <div class="mt-3 flex items-center space-x-4 text-xs text-gray-500 font-semibold">
                            <button class="flex items-center hover:text-gray-800"><svg class="w-4 h-4 mr-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg> Like</button>
                            <button class="hover:text-gray-800">Reply</button>
                        </div>
                    </div>
                </div>
                <!-- Comment 2 -->
                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-full bg-pink-500 flex items-center justify-center text-white font-bold">
                        a</div>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-semibold text-gray-900">anita rusmala</p>
                                <p class="text-xs text-gray-500">Jun 20</p>
                            </div>
                            <button class="text-gray-400 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg>
                            </button>
                        </div>
                        <p class="mt-2 text-sm text-gray-700">
                            Rekomendasi dari temen buat RTP tinggi worth it banget! <a href="#"
                                class="text-purple-600 hover:underline">ash88</a>
                        </p>
                        <div class="mt-3 flex items-center space-x-4 text-xs text-gray-500 font-semibold">
                            <button class="flex items-center hover:text-gray-800"><svg class="w-4 h-4 mr-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg> Like</button>
                            <button class="hover:text-gray-800">Reply</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
