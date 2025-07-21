<aside id="sidebar" 
       class="w-64 bg-white/80 backdrop-blur-lg shadow-xl fixed inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition-all duration-300 ease-in-out z-30 overflow-hidden"
       :class="desktopSidebarOpen ? 'md:w-64' : 'md:w-0'">
    <div class="flex items-center justify-between p-6 border-b border-slate-200/80 h-20">
        <div class="flex items-center">
            <i data-lucide="gem" class="w-8 h-8 text-blue-600"></i>
            <span class="ml-3 text-xl font-bold text-slate-800">Zenith</span>
        </div>
        <button @click="desktopSidebarOpen = false" class="hidden md:block text-slate-500 hover:text-slate-800">
            <i data-lucide="panel-left-close"></i>
        </button>
    </div>

    {{-- Navigasi baru disesuaikan di sini --}}
    <nav class="flex-1 mt-4 px-4 space-y-1">
        
        {{-- Dashboard --}}
        <a href="/admin"
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg transition-colors text-sm {{ Route::is('admin.dashboard') ? 'bg-slate-200/60 text-slate-900 font-semibold' : 'text-slate-600 hover:bg-slate-200/60' }}">
            <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
            <span class="font-medium">Dashboard</span>
        </a>

        {{-- Dropdown Web Preference --}}
        <div x-data="{ isOpen: false }" class="space-y-1">
            <button @click="isOpen = !isOpen" type="button" x-init="isOpen = {{ Route::is('admin.web_preferences.*') ? 'true' : 'false' }}"
                class="w-full flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg transition-colors text-sm text-slate-600 hover:bg-slate-200/60">
                <div class="flex items-center gap-3">
                    <i data-lucide="chevrons-left-right" class="w-5 h-5"></i>
                    <span>Web Preference</span>
                </div>
                <i data-lucide="chevron-down" class="w-4 h-4 transition-transform"
                    :class="{ 'rotate-180': isOpen }"></i>
            </button>
            <div x-show="isOpen" x-transition class="pl-7 space-y-1">
                <a href="/admin/web-preferences/hero"
                    class="flex items-center gap-3 w-full px-4 py-2.5 rounded-lg transition-colors text-xs {{ Route::is('admin.web_preferences.hero') ? 'bg-slate-200/60 text-slate-900 font-semibold' : 'text-slate-500 hover:text-slate-800' }}">
                    <i data-lucide="tv" class="w-5 h-5"></i>
                    <span>Hero</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 w-full px-4 py-2.5 rounded-lg transition-colors text-xs text-slate-500 hover:text-slate-800">
                    <i data-lucide="info" class="w-5 h-5"></i>
                    <span>About Us</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 w-full px-4 py-2.5 rounded-lg transition-colors text-xs text-slate-500 hover:text-slate-800">
                    <i data-lucide="hand-platter" class="w-5 h-5"></i>
                    <span>Service</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 w-full px-4 py-2.5 rounded-lg transition-colors text-xs text-slate-500 hover:text-slate-800">
                    <i data-lucide="rss" class="w-5 h-5"></i>
                    <span>Blog</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 w-full px-4 py-2.5 rounded-lg transition-colors text-xs text-slate-500 hover:text-slate-800">
                    <i data-lucide="tag" class="w-4 h-4"></i>
                    <span>Kategori</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 w-full px-4 py-2.5 rounded-lg transition-colors text-xs text-slate-500 hover:text-slate-800">
                    <i data-lucide="list" class="w-4 h-4"></i>
                    <span>Daftar Produk</span>
                </a>
            </div>
        </div>

        {{-- User Management --}}
        <a href="#"
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg transition-colors text-sm text-slate-600 hover:bg-slate-200/60">
            <i data-lucide="users" class="w-5 h-5"></i>
            <span>User Management</span>
        </a>
        
        {{-- Analytic --}}
        <a href="#"
            class="flex items-center gap-3 px-4 py-2.5 rounded-lg transition-colors text-sm text-slate-600 hover:bg-slate-200/60">
            <i data-lucide="bar-chart-3" class="w-5 h-5"></i>
            <span>Analytic</span>
        </a>
    </nav>
</aside>