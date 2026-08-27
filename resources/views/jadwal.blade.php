@extends('layouts.app')

@section('title', 'Jadwal Pelajaran — Admin Sekolah')

@section('content')
<div class="w-full space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-[#27272a] pb-5">
        <div>
            <h1 class="text-xl font-medium text-white tracking-tight">jadwal kegiatan belajar mengajar.</h1>
            <p class="text-xs text-[#a1a1aa] mt-1">
                alokasi waktu, ruang kelas, dan pembagian pengampu semester ganjil smk negeri 2 jakarta.
            </p>
        </div>
    </div>

    <x-card>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#111113] text-[#71717a] border-b border-[#27272a]">
                    <tr>
                        <th class="py-2.5 px-3 font-medium">Hari</th>
                        <th class="py-2.5 px-3 font-medium">Waktu</th>
                        <th class="py-2.5 px-3 font-medium">Kelas</th>
                        <th class="py-2.5 px-3 font-medium">Mata Pelajaran</th>
                        <th class="py-2.5 px-3 font-medium">Ruang</th>
                        <th class="py-2.5 px-3 font-medium">Guru Pengampu</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    @forelse($jadwals as $jadwal)
                        <tr>
                            <td class="py-3 px-3 font-medium text-white">{{ $jadwal->hari }}</td>
                            <td class="py-3 px-3 font-mono text-[11px] text-[#a1a1aa]">{{ $jadwal->waktu }}</td>
                            <td class="py-3 px-3 font-mono text-[11px]">{{ $jadwal->kelas }}</td>
                            <td class="py-3 px-3">{{ $jadwal->mapel }}</td>
                            <td class="py-3 px-3 font-mono text-[11px]">{{ $jadwal->ruang }}</td>
                            <td class="py-3 px-3">{{ $jadwal->guru }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-4 text-center text-[#71717a]">Belum ada jadwal KBM.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $jadwals->links('components.pagination') }}
    </x-card>
</div>
@endsection
