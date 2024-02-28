<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenyakitController;
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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth', 'user-access:Admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin.home');
    Route::get('/admin/penyakit', [PenyakitController::class, 'index'])->name('penyakit.index');
    Route::get('/admin/penyakit/create', [PenyakitController::class, 'create'])->name('penyakit.create');
    Route::post('/admin/penyakit/create', [PenyakitController::class, 'store'])->name('penyakit.store');
    Route::delete('/admin/penyakit/{penyakit}', [PenyakitController::class, 'destroy'])->name('penyakit.destroy');
    Route::get('/admin/penyakit/{penyakit}/edit', [PenyakitController::class, 'edit'])->name('penyakit.edit');
    Route::put('/admin/penyakit/{penyakit}', [PenyakitController::class, 'update'])->name('penyakit.update');
    

});
  
Route::middleware(['auth', 'user-access:Pasien'])->group(function () {
    Route::get('/home', [HomeController::class, 'pasien'])->name('home');
});

