<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\Guru;
use App\Models\Jadwal;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\PiketGuru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@smkn2.sch.id'],
            [
                'name' => 'Administrator Utama',
                'password' => bcrypt('password'),
            ]
        );

        $gurus = [
            ['nip' => '197508122002121003', 'nama' => 'Drs. Ahmad Fauzi, M.Pd', 'mapel' => 'Matematika Terapan', 'wali_kelas' => 'XII RPL 1', 'status' => 'PNS / Tetap'],
            ['nip' => '198203152006042007', 'nama' => 'Siti Nurhaliza, S.Pd', 'mapel' => 'Bahasa Indonesia', 'wali_kelas' => 'XI TKJ 2', 'status' => 'PNS / Tetap'],
            ['nip' => '198911042019031012', 'nama' => 'Budi Santoso, M.Kom', 'mapel' => 'Pemrograman Web & Perangkat Bergerak', 'wali_kelas' => 'X PPLG 1', 'status' => 'PPPK'],
            ['nip' => '199105202022032009', 'nama' => 'Rina Wulandari, S.T', 'mapel' => 'Administrasi Infrastruktur Jaringan', 'wali_kelas' => 'XII TKJ 1', 'status' => 'PNS / Tetap'],
            ['nip' => '199407182024011005', 'nama' => 'Hendro Kusumo, S.Pd', 'mapel' => 'Pendidikan Jasmani & Olahraga', 'wali_kelas' => null, 'status' => 'GTT / Honorer'],
            ['nip' => '198609252010012015', 'nama' => 'Dewi Lestari, S.Pd, M.Hum', 'mapel' => 'Bahasa Inggris Kejuruan', 'wali_kelas' => 'XI RPL 1', 'status' => 'PNS / Tetap'],
            ['nip' => '197904112005011008', 'nama' => 'Drs. Bambang Haryanto', 'mapel' => 'Basis Data & Cloud Computing', 'wali_kelas' => 'XII RPL 2', 'status' => 'PNS / Tetap'],
            ['nip' => '198501102009022011', 'nama' => 'Nurul Hidayati, S.Kom', 'mapel' => 'Desain Grafis & UI/UX', 'wali_kelas' => 'XI DKV 1', 'status' => 'PNS / Tetap'],
            ['nip' => '199002142018011006', 'nama' => 'Eko Prasetyo, S.Pd', 'mapel' => 'Sejarah & Wawasan Kebangsaan', 'wali_kelas' => 'X TJKT 2', 'status' => 'PPPK'],
            ['nip' => '198806222014022004', 'nama' => 'Ratna Sari, S.E, M.M', 'mapel' => 'Produk Kreatif & Kewirausahaan', 'wali_kelas' => 'XI AKL 1', 'status' => 'PNS / Tetap'],
            ['nip' => '199203172020011003', 'nama' => 'Fajar Nugroho, S.Kom', 'mapel' => 'Teknologi Layanan Jaringan', 'wali_kelas' => 'XII TKJ 2', 'status' => 'PPPK'],
            ['nip' => '199510122023022008', 'nama' => 'Lestari Anggraini, S.Sn', 'mapel' => 'Seni Budaya & Ilustrasi Digital', 'wali_kelas' => null, 'status' => 'GTT / Honorer'],
            ['nip' => '197802142003121002', 'nama' => 'Ir. Gunawan Wibisono, M.T', 'mapel' => 'Sistem Komputer & Mikrokontroler', 'wali_kelas' => 'XII TKJ 3', 'status' => 'PNS / Tetap'],
            ['nip' => '198307192008012014', 'nama' => 'Maya Indah Permatasari, S.Pd', 'mapel' => 'Bimbingan & Konseling (BK)', 'wali_kelas' => null, 'status' => 'PNS / Tetap'],
            ['nip' => '198712032015031007', 'nama' => 'Rizky Pratama, S.Kom', 'mapel' => 'Keamanan Jaringan & Cyber Security', 'wali_kelas' => 'XI TJKT 1', 'status' => 'PPPK'],
            ['nip' => '199304252021022006', 'nama' => 'Anisa Rahmawati, S.E', 'mapel' => 'Akuntansi Dasar & Keuangan', 'wali_kelas' => 'X AKL 2', 'status' => 'PPPK'],
            ['nip' => '199608152024021004', 'nama' => 'Yoga Ardiansyah, S.Pd', 'mapel' => 'Pendidikan Agama & Budi Pekerti', 'wali_kelas' => null, 'status' => 'GTT / Honorer'],
            ['nip' => '198109092007011010', 'nama' => 'Drs. H. Mulyadi, M.M', 'mapel' => 'Manajemen Perkantoran Digital', 'wali_kelas' => 'XII MPLB 1', 'status' => 'PNS / Tetap'],
            ['nip' => '198411202011012008', 'nama' => 'Fitria Dian Anggraeni, S.Ds', 'mapel' => 'Videografi & Animasi 2D/3D', 'wali_kelas' => 'XII DKV 2', 'status' => 'PNS / Tetap'],
            ['nip' => '199005182019031011', 'nama' => 'Wahyu Hidayat, S.Kom', 'mapel' => 'Pemrograman Berorientasi Objek', 'wali_kelas' => 'XI PPLG 2', 'status' => 'PPPK'],
            ['nip' => '199312102022032013', 'nama' => 'Sari Indriyani, S.Pd', 'mapel' => 'Matematika Kejuruan', 'wali_kelas' => 'X DKV 1', 'status' => 'PPPK'],
            ['nip' => '199501042023011009', 'nama' => 'Danang Tri Wicaksono, S.T', 'mapel' => 'Teknologi IoT & Robotika', 'wali_kelas' => null, 'status' => 'GTT / Honorer'],
            ['nip' => '198804152014022005', 'nama' => 'Kartika Dewi, S.Pd', 'mapel' => 'Bahasa Jepang Pilihan', 'wali_kelas' => 'XI MPLB 2', 'status' => 'PNS / Tetap'],
            ['nip' => '198006282006041009', 'nama' => 'Drs. Sugeng Waluyo', 'mapel' => 'Pendidikan Pancasila (PPKn)', 'wali_kelas' => 'X MPLB 1', 'status' => 'PNS / Tetap'],
        ];

        foreach ($gurus as $g) {
            Guru::updateOrCreate(['nip' => $g['nip']], $g);
        }

        $siswas = [
            ['nisn' => '0071238491', 'nama' => 'Aditya Pratama Putra', 'kelas' => 'XII RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0072938472', 'nama' => 'Anindya Putri Rahayu', 'kelas' => 'XII RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0083948172', 'nama' => 'Dimas Bagus Wicaksono', 'kelas' => 'XI TKJ 2', 'jurusan' => 'Teknik Komputer & Jaringan', 'status' => 'Aktif'],
            ['nisn' => '0084928174', 'nama' => 'Farhan Rizky Maulana', 'kelas' => 'XI RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0091827364', 'nama' => 'Kayla Zahra Salsabila', 'kelas' => 'X PPLG 1', 'jurusan' => 'Pengembangan Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0092837465', 'nama' => 'Muhammad Naufal Izzudin', 'kelas' => 'X PPLG 1', 'jurusan' => 'Pengembangan Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0078192834', 'nama' => 'Bagus Setiawan', 'kelas' => 'XII RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0089201928', 'nama' => 'Cantika Ayu Wardani', 'kelas' => 'XI DKV 1', 'jurusan' => 'Desain Komunikasi Visual', 'status' => 'Aktif'],
            ['nisn' => '0098192831', 'nama' => 'Danendra Arya Sakti', 'kelas' => 'X TJKT 2', 'jurusan' => 'Teknik Jaringan Komputer', 'status' => 'Aktif'],
            ['nisn' => '0073918294', 'nama' => 'Fiona Aurelia Putri', 'kelas' => 'XII TKJ 1', 'jurusan' => 'Teknik Komputer & Jaringan', 'status' => 'Aktif'],
            ['nisn' => '0084918203', 'nama' => 'Galih Firmansyah', 'kelas' => 'XI RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0095819204', 'nama' => 'Hana Shofia Maharani', 'kelas' => 'X AKL 1', 'jurusan' => 'Akuntansi Keuangan Lembaga', 'status' => 'Aktif'],
            ['nisn' => '0074829102', 'nama' => 'Irfan Maulana Hakim', 'kelas' => 'XII RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0085930214', 'nama' => 'Jessica Nathania', 'kelas' => 'XI DKV 2', 'jurusan' => 'Desain Komunikasi Visual', 'status' => 'Aktif'],
            ['nisn' => '0096041325', 'nama' => 'Kevin Sanjaya Pratama', 'kelas' => 'X TJKT 1', 'jurusan' => 'Teknik Jaringan Komputer', 'status' => 'Aktif'],
            ['nisn' => '0075938201', 'nama' => 'Lutfi Hakim Ramadhan', 'kelas' => 'XII TKJ 2', 'jurusan' => 'Teknik Komputer & Jaringan', 'status' => 'Aktif'],
            ['nisn' => '0086049312', 'nama' => 'Nadya Safitri Utami', 'kelas' => 'XI AKL 1', 'jurusan' => 'Akuntansi Keuangan Lembaga', 'status' => 'Aktif'],
            ['nisn' => '0097150423', 'nama' => 'Pandu Wijaya Kusuma', 'kelas' => 'X MPLB 1', 'jurusan' => 'Manajemen Perkantoran', 'status' => 'Aktif'],
            ['nisn' => '0076049315', 'nama' => 'Rahmat Hidayatullah', 'kelas' => 'XII RPL 2', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0087150426', 'nama' => 'Salma Nur Azizah', 'kelas' => 'XI RPL 1', 'jurusan' => 'Rekayasa Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0098261537', 'nama' => 'Taufik Rahman Hidayat', 'kelas' => 'X PPLG 2', 'jurusan' => 'Pengembangan Perangkat Lunak', 'status' => 'Aktif'],
            ['nisn' => '0077150428', 'nama' => 'Vina Febriani', 'kelas' => 'XII MPLB 1', 'jurusan' => 'Manajemen Perkantoran', 'status' => 'Aktif'],
            ['nisn' => '0088261539', 'nama' => 'Zaky Mubarok', 'kelas' => 'XI TKJ 1', 'jurusan' => 'Teknik Komputer & Jaringan', 'status' => 'Aktif'],
            ['nisn' => '0099372640', 'nama' => 'Aldo Bagaskara', 'kelas' => 'X TJKT 2', 'jurusan' => 'Teknik Jaringan Komputer', 'status' => 'Aktif'],
        ];

        foreach ($siswas as $s) {
            Siswa::updateOrCreate(['nisn' => $s['nisn']], $s);
        }

        $mapels = [
            ['kode' => 'MP-01', 'nama' => 'Matematika Terapan', 'kelompok' => 'Muatan Umum', 'beban_jam' => '4 JP / Minggu', 'koordinator' => 'Drs. Ahmad Fauzi, M.Pd'],
            ['kode' => 'MP-02', 'nama' => 'Bahasa Indonesia', 'kelompok' => 'Muatan Umum', 'beban_jam' => '3 JP / Minggu', 'koordinator' => 'Siti Nurhaliza, S.Pd'],
            ['kode' => 'MP-03', 'nama' => 'Bahasa Inggris Kejuruan', 'kelompok' => 'Muatan Umum', 'beban_jam' => '3 JP / Minggu', 'koordinator' => 'Dewi Lestari, S.Pd, M.Hum'],
            ['kode' => 'MP-04', 'nama' => 'Pemrograman Web & Perangkat Bergerak', 'kelompok' => 'Konsentrasi Kejuruan (RPL)', 'beban_jam' => '8 JP / Minggu', 'koordinator' => 'Budi Santoso, M.Kom'],
            ['kode' => 'MP-05', 'nama' => 'Basis Data & Cloud Computing', 'kelompok' => 'Konsentrasi Kejuruan (RPL)', 'beban_jam' => '6 JP / Minggu', 'koordinator' => 'Drs. Bambang Haryanto'],
            ['kode' => 'MP-06', 'nama' => 'Administrasi Infrastruktur Jaringan', 'kelompok' => 'Konsentrasi Kejuruan (TKJ)', 'beban_jam' => '8 JP / Minggu', 'koordinator' => 'Rina Wulandari, S.T'],
            ['kode' => 'MP-07', 'nama' => 'Keamanan Jaringan & Cyber Security', 'kelompok' => 'Konsentrasi Kejuruan (TKJ)', 'beban_jam' => '6 JP / Minggu', 'koordinator' => 'Rizky Pratama, S.Kom'],
            ['kode' => 'MP-08', 'nama' => 'Desain Grafis & UI/UX', 'kelompok' => 'Konsentrasi Kejuruan (DKV)', 'beban_jam' => '6 JP / Minggu', 'koordinator' => 'Nurul Hidayati, S.Kom'],
            ['kode' => 'MP-09', 'nama' => 'Videografi & Animasi 2D/3D', 'kelompok' => 'Konsentrasi Kejuruan (DKV)', 'beban_jam' => '6 JP / Minggu', 'koordinator' => 'Fitria Dian Anggraeni, S.Ds'],
            ['kode' => 'MP-10', 'nama' => 'Produk Kreatif & Kewirausahaan (PKK)', 'kelompok' => 'Kejuruan Terpadu', 'beban_jam' => '5 JP / Minggu', 'koordinator' => 'Ratna Sari, S.E, M.M'],
            ['kode' => 'MP-11', 'nama' => 'Pendidikan Jasmani & Olahraga', 'kelompok' => 'Muatan Umum', 'beban_jam' => '3 JP / Minggu', 'koordinator' => 'Hendro Kusumo, S.Pd'],
            ['kode' => 'MP-12', 'nama' => 'Pendidikan Pancasila (PPKn)', 'kelompok' => 'Muatan Umum', 'beban_jam' => '2 JP / Minggu', 'koordinator' => 'Drs. Sugeng Waluyo'],
            ['kode' => 'MP-13', 'nama' => 'Akuntansi Dasar & Keuangan', 'kelompok' => 'Konsentrasi Kejuruan (AKL)', 'beban_jam' => '6 JP / Minggu', 'koordinator' => 'Anisa Rahmawati, S.E'],
            ['kode' => 'MP-14', 'nama' => 'Manajemen Perkantoran Digital', 'kelompok' => 'Konsentrasi Kejuruan (MPLB)', 'beban_jam' => '6 JP / Minggu', 'koordinator' => 'Drs. H. Mulyadi, M.M'],
        ];

        foreach ($mapels as $m) {
            Mapel::updateOrCreate(['kode' => $m['kode']], $m);
        }

        $jadwals = [
            ['hari' => 'Senin', 'waktu' => '07:00 - 09:15', 'kelas' => 'XII RPL 1', 'mapel' => 'Pemrograman Web', 'ruang' => 'Lab RPL 1', 'guru' => 'Budi Santoso, M.Kom'],
            ['hari' => 'Senin', 'waktu' => '09:30 - 11:45', 'kelas' => 'XII TKJ 1', 'mapel' => 'Infrastruktur Jaringan', 'ruang' => 'Lab Jaringan', 'guru' => 'Rina Wulandari, S.T'],
            ['hari' => 'Senin', 'waktu' => '12:30 - 14:45', 'kelas' => 'XI DKV 1', 'mapel' => 'Desain UI/UX', 'ruang' => 'Lab Multimedia', 'guru' => 'Nurul Hidayati, S.Kom'],
            ['hari' => 'Selasa', 'waktu' => '07:00 - 09:15', 'kelas' => 'X PPLG 1', 'mapel' => 'Dasar Pemrograman', 'ruang' => 'Lab RPL 2', 'guru' => 'Wahyu Hidayat, S.Kom'],
            ['hari' => 'Selasa', 'waktu' => '09:30 - 11:45', 'kelas' => 'XI RPL 1', 'mapel' => 'Basis Data & SQL', 'ruang' => 'Lab Komp 3', 'guru' => 'Drs. Bambang Haryanto'],
            ['hari' => 'Selasa', 'waktu' => '12:30 - 14:45', 'kelas' => 'XII TKJ 2', 'mapel' => 'Cyber Security', 'ruang' => 'Lab Server', 'guru' => 'Rizky Pratama, S.Kom'],
            ['hari' => 'Rabu', 'waktu' => '07:00 - 09:15', 'kelas' => 'XI AKL 1', 'mapel' => 'Akuntansi Komputer', 'ruang' => 'R. AKL 1', 'guru' => 'Anisa Rahmawati, S.E'],
            ['hari' => 'Rabu', 'waktu' => '09:30 - 11:45', 'kelas' => 'XII RPL 1', 'mapel' => 'Bahasa Inggris Kejuruan', 'ruang' => 'R. 302', 'guru' => 'Dewi Lestari, S.Pd, M.Hum'],
            ['hari' => 'Rabu', 'waktu' => '12:30 - 14:45', 'kelas' => 'X TJKT 2', 'mapel' => 'Matematika Terapan', 'ruang' => 'R. 201', 'guru' => 'Drs. Ahmad Fauzi, M.Pd'],
            ['hari' => 'Kamis', 'waktu' => '07:00 - 09:15', 'kelas' => 'XI MPLB 1', 'mapel' => 'Manajemen Perkantoran', 'ruang' => 'R. MPLB', 'guru' => 'Drs. H. Mulyadi, M.M'],
            ['hari' => 'Kamis', 'waktu' => '09:30 - 11:45', 'kelas' => 'XII DKV 2', 'mapel' => 'Animasi & Videografi', 'ruang' => 'Studio Foto', 'guru' => 'Fitria Dian Anggraeni, S.Ds'],
            ['hari' => 'Jumat', 'waktu' => '07:00 - 08:30', 'kelas' => 'X PPLG 1', 'mapel' => 'Pendidikan Jasmani', 'ruang' => 'Lapangan Utama', 'guru' => 'Hendro Kusumo, S.Pd'],
        ];

        foreach ($jadwals as $j) {
            Jadwal::updateOrCreate([
                'hari' => $j['hari'],
                'waktu' => $j['waktu'],
                'kelas' => $j['kelas'],
                'mapel' => $j['mapel'],
            ], $j);
        }

        $nilais = [
            ['nisn' => '0071238491', 'nama' => 'Aditya Pratama Putra', 'tugas' => 88, 'uts' => 85, 'uas' => 90, 'nilai_akhir' => 87.7, 'predikat' => 'A', 'status' => 'Tuntas'],
            ['nisn' => '0072938472', 'nama' => 'Anindya Putri Rahayu', 'tugas' => 92, 'uts' => 94, 'uas' => 95, 'nilai_akhir' => 93.7, 'predikat' => 'A+', 'status' => 'Tuntas'],
            ['nisn' => '0083948172', 'nama' => 'Dimas Bagus Wicaksono', 'tugas' => 78, 'uts' => 76, 'uas' => 80, 'nilai_akhir' => 78.0, 'predikat' => 'B', 'status' => 'Tuntas'],
            ['nisn' => '0084928174', 'nama' => 'Farhan Rizky Maulana', 'tugas' => 85, 'uts' => 80, 'uas' => 84, 'nilai_akhir' => 83.0, 'predikat' => 'B+', 'status' => 'Tuntas'],
            ['nisn' => '0091827364', 'nama' => 'Kayla Zahra Salsabila', 'tugas' => 90, 'uts' => 88, 'uas' => 92, 'nilai_akhir' => 90.0, 'predikat' => 'A', 'status' => 'Tuntas'],
            ['nisn' => '0078192834', 'nama' => 'Bagus Setiawan', 'tugas' => 82, 'uts' => 79, 'uas' => 85, 'nilai_akhir' => 82.0, 'predikat' => 'B+', 'status' => 'Tuntas'],
            ['nisn' => '0089201928', 'nama' => 'Cantika Ayu Wardani', 'tugas' => 86, 'uts' => 84, 'uas' => 88, 'nilai_akhir' => 86.0, 'predikat' => 'A', 'status' => 'Tuntas'],
            ['nisn' => '0098192831', 'nama' => 'Danendra Arya Sakti', 'tugas' => 80, 'uts' => 78, 'uas' => 82, 'nilai_akhir' => 80.0, 'predikat' => 'B+', 'status' => 'Tuntas'],
            ['nisn' => '0073918294', 'nama' => 'Fiona Aurelia Putri', 'tugas' => 94, 'uts' => 92, 'uas' => 96, 'nilai_akhir' => 94.0, 'predikat' => 'A+', 'status' => 'Tuntas'],
            ['nisn' => '0084918203', 'nama' => 'Galih Firmansyah', 'tugas' => 75, 'uts' => 74, 'uas' => 78, 'nilai_akhir' => 75.7, 'predikat' => 'B', 'status' => 'Tuntas'],
            ['nisn' => '0095819204', 'nama' => 'Hana Shofia Maharani', 'tugas' => 89, 'uts' => 87, 'uas' => 91, 'nilai_akhir' => 89.0, 'predikat' => 'A', 'status' => 'Tuntas'],
            ['nisn' => '0074829102', 'nama' => 'Irfan Maulana Hakim', 'tugas' => 87, 'uts' => 85, 'uas' => 89, 'nilai_akhir' => 87.0, 'predikat' => 'A', 'status' => 'Tuntas'],
            ['nisn' => '0085930214', 'nama' => 'Jessica Nathania', 'tugas' => 95, 'uts' => 96, 'uas' => 98, 'nilai_akhir' => 96.3, 'predikat' => 'A+', 'status' => 'Tuntas'],
            ['nisn' => '0096041325', 'nama' => 'Kevin Sanjaya Pratama', 'tugas' => 83, 'uts' => 80, 'uas' => 85, 'nilai_akhir' => 82.7, 'predikat' => 'B+', 'status' => 'Tuntas'],
        ];

        foreach ($nilais as $n) {
            Nilai::updateOrCreate(['nisn' => $n['nisn']], $n);
        }

        $pikets = [
            ['nama_guru' => 'Drs. Ahmad Fauzi, M.Pd', 'pos' => 'Gerbang Utama & Pos Keamanan', 'shift' => '06:30 - 12:00'],
            ['nama_guru' => 'Siti Nurhaliza, S.Pd', 'pos' => 'Lobi Utama & Ruang Tamu', 'shift' => '07:00 - 14:00'],
            ['nama_guru' => 'Budi Santoso, M.Kom', 'pos' => 'Pusat Laboratorium Komputer', 'shift' => '08:00 - 15:30'],
            ['nama_guru' => 'Rina Wulandari, S.T', 'pos' => 'Gedung Bengkel Praktik', 'shift' => '07:00 - 13:00'],
        ];

        foreach ($pikets as $p) {
            PiketGuru::updateOrCreate(['nama_guru' => $p['nama_guru'], 'pos' => $p['pos']], $p);
        }

        $agendas = [
            ['judul' => 'Rapat Pleno Dewan Guru & Staff', 'deskripsi' => 'Evaluasi KBM dan persiapan Uji Kompetensi Keahlian (UKK)', 'tanggal' => '05 Okt 2025'],
            ['judul' => 'Simulasi Asesmen Nasional Berbasis Komputer (ANBK)', 'deskripsi' => 'Khusus siswa kelas XI di Laboratorium RPL & TKJ', 'tanggal' => '12 Okt 2025'],
            ['judul' => 'Kunjungan Industri & Sinkronisasi Kurikulum DUDI', 'deskripsi' => 'Kunjungan mitra industri teknologi informasi', 'tanggal' => '18 Okt 2025'],
            ['judul' => 'Penerimaan Laporan Hasil Belajar (LHB) Tengah Semester', 'deskripsi' => 'Pengambilan rapor evaluasi oleh orang tua/wali murid', 'tanggal' => '24 Okt 2025'],
        ];

        foreach ($agendas as $a) {
            Agenda::updateOrCreate(['judul' => $a['judul']], $a);
        }
    }
}
