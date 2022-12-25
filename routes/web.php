<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UslugaController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\GroupController;

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

    // Открыть вкладку обучение
    Route::get('/home/lessons', [LessonController::class, 'showLessons'])->name('lessons')->middleware('verified.user');
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

    // Раздел группы
    Route::get('/admin/groups', [GroupController::class, 'showGroups'])->name('admin.groups');

    // Открыть форму создания группы
    Route::get('/admin/groups/add', [GroupController::class, 'showAddForm'])->name('admin.groups.add');
    // Сохранить новую группу
    Route::post('/admin/groups/add', [GroupController::class, 'storeGroup'])->name('admin.groups.store');

    // Открыть форму исключения пользователя из группы
    Route::get('/admin/{user}/exclude', [GroupController::class, 'showFormExcludeUser'])->name('admin.user.exclude.form');
    // Исключить пользователя из группы
    Route::post('/admin/{user}/exclude', [GroupController::class, 'excludeUser'])->name('admin.user.exclude');

    // Открыть форму редактирования группы
    Route::get('/admin/groups/{group}/edit', [GroupController::class, 'showUpdateForm'])->name('admin.groups.edit');
    // Редактировать группу
    Route::patch('/admin/groups/{group}/edit', [GroupController::class, 'updateGroup'])->name('admin.groups.update');

    // Открыть форму удаления группы
    Route::get('/admin/groups/{group}/delete', [GroupController::class, 'showDeleteForm'])->name('admin.groups.delete');
    // Удалить группу
    Route::delete('/admin/groups/{group}/destroy', [GroupController::class, 'destroyGroup'])->name('admin.groups.destroy');

    // Раздел теоретические занятия
    Route::get('/admin/theoreticallessons', [LessonController::class, 'showTheoreticalLessons'])->name('admin.theoretical');

    // Открыть форму добавления занятия
    Route::get('/admin/theoreticallessons/{group}/add', [LessonController::class, 'showAddTheoreticalLessons'])->name('admin.theoretical.add');
    // Сохранение занятия
    Route::post('/admin/theoreticallessons/{group}/add', [LessonController::class, 'storeTheoreticalLessons'])->name('admin.theoretical.store');

    // Открыть форму редактирования занятия
    Route::get('/admin/theoreticallessons/{lesson}/edit', [LessonController::class, 'showEditTheoreticalLessons'])->name('admin.theoretical.edit');
    // Редактировать занятие
    Route::patch('/admin/theoreticallessons/{lesson}/edit', [LessonController::class, 'updateTheoreticalLessons'])->name('admin.theoretical.update');

    // Открыть форму удаления занятия
    Route::get('/admin/theoreticallessons/{lesson}/delete', [LessonController::class, 'showDeleteTheoreticalLessons'])->name('admin.theoretical.delete');
    // Удалить занятие
    Route::delete('/admin/theoreticallessons/{lesson}/delete', [LessonController::class, 'deleteTheoreticalLessons'])->name('admin.theoretical.destroy');

    // Раздел занятия по вождению
    Route::get('/admin/drivinglessons', [LessonController::class, 'showDrivingLessons'])->name('admin.driving');

    // Открыть форму добавления занятия по вождению
    Route::get('/admin/drivinglessons/{group}/add', [LessonController::class, 'showAddDrivingLesson'])->name('admin.driving.add');
    // Сохранить занятие по вождению
    Route::post('/admin/drivinglessons/add', [LessonController::class, 'storeDrivingLesson'])->name('admin.driving.store');

    // Открыть форму редактирования занятия по вождению
    Route::get('/admin/drivinglessons/{lesson}/{group}/edit', [LessonController::class, 'showEditDrivingLesson'])->name('admin.driving.edit');
    // Сохранить изменения
    Route::patch('/admin/drivinglessons/{lesson}/update', [LessonController::class, 'updateDrivingLesson'])->name('admin.driving.update');

    // Открыть форму удаления занятия по вождению
    Route::get('/admin/drivinglessons/{lesson}/delete', [LessonController::class, 'showDeleteDrivingLesson'])->name('admin.driving.delete');
    // Удалить занятие по вождению
    Route::delete('/admin/drivinglessons/{lesson}/destrou', [LessonController::class, 'destroyDrivingLesson'])->name('admin.driving.destroy');
});