<?php

use App\Models\Agenda;
use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\PiketGuru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'totalGuru' => Guru::count(),
        'totalSiswa' => Siswa::count(),
        'totalMapel' => Mapel::count(),
        'piketGurus' => PiketGuru::all(),
        'agendas' => Agenda::all(),
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'totalGuru' => Guru::count(),
        'totalSiswa' => Siswa::count(),
        'totalMapel' => Mapel::count(),
        'piketGurus' => PiketGuru::all(),
        'agendas' => Agenda::all(),
    ]);
});

Route::get('/guru', function () {
    return view('guru', [
        'gurus' => Guru::paginate(8),
        'totalGuru' => Guru::count(),
    ]);
});

Route::get('/siswa', function () {
    return view('siswa', [
        'siswas' => Siswa::paginate(10),
        'totalSiswa' => Siswa::count(),
    ]);
});

Route::get('/mapel', function () {
    return view('mapel', [
        'mapels' => Mapel::paginate(8),
        'totalMapel' => Mapel::count(),
    ]);
});

Route::get('/jadwal', function () {
    return view('jadwal', [
        'jadwals' => Jadwal::paginate(8),
    ]);
});

Route::get('/nilai', function () {
    return view('nilai', [
        'nilais' => Nilai::paginate(8),
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        'admin' => User::where('email', 'admin@smkn2.sch.id')->first(),
    ]);
});
