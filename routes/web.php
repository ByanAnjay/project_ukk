<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('login',[AdminController::class,'login']);
Route::post('login',[AdminController::class,'ceklogin']);
Route::get('dashboard',[AdminController::class,'dashboard']);
Route::get('barang',[AdminController::class,'barang']);
Route::get('tambahbarang',[AdminController::class,'tbarang']);
Route::get('tambah',[AdminController::class,'tambah']);
Route::post('tambah',[AdminController::class,'tambahk']);
Route::get('edit',[AdminController::class,'edit']);
Route::post('ubahbarang',[AdminController::class,'ubahbarang']);
