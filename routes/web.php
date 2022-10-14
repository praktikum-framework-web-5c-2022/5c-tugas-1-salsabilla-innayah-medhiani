<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect ('/','/dosen');
Route::get('/dosen', function(){
    $dosens = ["Dadang Yusup, M.Kom.","Purwantoro, M.Kom.","Ultach Enri, M.Kom.","Susilawati, M.Si.",
    "Aji Primajaya, S.Si., M.Kom.","Adhi Rizal, S.Pd., M.T.","Intan Purnamasari, M.Kom.
    ","M. Jajuli, M.Si.","Tesa Nur Padilah, M.Sc.","Kamal Prihandani, M.Kom."];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Amanda Febrianti","Octavia Salwa Dzaky Fadhillah","Fauzan Arista Alamsyah","Zidan Arrofi","Fanny Suyantoputri","Tegar Pramudya","Wanda Taufik Ramdhan",
    "Salma Haya Amalia","Yahya Aiman","Sylfia Putri"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Metode Numerik","Jaringan Komputer","Basis Data",
    "Kalkulus","Kecerdasan Buatan","Pemrograman Berbasis Web","Pengantar Teknologi dan Informasi","Data Mining","Blockchain","Framework Berbasis Web"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');
