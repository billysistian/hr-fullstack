<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\KaryawanController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\TlogController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {

    Route::get('/me', [AuthController::class, 'me']);

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::apiResource('karyawan', KaryawanController::class);

    Route::get('/tlog', [TlogController::class, 'index']);

    Route::get('/report/pdf', [ReportController::class, 'pdf']);

});
