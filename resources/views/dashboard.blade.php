@extends('layouts.app')

@section('title', 'dashboard — bladeworks.')

@section('content')
<div class="mx-auto max-w-4xl px-6 py-10">
    <!-- Header Dashboard -->
    <div class="space-y-1">
        <h1 class="text-2xl font-bold text-white tracking-tight">Dashboard.</h1>
        <p class="text-sm text-[#a1a1aa]">
            Ringkasan progres praktikum dan status modul mahasiswa.
        </p>
    </div>

    <div class="my-8"></div>

    <!-- Ringkasan Metrik / Status Singkat -->
    <section class="space-y-4">
        <h2 class="text-base font-semibold text-white">Status Praktikum</h2>

        <div class="grid grid-cols-1 gap-3 sm:grid-cols-3">
            <div class="border border-[#27272a] bg-[#18181b] p-4">
                <p class="text-xs text-[#a1a1aa]">Total Modul</p>
                <p class="mt-1 text-xl font-bold text-white">6 Modul</p>
                <p class="mt-1 text-[11px] text-[#71717a]">Semester Genap 2026</p>
            </div>
            <div class="border border-[#27272a] bg-[#18181b] p-4">
                <p class="text-xs text-[#a1a1aa]">Modul Selesai</p>
                <p class="mt-1 text-xl font-bold text-white">1 / 6</p>
                <p class="mt-1 text-[11px] text-[#71717a]">Praktikum 1: Layout Utama</p>
            </div>
            <div class="border border-[#27272a] bg-[#18181b] p-4">
                <p class="text-xs text-[#a1a1aa]">Status Kehadiran</p>
                <p class="mt-1 text-xl font-bold text-white">100%</p>
                <p class="mt-1 text-[11px] text-[#71717a]">1 pertemuan tercatat</p>
            </div>
        </div>
    </section>

    <!-- Tabel Daftar Modul & Tugas -->
    <section class="mt-10 space-y-4">
        <h2 class="text-base font-semibold text-white">Daftar Modul Praktikum</h2>

        <div class="overflow-x-auto border border-[#27272a]">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#18181b] text-[#a1a1aa] border-b border-[#27272a]">
                    <tr>
                        <th class="px-4 py-2.5 font-medium">Kode</th>
                        <th class="px-4 py-2.5 font-medium">Topik Materi</th>
                        <th class="px-4 py-2.5 font-medium">Direktif Utama</th>
                        <th class="px-4 py-2.5 font-medium">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">PRAK-01</td>
                        <td class="px-4 py-3 font-medium text-white">Membuat Layout Utama</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&#64;yield, &#64;extends, &#64;section</td>
                        <td class="px-4 py-3 text-[#a1a1aa]">Selesai</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">PRAK-02</td>
                        <td class="px-4 py-3 font-medium text-white">Komponen & Partial View</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&#64;include, &#64;each</td>
                        <td class="px-4 py-3 text-[#71717a]">Mendatang</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">PRAK-03</td>
                        <td class="px-4 py-3 font-medium text-white">Blade Conditional & Loops</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&#64;if, &#64;foreach, &#64;forelse</td>
                        <td class="px-4 py-3 text-[#71717a]">Mendatang</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">PRAK-04</td>
                        <td class="px-4 py-3 font-medium text-white">Passing Data Controller ke View</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">view('name', $data)</td>
                        <td class="px-4 py-3 text-[#71717a]">Mendatang</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Informasi Template Inheritance -->
    <section class="mt-10 space-y-4">
        <h2 class="text-base font-semibold text-white">Catatan Teknis Inheritance</h2>
        
        <div class="border border-[#27272a] bg-[#18181b] p-4 text-xs text-[#a1a1aa] leading-relaxed space-y-2">
            <p>
                Halaman ini dirender menggunakan <code class="font-mono text-white">&#64;extends('layouts.app')</code>. Seluruh konten diapit dalam <code class="font-mono text-white">&#64;section('content') ... &#64;endsection</code> dan dimasukkan ke dalam placeholder <code class="font-mono text-white">&#64;yield('content')</code> pada template induk.
            </p>
        </div>
    </section>
</div>
@endsection
