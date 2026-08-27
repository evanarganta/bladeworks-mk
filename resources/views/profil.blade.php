@extends('layouts.app')

@section('title', 'Profil Sekolah & Admin')

@section('content')
<div class="w-full space-y-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-[#27272a] pb-5">
        <div>
            <h1 class="text-xl font-medium text-white tracking-tight">profil & informasi instansi.</h1>
            <p class="text-xs text-[#a1a1aa] mt-1">
                data legalitas sekolah dan akun pengelola sistem informasi akademik smk negeri 2 jakarta.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <x-card title="identitas sekolah.">
            <dl class="space-y-3 text-xs">
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Nama Sekolah</dt>
                    <dd class="font-medium text-white">SMK Negeri 2 Jakarta</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">NPSN</dt>
                    <dd class="font-mono text-[#d4d4d8]">20104829</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Bentuk Pendidikan</dt>
                    <dd class="text-[#d4d4d8]">Sekolah Menengah Kejuruan (SMK)</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Status Sekolah</dt>
                    <dd class="font-medium text-white">Negeri</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Kepala Sekolah</dt>
                    <dd class="font-medium text-white">Dr. H. Bambang Sudiro, M.Pd</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Alamat</dt>
                    <dd class="text-[#d4d4d8] text-right">Jl. Batu No. 3, Gambir, Jakarta Pusat</dd>
                </div>
                
                <div class="flex justify-between">
                    <dt class="text-[#71717a]">Akreditasi</dt>
                    <dd class="text-[#86efac]">A (Unggul)</dd>
                </div>
            </dl>
        </x-card>

        <x-card title="informasi akun administrator.">
            <dl class="space-y-3 text-xs">
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Nama Pengguna</dt>
                    <dd class="font-medium text-white">{{ $admin->name ?? 'Administrator Utama' }}</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Email</dt>
                    <dd class="font-mono text-[#d4d4d8]">{{ $admin->email ?? 'admin@smkn2.sch.id' }}</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Peran</dt>
                    <dd class="font-medium text-white">Endministrator Endfield Industries</dd>
                </div>
                <div class="flex justify-between border-b border-[#27272a] pb-2">
                    <dt class="text-[#71717a]">Sesi Terakhir</dt>
                    <dd class="font-mono text-[11px] text-[#a1a1aa]">10/27/2025, 22:09</dd>
                </div>
                <div class="flex justify-between">
                    <dt class="text-[#71717a]">Status Sesi</dt>
                    <dd class="text-[#86efac]">Aktif / Terverifikasi</dd>
                </div>
            </dl>
        </x-card>
    </div>
</div>
@endsection
