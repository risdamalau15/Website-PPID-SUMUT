<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//home
Route::get('/', function () {
    return view('beranda');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/buletin-sumut', function () {
    return view('buletin-sumut');
});
//profil 
Route::get('/visi-misi', function () {
    return view('visi-misi');
});
Route::get('/organisasi-perangkat-daerah', function () {
    return view('organisasi-perangkat-daerah');
});
Route::get('/struktur-organisasi', function () {
    return view('struktur-organisasi');
});
Route::get('/tugas-dan-fungsi', function () {
    return view('tugas-dan-fungsi');
});
Route::get('/profil-pimpinan', function () {
    return view('profil-pimpinan');
});
Route::get('/profil-gubernur', function () {
    return view('profil-gubernur');
});
Route::get('/daftar-pejabat-struktural', function () {
    return view('daftar-pejabat-struktural');
});
Route::get('/satuan-dan-unit-kerja', function () {
    return view('satuan-dan-unit-kerja');
});
Route::get('/website-perangkat-daerah', function () {
    return view('website-perangkat-daerah');
});
//Informasi Publik 
Route::get('/daftar-informasi-dikecualikan', function () {
    return view('daftar-informasi-dikecualikan');
});
Route::get('/daftar-informasi-publik', function () {
    return view('daftar-informasi-publik');
});
Route::get('/informasi-belaka', function () {
    return view('informasi-belaka');
});
Route::get('/informasi-serta-merta', function () {
    return view('informasi-serta-merta');
});
Route::get('/informasi-setiap-saat', function () {
    return view('informasi-setiap-saat');
});
//Informasi PubliK PPID Pemprov SUMUT


Route::get('/profil-ppid', function () {
    return view('profil-ppid');
});
Route::get('/visi-dan-misi-ppid', function () {
    return view('visi-dan-misi-ppid');
});
Route::get('/struktur-organisasi-ppid', function () {
    return view('struktur-organisasi-ppid');
});
Route::get('/tugas-dan-fungsi-ppid', function () {
    return view('tugas-dan-fungsi-ppid');
});
Route::get('/dasar-hukum-ppid', function () {
    return view('dasar-hukum-ppid');
});
// Standar Layanan 

Route::get('/prosedur-pelayanan-informasi-publik', function () {
    return view('prosedur-pelayanan-informasi-publik');
});
Route::get('/prosedur-pengelolahaan-keberatan-informasi-publik', function () {
    return view('prosedur-pengelolahaan-keberatan-informasi-publik');
});
Route::get('/prosedur-permohonan-penyelesaian-sengketa-informasi', function () {
    return view('prosedur-permohonan-penyelesaian-sengketa-informasi');
});
Route::get('/prosedur-penanganan-sengketa-informasi', function () {
    return view('prosedur-penanganan-sengketa-informasi');
});
Route::get('/sop-ppid', function () {
    return view('sop-ppid');
});
Route::get('/kenal-layanan-informasi', function () {
    return view('kenal-layanan-informasi');
});
Route::get('/waktu-biaya-layanan', function () {
    return view('waktu-biaya-layanan');
});
Route::get('/maklumat-informasi-publik', function () {
    return view('maklumat-informasi-publik');
});
Route::get('/libur-nasional-dan-cuti-Bersama', function () {
    return view('libur-nasional-dan-cuti-Bersama');
});
// Berita
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/berita-sumut', function () {
    return view('berita-sumut');
});
Route::get('/berita-transparansi', function () {
    return view('berita-transparansi');
});
// Laporan

Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/laporan', function () {
    return view('laporan');
});
Route::get('/standlay', function () {
    return view('standlay');
});

Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/pps', function () {
    return view('Pemerintah Provinsi Sumut');
});
Route::get('/ppidprovinsisumut', function () {
    return view('ppid provinsi sumut');
});
Route::get('/daftarinformasipublikppidprovinsi', function () {
    return view('daftar informasi publik ppid provinsi');
});
Route::get('/daftarinformasipublikppidperangkatdaerah', function () {
    return view('daftar informasi publik ppid perangkat daerah');
});
Route::get('/dokumeninformasipublik', function () {
    return view('dokumen informasi publik');
});
// Berita
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/berita-sumut', function () {
    return view('berita-sumut');
});
Route::get('/berita-transparansi', function () {
    return view('berita-transparansi');
});
// Laporan Penprov SUMUT 
Route::get('/laporan-keuangan-pemerintah-daerah-lkpd', function () {
    return view('laporan-keuangan-pemerintah-daerah-lkpd');
});
Route::get('/laporan-kinerja-instansi-pemerintah-lkip', function () {
    return view('laporan-kinerja-instansi-pemerintah-lkip');
});
Route::get('/laporan-penyelenggaraan-pemerintahan-daerah-lppd', function () {
    return view('laporan-penyelenggaraan-pemerintahan-daerah-lppd');
});
// Laporan PPID 
Route::get('/laporan-ppid', function () {
    return view('laporan-ppid');
});
Route::get('/statistik-layanan-informasi-publik', function () {
    return view('statistik-layanan-informasi-publik');
});
Route::get('/survei-layanan-ppid', function () {
    return view('survei-layanan-ppid');
});
// Galeri 
Route::get('/foto-kegiatan', function () {
    return view('foto-kegiatan');
});
Route::get('/info-grafis', function () {
    return view('info-grafis');
});
Route::get('/video-informasi', function () {
    return view('video-informasi');
});
Route::get('/video-kegiatan', function () {
    return view('video-kegiatan');
});
Route::get('/komik-oke-sip', function () {
    return view('komik-oke-sip');
});
Route::get('/podcash-oke-sip', function () {
    return view('podcash-oke-sip');
});
// Kontak
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/kontak', function () {
    return view('kontak');
});
