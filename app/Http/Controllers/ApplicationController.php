<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function applications(){
        $context = ['applications' => Application::latest()->get()];
        return view('home', $context);
    }
}
