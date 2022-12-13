<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usluga;
use App\Models\Application;

class AdminController extends Controller
{
    public function admin(){
        if(Auth::check()){
            if(Auth::user()->status === 'Admin'){
                return view('admin');
            } 
            else {
                return redirect()->route('home');
            }
        } 
        else{
            return redirect()->route('login');
        } 
    }
}