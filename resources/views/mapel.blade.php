@extends('layouts.app')

@section('title', 'Mata Pelajaran — Admin Sekolah')

@section('content')
<div class="w-full space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-[#27272a] pb-5">
        <div>
            <h1 class="text-xl font-medium text-white tracking-tight">mata pelajaran.</h1>
            <p class="text-xs text-[#a1a1aa] mt-1">
                struktur kurikulum dan beban jam pelajaran per minggu smk negeri 2 jakarta tahun ajaran 2025/2026.
            </p>
        </div>
    </div>

    <x-card>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#111113] text-[#71717a] border-b border-[#27272a]">
                    <tr>
                        <th class="py-2.5 px-3 font-medium">Kode</th>
                        <th class="py-2.5 px-3 font-medium">Nama Mata Pelajaran</th>
                        <th class="py-2.5 px-3 font-medium">Kelompok</th>
                        <th class="py-2.5 px-3 font-medium">Beban Jam</th>
                        <th class="py-2.5 px-3 font-medium">Koordinator Mapel</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    @forelse($mapels as $mapel)
                        <tr>
                            <td class="py-3 px-3 font-mono text-[11px] text-[#a1a1aa]">{{ $mapel->kode }}</td>
                            <td class="py-3 px-3 font-medium text-white">{{ $mapel->nama }}</td>
                            <td class="py-3 px-3">{{ $mapel->kelompok }}</td>
                            <td class="py-3 px-3 font-mono text-[11px]">{{ $mapel->beban_jam }}</td>
                            <td class="py-3 px-3 text-[#d4d4d8]">{{ $mapel->koordinator }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-[#71717a]">Belum ada data mata pelajaran.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $mapels->links('components.pagination') }}
    </x-card>
</div>
@endsection
