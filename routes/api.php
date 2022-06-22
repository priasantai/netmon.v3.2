<?php

use App\Http\Controllers\Api\FoController;
use App\Http\Controllers\Api\ServerController;
use App\Http\Controllers\Api\WirelessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('fo', [FoController::class, 'index']);
Route::get('server', [ServerController::class, 'index']);
Route::get('wireless', [WirelessController::class, 'index']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
