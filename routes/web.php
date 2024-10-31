<?php

use App\Http\Controllers\pegawaiController;
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

Route::get('/', [pegawaiController::class, 'index']);


Route::get('mahasiswa.edit', [pegawaiController::class, 'edit'])->name('edit');
Route::get('mahasiswa.tambah', [pegawaiController::class, 'tambah'])->name('tambah');

Route::get('/mahasiswa', [pegawaiController::class, 'index'])->name('getalldataPegawai');
Route::post('/mahasiswa', [pegawaiController::class, 'createData'])->name('createDataPegawai');

Route::get('/mahasiswa/get/{id}', [pegawaiController::class, 'getDataById'])->name('getDataByIdPegawai');
Route::post('/mahasiswa/update/{id}', [pegawaiController::class, 'updateData'])->name('updateDataPegawai');
Route::delete('/mahasiswa/delete/{id}', [pegawaiController::class, 'deleteData'])->name('deleteDataPegawai');