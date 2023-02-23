<?php

use App\Http\Controllers\kodigoCrud;
use App\Models\kodigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::post('/kodigoShow',[kodigoCrud::class,'index']);
Route::post('/kodigoinsert',[kodigoCrud::class,'store']);
Route::get('/kodigoShowId/{id}',[kodigoCrud::class,'show']);
Route::put('/kodigoUpDate/{id}',[kodigoCrud::class,'update']);
Route::delete('/kodigoDelete/{id}',[kodigoCrud::class,'destroy']);*/

Route::apiResource('/kodigo', kodigoCrud::class);// Rutas para las areas
