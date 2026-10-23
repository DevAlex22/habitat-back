<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteCRUDController;
use App\Http\Controllers\TipoFinanciamientoCRUDController;
use App\Http\Controllers\SolicitudCRUDController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('cliente', ClienteCRUDController::class);
Route::apiResource('tipo-financiamiento', TipoFinanciamientoCRUDController::class);
Route::apiResource('solicitud', SolicitudCRUDController::class);