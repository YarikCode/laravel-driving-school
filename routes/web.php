<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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
    return view('index');
});

Route::get('/home/add', [ApplicationController::class, 'showAddAppForm'])->name('app.add');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('admin');
Route::get('/admin/usl', [AdminController::class, 'showUsl'])->name('admin.usl')->middleware('admin');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
