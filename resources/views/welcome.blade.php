@extends('layouts.app')

@section('title', 'bladeworks.')

@section('content')
<div class="mx-auto max-w-4xl px-6 py-10">
    <!-- Breadcrumb & Title -->
    <div class="space-y-1">
        <h1 class="text-2xl font-medium text-white tracking-tight text-center">pembuatan layout utama.</h1>
        <p class="text-sm text-[#a1a1aa] text-center">
            Implementasi template induk website menggunakan Blade Templating Engine di Laravel.
        </p>
    </div>

    <div class="my-8"></div>

    <!-- Section 1: Ringkasan Langkah Kerja -->
    <section class="space-y-4">
        <h2 class="text-base font-normal text-white">langkah kerja.</h2>
        
        <div class="overflow-x-auto border border-[#27272a]">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#18181b] text-[#a1a1aa] border-b border-[#27272a]">
                    <tr>
                        <th class="px-4 py-2.5 font-medium">No</th>
                        <th class="px-4 py-2.5 font-medium">Langkah</th>
                        <th class="px-4 py-2.5 font-medium">Lokasi Berkas</th>
                        <th class="px-4 py-2.5 font-medium">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">1</td>
                        <td class="px-4 py-3 font-medium text-white">Buat folder layouts</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">resources/views/layouts/</td>
                        <td class="px-4 py-3">Direktori penyimpan layout utama</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">2</td>
                        <td class="px-4 py-3 font-medium text-white">Buat file template</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">layouts/app.blade.php</td>
                        <td class="px-4 py-3">Master template dengan struktur HTML lengkap</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">3</td>
                        <td class="px-4 py-3 font-medium text-white">Struktur dasar</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&lt;header&gt;, &lt;nav&gt;, &lt;footer&gt;</td>
                        <td class="px-4 py-3">Komponen statis yang tampil di setiap halaman</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">4</td>
                        <td class="px-4 py-3 font-medium text-white">Area dinamis</td>
                        <td class="px-4 py-3 font-mono text-[#a1a1aa]">&#64;yield('content')</td>
                        <td class="px-4 py-3">Placeholder untuk menyisipkan konten child view</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 2: Struktur Template -->
    <section class="mt-10 space-y-4" id="struktur">
        <h2 class="text-base font-normal text-white">struktur berkas.</h2>
        <pre class="bg-[#18181b] border border-[#27272a] p-4 text-xs font-mono text-[#d4d4d8] leading-relaxed overflow-x-auto">resources/views/
├── layouts/
│   └── app.blade.php        <span class="text-[#71717a]">&lt;-- master layout (header, nav, yield, footer)</span>
└── welcome.blade.php        <span class="text-[#71717a]">&lt;-- child view (extends layouts.app)</span></pre>
    </section>

    <!-- Section 3: Contoh Sintaks -->
    <section class="mt-10 space-y-4" id="sintaks">
        <h2 class="text-base font-normal text-white">penerapan pada view.</h2>
        <p class="text-xs text-[#a1a1aa]">
            Setiap halaman view baru mewarisi layout dengan memanggil direktif <code class="font-mono text-white">&#64;extends</code> dan mengisi section <code class="font-mono text-white">&#64;section('content')</code>.
        </p>

        <div class="border border-[#27272a] bg-[#18181b]">
            <div class="border-b border-[#27272a] px-4 py-2 text-xs font-mono text-[#71717a]">
                resources/views/contoh.blade.php
            </div>
            <pre class="p-4 text-xs font-mono text-[#d4d4d8] leading-relaxed overflow-x-auto"><span class="text-[#93c5fd]">&#64;extends</span>(<span class="text-[#86efac]">'layouts.app'</span>)

<span class="text-[#93c5fd]">&#64;section</span>(<span class="text-[#86efac]">'title'</span>, <span class="text-[#86efac]">'Halaman Contoh'</span>)

<span class="text-[#93c5fd]">&#64;section</span>(<span class="text-[#86efac]">'content'</span>)
    &lt;div class="max-w-4xl mx-auto py-8"&gt;
        &lt;h1&gt;Judul Konten&lt;/h1&gt;
        &lt;p&gt;Isi konten halaman web di sini.&lt;/p&gt;
    &lt;/div&gt;
<span class="text-[#93c5fd]">&#64;endsection</span></pre>
        </div>
    </section>
</div>
@endsection
