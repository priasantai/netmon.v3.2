<?php

// namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoController;
use App\Http\Controllers\WirelessController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Ceklevel;

Route::get('/', [LoginController::class,'showLoginForm'])->name('login');

Route::group( ['middleware' => ['auth','ceklevel:admin']], function(){
    Route::get('/akses', [UserController::class,'index'])->name('akses');
    Route::get('/akses/tambahuser', [UserController::class,'tambahuser']);
    Route::post('/akses/create', [UserController::class,'store']);
    Route::get('/akses/aturuser/{id}',[UserController::class,'aturuser'])->name('aturuser');
    Route::post('/akses/update/{id}',[UserController::class,'update'])->name('userupdate');
    Route::get('/aksesdelete/{id}',[UserController::class,'destroy'])->name('akses');
});
Auth::routes();
Route::group( ['middleware' => ['auth','ceklevel:admin,user']], function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/fo', [FoController::class,'index'])->name('fo');
    Route::get('/fo/tambahfo', [FoController::class,'tambahfo']);
    Route::post('/fo/create', [FoController::class,'store']);
    Route::get('/fo/aturfo/{id}',[FoController::class,'aturfo'])->name('aturfo');
    Route::post('/fo/update/{id}',[FoController::class,'update'])->name('foupdate');
    Route::get('/fo/fodelete/{id}',[FoController::class,'destroy'])->name('fo');

    Route::get('/radio', [WirelessController::class,'index'])->name('radio');
    Route::get('/radio/tambahwireless', [WirelessController::class,'tambahwireless']);
    Route::post('/radio/create', [WirelessController::class,'store']);
    Route::get('/radio/aturwireless/{id}',[WirelessController::class,'aturwireless'])->name('aturwireless');
    Route::post('/radio/update/{id}',[WirelessController::class,'update'])->name('radioupdate');
    Route::get('/radiodelete/{id}',[WirelessController::class,'destroy'])->name('radio');

    Route::get('/server', [ServerController::class,'index'])->name('server');
    Route::get('/server/tambahserver', [ServerController::class,'tambahserver']);
    Route::post('/server/create', [ServerController::class,'store']);
    Route::get('/server/aturserver/{id}',[ServerController::class,'aturserver'])->name('aturserver');
    Route::post('/server/update/{id}',[ServerController::class,'update'])->name('serverupdate');
    Route::get('/serverdelete/{id}',[ServerController::class,'destroy'])->name('server');
});
