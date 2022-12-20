<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\DokterDashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PasienDashboardController;

use App\Http\Controllers\PerawatDashboardController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ObatDashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembayaranDashboardController;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('dashboard.index');
});
// Route::get('/register', function () {
//     return view('register');
// });

Route::get ('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post ('/logout', [LoginController::class,'logout']);
Route::post ('/login', [LoginController::class,'authenticate']);

Route::resource('register', RegisterController::class);


Route::resource('dokter', DokterController::class);
Route::resource('pasien', PasienController::class);
Route::resource('obat', ObatController::class);
Route::resource('pembayaran', PembayaranController::class);

//Dashboard
Route::resource('dokterdashboard', DokterDashboardController::class);
Route::resource('pasiendashboard', PasienDashboardController::class);

Route::resource('perawatdashboard', PerawatDashboardController::class);
Route::resource('obatdashboard', ObatDashboardController::class);
Route::resource('pembayarandashboard', PembayaranDashboardController::class);
