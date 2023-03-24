<?php

use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pegawai',PegawaiController::class);
// Route::post('/pegawai/create',[PegawaiController::class,'store']);