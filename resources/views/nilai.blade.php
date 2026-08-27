@extends('layouts.app')

@section('title', 'Rekap Nilai — Admin Sekolah')

@section('content')
<div class="w-full space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-[#27272a] pb-5">
        <div>
            <h1 class="text-xl font-medium text-white tracking-tight">rekapitulasi nilai akademik.</h1>
            <p class="text-xs text-[#a1a1aa] mt-1">
                penilaian capaian belajar siswa smk negeri 2 jakarta semester ganjil.
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
                        <th class="py-2.5 px-3 font-medium text-center">Tugas</th>
                        <th class="py-2.5 px-3 font-medium text-center">UTS</th>
                        <th class="py-2.5 px-3 font-medium text-center">UAS</th>
                        <th class="py-2.5 px-3 font-medium text-center">Nilai Akhir</th>
                        <th class="py-2.5 px-3 font-medium text-center">Predikat</th>
                        <th class="py-2.5 px-3 font-medium">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    @forelse($nilais as $nilai)
                        <tr>
                            <td class="py-3 px-3 font-mono text-[11px] text-[#a1a1aa]">{{ $nilai->nisn }}</td>
                            <td class="py-3 px-3 font-medium text-white">{{ $nilai->nama }}</td>
                            <td class="py-3 px-3 font-mono text-center">{{ $nilai->tugas }}</td>
                            <td class="py-3 px-3 font-mono text-center">{{ $nilai->uts }}</td>
                            <td class="py-3 px-3 font-mono text-center">{{ $nilai->uas }}</td>
                            <td class="py-3 px-3 font-mono font-medium text-white text-center">{{ number_format($nilai->nilai_akhir, 1) }}</td>
                            <td class="py-3 px-3 font-mono text-center text-[#86efac]">{{ $nilai->predikat }}</td>
                            <td class="py-3 px-3 {{ $nilai->status === 'Tuntas' ? 'text-[#86efac]' : 'text-[#f87171]' }}">{{ $nilai->status }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-4 text-center text-[#71717a]">Belum ada data nilai.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $nilais->links('components.pagination') }}
    </x-card>
</div>
@endsection
