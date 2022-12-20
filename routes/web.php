<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UslugaController;

// Главная страница
Route::get('/', function () {
    return view('index');
})->name('index');

// Услуги
Route::get('/usl', [UslugaController::class, 'showPublicUsl'])->name('public.usl');

// Авторизация
Auth::routes();

// Личный кабинет
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Работа пользователя
Route::middleware(['user'])->group(function () {
    // Открыть форму добавления заявки
    Route::get('/home/{usl}/add', [ApplicationController::class, 'showAddAppForm'])->name('app.add');
    // Добавлене заявки
    Route::post('/home/{usl}', [ApplicationController::class, 'storeApp'])->name('app.store');

    // Открыть форму удаления услуги
    Route::get('/home/{app}/delete', [ApplicationController::class, 'showDeleteAppForm'])->name('app.delete')->middleware('can:destroy,app');
    // Удаление заявки
    Route::delete('/home/{app}/delete', [ApplicationController::class, 'destroyApp'])->name('app.destroy')->middleware('can:destroy,app');
});

// Админ-панель
Route::middleware(['admin'])->group(function () {
    // Открыть админ-панель
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

    // Открыть раздел услуги
    Route::get('/admin/usl', [UslugaController::class, 'showUsl'])->name('admin.usl');
 
    // Открыть форму добавления услуги
    Route::get('/admin/usl/add', [UslugaController::class, 'showAddUslForm'])->name('admin.usl.add');
    // Добавиить услугу
    Route::post('/admin/usl/add', [UslugaController::class, 'storeUsl'])->name('usl.store');

    // Открыть форму редактирования услуги
    Route::get('/admin/usl/{usl}/edit', [UslugaController::class, 'showEditUslForm'])->name('usl.edit');
    // Обновление услуги
    Route::patch('/admin/usl/{usl}/edit', [UslugaController::class, 'updateUsl'])->name('usl.update');

    // Открыть форму удаления услуги
    Route::get('/admin/usl/{usl}/delete', [UslugaController::class, 'showDeleteUslForm'])->name('usl.delete');
    // Удаление услуги
    Route::delete('/admin/{usl}', [UslugaController::class, 'destroyUsl'])->name('usl.destroy');

    // Открыть раздел заявки
    Route::get('/admin/app', [ApplicationController::class, 'showAllAds'])->name('admin.app')->middleware('admin');

    // Открыть форму редактирования статуса заявки
    Route::get('/admin/{app}/status', [ApplicationController::class, 'showChangeStatusForm'])->name('status.app')->middleware('admin');
    // Редактировать статус заявки
    Route::patch('/admin/{app}', [ApplicationController::class, 'updateApp'])->name('update.app')->middleware('admin');

    // Открыть форму удаления заявки
    Route::get('/admin/app/{app}/delete', [ApplicationController::class, 'showAdminAppDeleteForm'])->name('app.admin.delete');
    // Удаление заявки
    Route::delete('/admin/app/{app}/destroy', [ApplicationController::class, 'destroyAppAdmin'])->name('app.admin.destroy');
});