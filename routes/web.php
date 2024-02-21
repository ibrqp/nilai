<?php

use App\Http\Controllers\DudiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PengajarController;
<<<<<<< HEAD
use App\Http\Controllers\SiswaController;
=======
use App\Http\Controllers\PklController;
use App\Http\Controllers\SiswaController;
use App\Models\Dudi;
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141
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

<<<<<<< HEAD
Route::resource('guru',GuruController::class);
Route::resource('mapel',MapelController::class);
Route::resource('siswa',SiswaController::class);
Route::resource('nilai',NilaiController::class);
=======
// Route::resource('guru',GuruController::class);
// Route::resource('mapel',MapelController::class);
// Route::resource('pengajar',PengajarController::class);

Route::resource('siswa', SiswaController::class);
Route::resource('dudi', DudiController::class);
Route::resource('pkl', PklController::class);
>>>>>>> 4ccc187f8b2ca78fb0889db4dee66b27996db141
