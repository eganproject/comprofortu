<header class="bg-white sticky top-0 z-50 shadow-sm px-12">
    {{-- Jarak samping diubah dari px-4 menjadi px-8 --}}
    <nav class="container mx-auto px-8 py-4 flex justify-between items-center">
        <div class="flex-shrink-0">
            <a href="/" class="flex items-center">
                <img src="{{ asset('/image/sentuh.png') }}" alt="Sentuh Logo" class="h-8 w-auto">
            </a>
        </div>

        {{-- Ukuran font diubah dari text-sm menjadi text-xs --}}
        <div class="hidden md:flex items-center space-x-8 text-xs">
            <a href="/about"
                class="{{ request()->is('about') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">About
                Us</a>
            <a href="/service"
                class="{{ request()->is('service') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">Service</a>
            <a href="/smartos"
                class="{{ request()->is('smartos') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">Smart
                Office Solution</a>
            <a href="/product"
                class="{{ request()->is('product') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">Product</a>
            <a href="/blog"
                class="{{ request()->is('blog') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">Blog</a>
            <a href="/contact"
                class="{{ request()->is('contact') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">Contact</a>
            <a href="/bcap"
                class="{{ request()->is('bcap') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">Become
                a Partner</a>
            <a href="/career"
                class="{{ request()->is('career') ? 'text-purple-600' : 'text-gray-700 hover:text-purple-600' }} font-semibold">Career</a>
        </div>

        <button id="mobile-menu-button" class="md:hidden text-gray-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden">
        {{-- Ukuran font mobile juga diubah menjadi text-xs --}}
        <a href="/about" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">About us</a>
        <a href="/service" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">Service</a>
        <a href="/smartos" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">Smart Office Solution</a>
        <a href="/product" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">Product</a>
        <a href="/blog" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">Blog</a>
        <a href="/contact" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">Contact</a>
        <a href="/bcap" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">Become a Partner</a>
        <a href="/career" class="block py-2 px-4 text-xs text-gray-700 hover:bg-gray-200">Career</a>
    </div>
</header>

