<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#111113] text-[#e4e4e7]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'bladeworks.')</title>

    <!-- Google Fonts Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stack+Sans+Text:wght@200..700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="flex min-h-full flex-col font-sans bg-[#111113] text-[#d4d4d8] selection:bg-[#27272a] selection:text-white">
    <!-- Header & Navbar -->
    <header class="border-b border-[#27272a] bg-[#111113]">
        <div class="mx-auto flex max-w-4xl flex-wrap items-center justify-between gap-4 px-6 py-3.5">
            <!-- Brand -->
            <a href="{{ url('/') }}" class="text-base font-normal text-white tracking-tight">
                bladeworks.
            </a>

            <!-- Navbar 5 Buttons (Semua mengarah ke URL nonexistent / dummy) -->
            <nav class="flex flex-wrap items-center gap-2">
                <a href="{{ url('/nav-beranda') }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-3 py-1.5 text-xs font-medium text-[#d4d4d8] hover:border-[#3f3f46] hover:bg-[#27272a] hover:text-white">
                    beranda
                </a>
                <a href="{{ url('/nav-modul') }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-3 py-1.5 text-xs font-medium text-[#d4d4d8] hover:border-[#3f3f46] hover:bg-[#27272a] hover:text-white">
                    modul
                </a>
                <a href="{{ url('/nav-tugas') }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-3 py-1.5 text-xs font-medium text-[#d4d4d8] hover:border-[#3f3f46] hover:bg-[#27272a] hover:text-white">
                    tugas
                </a>
                <a href="{{ url('/nav-jadwal') }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-3 py-1.5 text-xs font-medium text-[#d4d4d8] hover:border-[#3f3f46] hover:bg-[#27272a] hover:text-white">
                    jadwal
                </a>
                <a href="{{ url('/nav-pengaturan') }}" class="inline-flex items-center border border-[#27272a] bg-[#18181b] px-3 py-1.5 text-xs font-medium text-[#d4d4d8] hover:border-[#3f3f46] hover:bg-[#27272a] hover:text-white">
                    pengaturan
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-[#27272a] bg-[#111113] py-6 text-xs text-[#71717a]">
        <div class="mx-auto flex max-w-4xl flex-col sm:flex-row sm:items-center sm:justify-between gap-2 px-6">
            <!-- Tulisan Laravel dipindahkan ke bagian kiri footer -->
            <div class="text-[#a1a1aa]">
                Laravel {{ Illuminate\Foundation\Application::VERSION }}
            </div>
            <div class="text-[#a1a1aa]">
                PHP {{ PHP_VERSION }}
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
