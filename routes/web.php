<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hewanController;
use App\Http\Controllers\shelterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/detail', [hewanController::class, 'index'])->name('hewan.listhewan');
Route::get('/home', [shelterController::class, 'index'])->name('shelter.shelter');
Route::get('/addopt', function () {
    return view('request.addopt');
});
Route::get('/toshelter', function () {
    return view('request.toShelter');
});

