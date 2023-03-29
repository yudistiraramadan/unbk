<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UjianController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/daftar-ujian', [UjianController::class, 'index'])->name('ujian');
    Route::get('/tambah-ujian', [UjianController::class, 'create'])->name('createujian');
    Route::post('/insert-ujian', [UjianController::class, 'insert'])->name('insertujian');
    Route::get('/edit-ujian/{id}', [UjianController::class, 'edit'])->name('editujian');
    Route::post('/update-ujian/{id}', [UjianController::class, 'update'])->name('updateujian');
    Route::get('/hapus-ujian/{id}', [UjianController::class, 'delete'])->name('deleteujian');
});
