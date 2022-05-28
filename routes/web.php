<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/admin/home', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin/account', [DashboardController::class, 'akun'])->middleware('auth');


Route::get('/admin/client', [ClientController::class, 'client'])->middleware('auth');
Route::get('/admin/client/add', [ClientController::class, 'addClient'])->middleware('auth');
Route::post('/admin/client/add',[ClientController::class, 'add'])->middleware('auth');
Route::get('/admin/client/edit/{id}',[ClientController::class, 'editclient'])->middleware('auth');
Route::put('/admin/client/edit/{id}',[ClientController::class, 'update'])->middleware('auth');
Route::get('/admin/client/delete/{id}',[ClientController::class, 'delete'])->middleware('auth');

Route::get('/admin/money/debitkredit/{id}', [ClientController::class, 'editMoney'])->middleware('auth');
Route::put('/admin/money/debitkredit/{id}', [ClientController::class, 'updateMoney'])->middleware('auth');
Route::get('/admin/money/riwayat/{id}', [ClientController::class, 'riwayat'])->middleware('auth');
Route::get('/admin/money/print', [ClientController::class, 'printMoney'])->middleware('auth');



Route::get('/admin/clients', [DashboardController::class, 'getClients'])->name('clients.list')->middleware('auth');
Route::get('/admin/money', [DashboardController::class, 'money'])->middleware('auth');
Route::get('/admin/moneys', [DashboardController::class, 'getMoneys'])->name('money.list')->middleware('auth');
Route::get('/admin/settings', [DashboardController::class, 'settings'])->middleware('auth');
Route::put('/admin/settings/edit', [DashboardController::class, 'update'])->middleware('auth');
