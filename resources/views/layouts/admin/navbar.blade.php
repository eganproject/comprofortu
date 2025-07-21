<header class="sticky top-0 bg-gray-900/30 backdrop-blur-lg flex items-center justify-between h-20 px-6 lg:px-8 z-10">
    <button id="menu-button" class="lg:hidden text-gray-300 hover:text-white">
        <i data-lucide="menu" class="w-6 h-6"></i>
    </button>

    <div class="flex-1"></div>

    <div class="flex items-center gap-5">
        <div class="relative">
            <button id="notification-button" class="text-gray-300 hover:text-white relative">
                <i data-lucide="bell" class="w-6 h-6"></i>
                <span class="absolute -top-1 -right-1 flex h-3 w-3">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-purple-500"></span>
                </span>
            </button>
            @include('layouts.admin.notification')

        </div>

        <div class="relative">
            <button id="user-menu-button" type="button" class="flex items-center gap-3 focus:outline-none">
                <img src="https://placehold.co/40x40/6d28d9/ffffff?text=A" alt="Avatar Pengguna"
                    class="w-10 h-10 rounded-full border-2 border-purple-500">
                <div class="text-left hidden md:block">
                    <p class="font-semibold text-white text-sm">Admin Ganteng</p>
                    <p class="text-xs text-gray-400">Super Admin</p>
                </div>
            </button>

            <div id="user-menu-dropdown"
                class="hidden absolute right-0 mt-2 w-48 bg-gray-800/90 backdrop-blur-lg rounded-lg shadow-xl z-50 border border-purple-800/50 py-1">
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2 text-sm text-gray-300 hover:bg-purple-500/20 hover:text-white">
                    <i data-lucide="user-circle" class="w-4 h-4"></i>
                    <span>Profil Saya</span>
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-4 py-2 text-sm text-gray-300 hover:bg-purple-500/20 hover:text-white">
                    <i data-lucide="settings-2" class="w-4 h-4"></i>
                    <span>Pengaturan Akun</span>
                </a>
                <div class="my-1 border-t border-purple-800/50"></div>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    class="flex items-center gap-3 px-4 py-2 text-sm text-red-400 hover:bg-red-500/20 hover:text-red-300">
                    <i data-lucide="log-out" class="w-4 h-4"></i>
                    <span>Keluar</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>
