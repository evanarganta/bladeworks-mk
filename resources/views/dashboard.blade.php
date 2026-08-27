@extends('layouts.app')

@section('title', 'Dashboard — Admin Sekolah')

@section('content')
<div class="w-full space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-medium text-white tracking-tight">dashboard overview.</h1>
            <p class="text-xs text-[#a1a1aa] mt-1">
                selamat datang di panel administrasi akademik smk negeri 2 jakarta.
            </p>
        </div>
        <div class="flex items-center gap-2">
            <span class="inline-flex items-center border border-[#27272a] px-2.5 py-1 text-[11px] text-[#a1a1aa]">
                semester ganjil 2025/2026
            </span>
        </div>
    </div>

    <x-alert>
        <span class="text-white font-medium">Pengumuman:</span> Batas akhir input nilai Ujian Tengah Semester (UTS) adalah hari Jumat, 10 Oktober 2025 pukul 23:59 WIB.
    </x-alert>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
        <x-card>
            <p class="text-[11px] font-mono uppercase text-[#71717a]">total guru</p>
            <p class="text-2xl font-medium text-white mt-1">{{ $totalGuru }}</p>
            <p class="text-[11px] text-[#a1a1aa] mt-1">terdata di sistem</p>
        </x-card>

        <x-card>
            <p class="text-[11px] font-mono uppercase text-[#71717a]">total siswa</p>
            <p class="text-2xl font-medium text-white mt-1">{{ $totalSiswa }}</p>
            <p class="text-[11px] text-[#a1a1aa] mt-1">peserta didik aktif</p>
        </x-card>

        <x-card>
            <p class="text-[11px] font-mono uppercase text-[#71717a]">mata pelajaran</p>
            <p class="text-2xl font-medium text-white mt-1">{{ $totalMapel }}</p>
            <p class="text-[11px] text-[#a1a1aa] mt-1">kurikulum merdeka</p>
        </x-card>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
        <x-card title="jadwal piket guru hari ini.">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="bg-[#111113] text-[#71717a] border-b border-[#27272a]">
                        <tr>
                            <th class="py-2 font-medium">Nama Guru</th>
                            <th class="py-2 font-medium">Pos / Lokasi</th>
                            <th class="py-2 font-medium">Shift</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                        @forelse($piketGurus as $piket)
                            <tr>
                                <td class="py-2.5 font-medium text-white">{{ $piket->nama_guru }}</td>
                                <td class="py-2.5 text-[#a1a1aa]">{{ $piket->pos }}</td>
                                <td class="py-2.5 font-mono text-[11px]">{{ $piket->shift }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-3 text-center text-[#71717a]">Tidak ada jadwal piket.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </x-card>

        <x-card title="agenda akademik mendatang.">
            <div class="space-y-3 text-xs">
                @forelse($agendas as $agenda)
                    <div class="flex items-start justify-between border-b border-[#27272a] pb-2.5 last:border-0 last:pb-0">
                        <div>
                            <p class="font-medium text-white">{{ $agenda->judul }}</p>
                            <p class="text-[#71717a] mt-0.5">{{ $agenda->deskripsi }}</p>
                        </div>
                        <span class="font-mono text-[11px] text-[#a1a1aa] shrink-0 ml-3">{{ $agenda->tanggal }}</span>
                    </div>
                @empty
                    <p class="text-[#71717a]">Tidak ada agenda mendatang.</p>
                @endforelse
            </div>
        </x-card>
    </div>
</div>
@endsection
