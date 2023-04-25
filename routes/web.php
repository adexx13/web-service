<?php

use App\Http\Controllers\MahasiswaC;
use App\Http\Controllers\ProfileC;
use App\Http\Controllers\SoalController;

use Illuminate\Support\Facades\Route;



Route::get('/about', function(){
    return view('about');
})->name('tentang-saya');

Route::get('/profile',[ProfileC::class,'index']);

Route::get('/nama', function(){
    return 'Adex Advaita Hary';
});

Route::get('/dari-view', function(){
    return view('home');
});

Route::view('master', 'template/master');

//route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaC::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaC::class, 'create']);
Route::post('simpan-mahasiswa', [MahasiswaC::class, 'store']);
Route::delete('delete-mahasiswa/{id}', [MahasiswaC::class, 'destroy'])->name('delete.mahasiswa');

//route untuk soal
Route::get('soal', [SoalController::class, 'index'])->name('soal.index');
Route::get('soal/create', [SoalController::class, 'create'])->name('soal.create');
Route::PUT('soal/store', [SoalController::class, 'store'])->name('soal.store');
Route::get('soal/edit/{soal}', [SoalController::class, 'edit'])->name('soal.edit');
Route::PUT('soal/update/{soal}', [SoalController::class, 'update'])->name('soal.update');
Route::delete('soal/{id}', [SoalController::class, 'delete'])->name('soal.delete');
