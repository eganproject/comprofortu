<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AdminPanel')</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* Menggunakan font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Style untuk scrollbar agar lebih estetik */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #1e1b4b; /* a dark indigo */
        }
        ::-webkit-scrollbar-thumb {
            background: #4c1d95; /* a deep violet */
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #5b21b6; /* a brighter violet */
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 via-purple-950 to-indigo-900 text-gray-200">

    <div class="flex min-h-screen">
        @include('layouts.admin.sidebar')
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/60 z-40 hidden lg:hidden"></div>

        <div class="flex-1 flex flex-col">

            @include('layouts.admin.navbar')

            <main class="flex-1 p-6 lg:p-8">
                @yield('content')
            </main>

            @include('layouts.admin.footer')

        </div>
        </div>

    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();

        // Logika untuk Sidebar Mobile
        const menuButton = document.getElementById('menu-button');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
        }

        if (menuButton) menuButton.addEventListener('click', toggleSidebar);
        if (sidebarOverlay) sidebarOverlay.addEventListener('click', toggleSidebar);

        // Logika untuk Dropdown
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenuDropdown = document.getElementById('user-menu-dropdown');
        const notificationButton = document.getElementById('notification-button');
        const notificationDropdown = document.getElementById('notification-dropdown');

        if (userMenuButton) {
            userMenuButton.addEventListener('click', () => {
                userMenuDropdown.classList.toggle('hidden');
                notificationDropdown.classList.add('hidden'); // Tutup notifikasi saat buka menu user
            });
        }
        
        if (notificationButton) {
            notificationButton.addEventListener('click', () => {
                notificationDropdown.classList.toggle('hidden');
                userMenuDropdown.classList.add('hidden'); // Tutup menu user saat buka notifikasi
            });
        }

        window.addEventListener('click', function(e) {
            // Tutup dropdown user jika klik di luar
            if (userMenuButton && userMenuDropdown && !userMenuButton.contains(e.target) && !userMenuDropdown.contains(e.target)) {
                userMenuDropdown.classList.add('hidden');
            }
            // Tutup dropdown notifikasi jika klik di luar
            if (notificationButton && notificationDropdown && !notificationButton.contains(e.target) && !notificationDropdown.contains(e.target)) {
                notificationDropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>