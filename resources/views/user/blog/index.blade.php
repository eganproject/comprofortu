    @extends('layouts.user.main')
    @section('title', 'Blog - Fortu Digital Teknologi')
    @section('content')
        <!-- Featured Post Section -->
        <section class="bg-gray-900 text-white">
            <div class="container mx-auto px-4 py-8 md:py-12 text-center">
                <p class="text-sm text-gray-300 mb-2">Fortu Blog</p>
                <!-- Ukuran font berbeda untuk mobile (text-2xl) dan desktop (md:text-4xl) -->
                <h1 class="text-2xl md:text-4xl font-bold max-w-2xl mb-6 mx-auto">Perkuat Brand Teknologi Lokal Fortu
                    berpartisipasi dalam Event Business Matching II p3dn</h1>
                <div class="relative rounded-lg overflow-hidden">
                    <img src="https://placehold.co/1200x500/C7C7C7/FFFFFF?text=IMG+Post" alt="Featured Blog Post"
                        class="w-full h-auto">
                    <!-- Padding dan posisi disesuaikan untuk mobile dan desktop -->
                    <div class="absolute bottom-0 left-0 w-full p-2 md:p-8 text-left">

                        <div class="bg-black bg-opacity-50 backdrop-blur-sm p-3 md:p-4 rounded-lg max-w-full md:max-w-sm">

                            <h2 class="text-sm md:text-xl font-bold mb-1 md:mb-2">Digital Transformation Indonesia
                                Conference & Expo 2023</h2>

                            <a href="/blog/show"
                                class="text-gray-300 hover:text-white font-semibold text-xs md:text-sm">Read More
                                &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Grid Section -->
        <section class="py-16 lg:py-24 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-lg font-semibold text-gray-500 mb-8">All Posts</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Blog Card Template -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/E9D5FF/3B0764?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full" src="https://placehold.co/40x40/CFD8DC/78909C?text=A"
                                        alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Sep 13, 2024 &middot; 2 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="/blog/show" class="hover:text-gray-700">PT Fortu Digital Teknologi
                                    Berkontribusi dalam Event Pengenalan...</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 26</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg> 3</span>
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

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/C4B5FD/3B0764?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full" src="https://placehold.co/40x40/CFD8DC/78909C?text=A"
                                        alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Aug 23, 2023 &middot; 2 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="/blog/show" class="hover:text-gray-700">Dukung Transformasi Digital, SDT
                                    berpartisipasi sebagai...</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 56</span>
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

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/A5B4FC/3B0764?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://placehold.co/40x40/CFD8DC/78909C?text=A" alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Mar 24, 2023 &middot; 1 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="/blog/show" class="hover:text-gray-700">Perkuat Brand Teknologi Lokal,
                                    Fortu berpartisipasi dalam...</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
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

                    <!-- Card 4 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/FBCFE8/831843?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://placehold.co/40x40/CFD8DC/78909C?text=A" alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Feb 20, 2023 &middot; 3 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="#" class="hover:text-gray-700">New Era of Digital Education Tools</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 112</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg> 8</span>
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

                    <!-- Card 5 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/A7F3D0/047857?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://placehold.co/40x40/CFD8DC/78909C?text=A" alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Jan 15, 2023 &middot; 2 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="#" class="hover:text-gray-700">Buat Layanan Perbankanmu Semakin...</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 88</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg> 4</span>
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

                    <!-- Card 6 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/BFDBFE/1E40AF?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://placehold.co/40x40/CFD8DC/78909C?text=A" alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Dec 05, 2022 &middot; 2 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="#" class="hover:text-gray-700">Fitur Receipt Printer Smart Kiosk
                                    Bantu...</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 150</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg> 12</span>
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

                    <!-- Card 7 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/E9D5FF/3B0764?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://placehold.co/40x40/CFD8DC/78909C?text=A" alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Nov 28, 2022 &middot; 2 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="#" class="hover:text-gray-700">Another Great Blog Post Title Goes
                                    Here</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 99</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg> 10</span>
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

                    <!-- Card 8 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/C4B5FD/3B0764?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://placehold.co/40x40/CFD8DC/78909C?text=A" alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Oct 10, 2022 &middot; 4 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="#" class="hover:text-gray-700">Exploring the Future of Interactive
                                    Technology</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 301</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg> 22</span>
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

                    <!-- Card 9 -->
                    <div class="bg-white rounded-lg border border-gray-200 flex flex-col">
                        <a href="#" class="block">
                            <img src="https://placehold.co/400x250/A5B4FC/3B0764?text=Blog+Post" alt="Blog post image"
                                class="w-full h-48 object-cover rounded-t-lg">
                        </a>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-8 h-8 rounded-full"
                                        src="https://placehold.co/40x40/CFD8DC/78909C?text=A" alt="Author avatar">
                                    <div class="text-xs text-gray-500">
                                        <p class="font-semibold text-gray-800">marketing05372</p>
                                        <p>Sep 01, 2022 &middot; 1 min read</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg>
                                </button>
                            </div>
                            <h3 class="font-bold text-lg mb-4 flex-grow">
                                <a href="#" class="hover:text-gray-700">How Digital Signage is Changing Retail</a>
                            </h3>
                            <div
                                class="border-t border-gray-200 pt-3 flex justify-between items-center text-xs text-gray-500">
                                <div class="flex space-x-4">
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg> 452</span>
                                    <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                            </path>
                                        </svg> 35</span>
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
            </div>
        </section>
    @endsection
