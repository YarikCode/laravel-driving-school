<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Usluga;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use PHPUnit\TextUI\XmlConfiguration\Group;

class ApplicationController extends Controller
{
    public function showAddAppForm(Usluga $usl){
        return view('add_app', ['usl' => $usl]);
    }

    public function storeApp(Request $request, Usluga $usl){
        // Создание новой заявки
        Application::create(['usluga_id' => $usl->id, 'user_id' => Auth::user()->id, 'time' => $request->time, 'date' => $request->date]);
        // Обновление номера телефона пользователя
        DB::table('users')
        ->where('id', '=', Auth::user()->id)
        ->update(['number' => $request->phone_number]);
        // Редирект на домашнюю страницу
        return redirect()->route('home');
    }

    public function showDeleteAppForm(Application $app){
        return view('app_delete', ['app' => $app]);
    }

    public function showAdminAppDeleteForm(Application $app){
        return view('delete_app_admin', ['app' => $app]);
    }

    public function destroyApp(Application $app){
        $app->delete();
        return redirect()->route('home');
    }

    public function destroyAppAdmin(Application $app){
        $app->delete();
        return redirect()->route('admin.app');
    }

    public function showAllAds(){
        $context = ['applications' => Application::latest()->get()];
        return view('app', $context); 
    }

    public function showChangeStatusForm(Application $app){
        $groups = Group::latest()->get();
        return view('status_app', ['app' => $app, 'groups' => $groups]);
    }

    public function updateApp(Request $request, Application $app){
        $app->fill(['status' => $request->status]);
        if($request->group === "NULL"){
            $app->user()->update(['group_id' => NULL]);
        }
        else{
            $app->user()->update(['group_id' => $request->group]);
        }
        $app->save();
        return redirect()->route('admin.app');
    }
}