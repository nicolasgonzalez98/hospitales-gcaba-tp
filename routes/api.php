<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\HospitalController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/hospitales', [HospitalController::class, 'index']);
    Route::get('/hospitales/{hospital}', [HospitalController::class, 'show']);
    Route::post("/hospitales", [HospitalController::class, 'store']);
    Route::delete('/hospitales/delete/{id}', [HospitalController::class, 'destroy']);
    Route::put('/hospitales/{id}', [HospitalController::class, 'update']);
    Route::patch('/hospitales/{id}', [HospitalController::class, 'update']);
});