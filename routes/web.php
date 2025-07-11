<?php

use App\Http\Controllers\AuthOTPController;
use App\Http\Controllers\HasilTestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputNamaController;
use App\Http\Controllers\SoalIEController;
use App\Http\Controllers\SoalJPController;
use App\Http\Controllers\SoalNSController;
use App\Http\Controllers\SoalTFController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('external.home');
Route::get('/inputnama', [InputNamaController::class, 'index'])->name('external.inputnama');
Route::post('/inputnama-action', [InputNamaController::class, 'inputnama'])->name('external.actioninputnama');
Route::get('/otp/verify', [AuthOTPController::class, 'showOtpVerifyForm'])->name('otp.verify.form');
Route::post('/otp/verify', [AuthOTPController::class, 'verifyOtp'])->name('otp.verify');
Route::middleware(['verified.otp'])->group(function () {
    Route::get('/soal1', [SoalIEController::class, 'index'])->name('external.soal1');
    Route::post('/soal1-action', [SoalIEController::class, 'inputdataIE'])->name('external.actioninputhasil');
    Route::get('/soal2', [SoalNSController::class, 'index'])->name('external.soal2');
    Route::post('/soal2-action', [SoalNSController::class, 'inputdataNS'])->name('external.actioninputhasil2');
    Route::get('/soal3', [SoalTFController::class, 'index'])->name('external.soal3');
    Route::post('/soal3-action', [SoalTFController::class, 'inputdataTF'])->name('external.actioninputhasil3');
    Route::get('/soal4', [SoalJPController::class, 'index'])->name('external.soal4');
    Route::post('/soal4-action', [SoalJPController::class, 'inputdataJP'])->name('external.actioninputhasil4');
    Route::get('/Hasil-proses', [HasilTestController::class, 'index'])->name('external.proseshasil');
});
