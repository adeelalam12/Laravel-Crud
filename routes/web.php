<?php

use App\Http\Controllers\AddRecordController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\RegController;
use GuzzleHttp\Middleware;
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

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/reg',[RegController::class,'index'])->name('Reg');
Route::post('/reg', [RegController::class, 'store'])->name('Reg');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);

Route::get('/logout', [logoutController::class, 'index'])->name('logout');

Route::get('/dashboard',[dashboardController::class, 'index'])->name('dashboard');


Route::post('/record', [RecordController::class, 'store'])->name('record');
Route::get('/customer/view', [RecordController::class, 'view'])->name('show_record');
Route::get('/customer/view/{id}', [RecordController::class, 'delete'])->name('delete');

Route::get('/customer/edit/{id}', [RecordController::class, 'edit'])->name('edit');
Route::post('/customer/update/{id}', [RecordController::class, 'update'])->name('update');



Route::get('/add_record', [RecordController::class, 'index'])->name('add_record');
