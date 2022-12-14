<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UslugaController;

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

Route::get('/', [UslugaController::class, 'showPublicUsl'])->name('index');

//Заявки
Route::get('/home/{usl}/add', [ApplicationController::class, 'showAddAppForm'])->name('app.add')->middleware('user');
Route::post('/home/{usl}', [ApplicationController::class, 'storeApp'])->name('app.store')->middleware('user');
Route::get('/home/{app}/delete', [ApplicationController::class, 'showDeleteAppForm'])->name('app.delete')->middleware('user');
Route::delete('/home/{app}', [ApplicationController::class, 'destroyApp'])->name('app.destroy')->middleware('user');
Route::get('/admin/app', [ApplicationController::class, 'showAllAds'])->name('admin.app')->middleware('admin');
Route::get('/admin/{app}/status', [ApplicationController::class, 'showChangeStatusForm'])->name('status.app')->middleware('admin');
Route::patch('/admin/{app}', [ApplicationController::class, 'updateApp'])->name('update.app')->middleware('admin');

// Админ-панель
Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('admin');
Route::get('/admin/usl', [UslugaController::class, 'showUsl'])->name('admin.usl')->middleware('admin');

Route::get('/admin/usl/add', [UslugaController::class, 'showAddUslForm'])->name('admin.usl.add')->middleware('admin');
Route::post('/admin/usl/add', [UslugaController::class, 'storeUsl'])->name('usl.store')->middleware('admin');

Route::get('/admin/usl/{usl}/edit', [UslugaController::class, 'showEditUslForm'])->name('usl.edit')->middleware('admin');
Route::patch('/admin/usl/{usl}/edit', [UslugaController::class, 'updateUsl'])->name('usl.update')->middleware('admin');

Route::get('/admin/usl/{usl}/delete', [UslugaController::class, 'showDeleteUslForm'])->name('usl.delete')->middleware('admin');
Route::delete('/admin/{usl}', [UslugaController::class, 'destroyUsl'])->name('usl.destroy')->middleware('admin');

// Услуги
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');