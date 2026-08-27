@extends('layouts.app')

@section('title', 'dashboard — bladeworks.')

@section('content')
<div class="mx-auto max-w-4xl px-6 py-10">
    <div class="space-y-1">
        <h1 class="text-2xl font-medium text-white tracking-tight text-center">dashboard praktikum.</h1>
        <p class="text-sm text-[#a1a1aa] text-center">
            implementasi section, yield, dan blade component pada halaman dashboard.
        </p>
    </div>

    <div class="my-8"></div>

    <x-alert class="mb-8">
        <span class="text-white font-medium">Praktikum 4:</span> Komponen alert ini dirender menggunakan Blade Component <code class="font-mono text-white">&lt;x-alert&gt;</code> dengan slot dinamis.
    </x-alert>

    <section class="space-y-4">
        <h2 class="text-base font-normal text-white">status praktikum.</h2>

        <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
            <div class="border border-[#27272a] bg-[#18181b] p-4">
                <p class="text-xs text-[#a1a1aa]">total modul</p>
                <p class="mt-1 text-xl font-medium text-white">6 modul</p>
                <p class="mt-1 text-[11px] text-[#71717a]">semester genap 2026</p>
            </div>
            <div class="border border-[#27272a] bg-[#18181b] p-4">
                <p class="text-xs text-[#a1a1aa]">modul selesai</p>
                <p class="mt-1 text-xl font-medium text-white">3 / 6</p>
                <p class="mt-1 text-[11px] text-[#71717a]">praktikum 3: blade component</p>
            </div>
            <div class="border border-[#27272a] bg-[#18181b] p-4">
                <p class="text-xs text-[#a1a1aa]">status inheritance</p>
                <p class="mt-1 text-xl font-medium text-white">aktif</p>
                <p class="mt-1 text-[11px] text-[#71717a]">layouts.app terhubung</p>
            </div>
        </div>
    </section>

    <section class="mt-10 space-y-4">
        <h2 class="text-base font-normal text-white">daftar modul praktikum.</h2>

        <div class="overflow-x-auto border border-[#27272a]">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#18181b] text-[#a1a1aa] border-b border-[#27272a]">
                    <tr>
                        <th class="px-4 py-2.5 font-medium">No</th>
                        <th class="px-4 py-2.5 font-medium">Topik Praktikum</th>
                        <th class="px-4 py-2.5 font-medium">Direktif / Tag Blade</th>
                        <th class="px-4 py-2.5 font-medium">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">01</td>
                        <td class="px-4 py-3 font-medium text-white">Membuat Layout Utama</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&#64;yield('content')</td>
                        <td class="px-4 py-3 text-[#a1a1aa]">Selesai</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">02</td>
                        <td class="px-4 py-3 font-medium text-white">Menggunakan Section dan Yield</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&#64;extends, &#64;section</td>
                        <td class="px-4 py-3 text-[#a1a1aa]">Selesai</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">03</td>
                        <td class="px-4 py-3 font-medium text-white">Membuat Partial View</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&#64;include('partials.*')</td>
                        <td class="px-4 py-3 text-[#a1a1aa]">Selesai</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">04</td>
                        <td class="px-4 py-3 font-medium text-white">Membuat Blade Component</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&lt;x-alert&gt;, &#123;&#123; $slot &#125;&#125;</td>
                        <td class="px-4 py-3 text-white font-medium">Aktif</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-10 space-y-4">
        <h2 class="text-base font-normal text-white">mekanisme blade component.</h2>
        
        <div class="border border-[#27272a] bg-[#18181b] p-4 text-xs text-[#a1a1aa] leading-relaxed space-y-2">
            <p>
                1. Komponen dibuat dengan perintah <code class="font-mono text-white">php artisan make:component Alert</code> yang menghasilkan class <code class="font-mono text-white">app/View/Components/Alert.php</code> dan view <code class="font-mono text-white">resources/views/components/alert.blade.php</code>.
            </p>
            <p>
                2. Tag <code class="font-mono text-white">&lt;x-alert&gt;</code> merender template komponen, dan konten di dalam tag disuntikkan ke variabel <code class="font-mono text-white">&#123;&#123; $slot &#125;&#125;</code>.
            </p>
        </div>
    </section>
</div>
@endsection
