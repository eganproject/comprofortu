<aside id="sidebar"
    class="bg-gray-900/50 backdrop-blur-lg w-64 -translate-x-full fixed inset-y-0 left-0 z-50
                            lg:sticky lg:top-0 lg:translate-x-0 lg:flex lg:flex-col h-screen transition-transform duration-300 ease-in-out">

    <div class="flex items-center justify-center h-20 border-b border-purple-900/30 px-6 flex-shrink-0">
        <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-purple-400">
                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </svg>
            <h1 class="text-xl font-bold text-white">AdminPanel</h1>
        </div>
    </div>
    <div class="flex flex-col flex-1 overflow-y-auto">
        <nav class="px-4 py-6 space-y-2">
            <a href="/admin"
                class="flex items-center gap-3 px-4 py-2.5 {{ Route::is('admin.dashboard') ? 'bg-purple-600/30 text-white rounded-lg shadow-lg text-sm' : 'text-gray-300 hover:bg-purple-500/20 hover:text-white rounded-lg transition-colors text-sm' }}">
                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                <span class="font-medium">Dashboard</span>
            </a>

            <div x-data="{ isOpen: false }" class="space-y-2">
                <button @click="isOpen = !isOpen" type="button"  x-init="isOpen = {{ Route::is('admin.web_preferences.hero') ? 'true' : 'false' }}"
                    class="w-full flex items-center justify-between gap-3 px-4 py-2.5 text-gray-300 hover:bg-purple-500/20 hover:text-white rounded-lg transition-colors text-sm">
                    <div class="flex items-center gap-3">
                        <i data-lucide="chevrons-left-right-ellipsis" class="w-5 h-5"></i>
                        <span>Web Preference</span>
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform"
                        :class="{ 'rotate-180': isOpen }"></i>
                </button>
                <div x-show="isOpen" x-transition class="pl-7 space-y-2">
                    <a href="/admin/web-preferences/hero"
                        class="flex items-center gap-3 px-4 py-2.5 {{ Route::is('admin.web_preferences.hero') ? 'bg-purple-600/30 text-white rounded-lg shadow-lg text-sm' : '  text-gray-400 hover:text-white text-xs rounded-lg transition-colors' }}">
                        <i data-lucide="tv" class="w-5 h-5"></i>
                        <span>Hero</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-gray-400 hover:text-white text-xs rounded-lg transition-colors">
                        <i data-lucide="equal-approximately" class="w-5 h-5"></i>
                        <span>About Us</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-gray-400 hover:text-white text-xs rounded-lg transition-colors">
                        <i data-lucide="hand-platter" class="w-5 h-5"></i>
                        <span>Service</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-gray-400 hover:text-white text-xs rounded-lg transition-colors">
                        <i data-lucide="rss" class="w-5 h-5"></i>
                        <span>Blog</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-gray-400 hover:text-white text-xs rounded-lg transition-colors">
                        <i data-lucide="tag" class="w-4 h-4"></i>
                        <span>Kategori</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-2.5 text-gray-400 hover:text-white text-xs rounded-lg transition-colors">
                        <i data-lucide="list" class="w-4 h-4"></i>
                        <span>Daftar Produk</span>
                    </a>
                </div>
            </div>
            <a href="#"
                class="flex items-center gap-3 px-4 py-2.5 text-gray-300 hover:bg-purple-500/20 hover:text-white rounded-lg transition-colors text-sm">
                <i data-lucide="users" class="w-5 h-5"></i>
                <span>User Management</span>
            </a>
            <a href="#"
                class="flex items-center gap-3 px-4 py-2.5 text-gray-300 hover:bg-purple-500/20 hover:text-white rounded-lg transition-colors text-sm">
                <i data-lucide="bar-chart-3" class="w-5 h-5"></i>
                <span>Analytic</span>
            </a>
        </nav>

        <div class="mt-auto px-4 py-6 border-t border-purple-900/30">
            <a href="#"
                class="flex items-center gap-3 px-4 py-2.5 text-gray-300 hover:bg-purple-500/20 hover:text-white rounded-lg transition-colors text-sm">
                <i data-lucide="settings" class="w-5 h-5"></i>
                <span>Pengaturan</span>
            </a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="flex items-center gap-3 px-4 py-2.5 text-gray-300 hover:bg-purple-500/20 hover:text-white rounded-lg transition-colors text-sm">
                <i data-lucide="log-out" class="w-5 h-5"></i>
                <span>Keluar</span>
            </a>
        </div>
    </div>
</aside>



<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
