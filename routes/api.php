<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinciaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Provincia
 */
Route::post('insertProvincias', [ProvinciaController::class, 'store']);
// Listar todas las provincias
Route::get('getAllProvincias', [ProvinciaController::class, 'index']);
// Listar un provincia
Route::get('getProvincia/{id}', [ProvinciaController::class, 'show']);
