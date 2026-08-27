@extends('layouts.app')

@section('title', 'Data Siswa — Admin Sekolah')

@section('content')
<div class="w-full space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-[#27272a] pb-5">
        <div>
            <h1 class="text-xl font-medium text-white tracking-tight">data peserta didik.</h1>
            <p class="text-xs text-[#a1a1aa] mt-1">
                rekapitulasi data induk siswa aktif smk negeri 2 jakarta tahun ajaran 2025/2026.
            </p>
        </div>
    </div>

    <x-card>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#111113] text-[#71717a] border-b border-[#27272a]">
                    <tr>
                        <th class="py-2.5 px-3 font-medium">NISN</th>
                        <th class="py-2.5 px-3 font-medium">Nama Siswa</th>
                        <th class="py-2.5 px-3 font-medium">Kelas</th>
                        <th class="py-2.5 px-3 font-medium">Peminatan / Jurusan</th>
                        <th class="py-2.5 px-3 font-medium">Status Akademik</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    @forelse($siswas as $siswa)
                        <tr>
                            <td class="py-3 px-3 font-mono text-[11px] text-[#a1a1aa]">{{ $siswa->nisn }}</td>
                            <td class="py-3 px-3 font-medium text-white">{{ $siswa->nama }}</td>
                            <td class="py-3 px-3 font-mono text-[11px]">{{ $siswa->kelas }}</td>
                            <td class="py-3 px-3">{{ $siswa->jurusan }}</td>
                            <td class="py-3 px-3 text-[#86efac]">{{ $siswa->status }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-[#71717a]">Belum ada data siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $siswas->links('components.pagination') }}
    </x-card>
</div>
@endsection
