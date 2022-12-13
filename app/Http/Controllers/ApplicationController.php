<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Usluga;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function showAddAppForm(Usluga $usl){
        return view('add_app', ['usl' => $usl]);
    }

    public function storeApp(Request $request, Usluga $usl){
        Application::create(['usluga_id' => $usl->id, 'user_id' => Auth::user()->id]);
        return redirect()->route('home');
    }

    public function showDeleteAppForm(Application $app){
        return view('app_delete', ['app' => $app]);
    }

    public function destroyApp(Application $app){
        $app->delete();
        return redirect()->route('home');
    }

    public function showAllAds(){
        $context = ['applications' => Application::latest()->get()];
        return view('app', $context); 
    }

    public function showChangeStatusForm(Application $app){
        return view('status_app', ['app' => $app]);
    }

    public function updateApp(Request $request, Application $app){
        $app->fill(['status' => $request->status]);
        $app->save();
        return redirect()->route('admin.app');
    }
}