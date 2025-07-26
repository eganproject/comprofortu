<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ get_logo_url() }}" type="image/png">

    
    <title>@yield('title', 'Admin Panel')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 via-purple-950 to-indigo-900 text-gray-200">

    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="w-full max-w-md">
            
            @yield('content')
            
            @include('layouts.auth.footer')

        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>

</body>
</html>