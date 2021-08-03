<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('file-manager', [\App\Http\Controllers\media\FileManagerController::class, 'index']);
Route::get('CREDITOR', [\App\Http\Controllers\media\FileManagerController::class, 'CREDITOR']);
Route::get('Gallery', [\App\Http\Controllers\media\FileManagerController::class, 'Gallery']);
