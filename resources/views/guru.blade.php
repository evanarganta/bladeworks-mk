@extends('layouts.app')

@section('title', 'Data Guru — Admin Sekolah')

@section('content')
<div class="w-full space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-[#27272a] pb-5">
        <div>
            <h1 class="text-xl font-medium text-white tracking-tight">data tenaga pendidik.</h1>
            <p class="text-xs text-[#a1a1aa] mt-1">
                daftar lengkap guru tetap dan honorer smk negeri 2 jakarta tahun ajaran 2025/2026.
            </p>
        </div>
    </div>

    <x-card>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-[#111113] text-[#71717a] border-b border-[#27272a]">
                    <tr>
                        <th class="py-2.5 px-3 font-medium">NIP</th>
                        <th class="py-2.5 px-3 font-medium">Nama Lengkap</th>
                        <th class="py-2.5 px-3 font-medium">Mata Pelajaran</th>
                        <th class="py-2.5 px-3 font-medium">Wali Kelas</th>
                        <th class="py-2.5 px-3 font-medium">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#27272a] text-[#d4d4d8]">
                    @forelse($gurus as $guru)
                        <tr>
                            <td class="py-3 px-3 font-mono text-[11px] text-[#a1a1aa]">{{ $guru->nip }}</td>
                            <td class="py-3 px-3 font-medium text-white">{{ $guru->nama }}</td>
                            <td class="py-3 px-3">{{ $guru->mapel }}</td>
                            <td class="py-3 px-3 font-mono text-[11px] {{ $guru->wali_kelas ? 'text-[#d4d4d8]' : 'text-[#71717a]' }}">
                                {{ $guru->wali_kelas ?? '-' }}
                            </td>
                            <td class="py-3 px-3 {{ str_contains($guru->status, 'PNS') || str_contains($guru->status, 'PPPK') ? 'text-[#86efac]' : 'text-[#d4d4d8]' }}">
                                {{ $guru->status }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-[#71717a]">Belum ada data guru.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $gurus->links('components.pagination') }}
    </x-card>
</div>
@endsection
