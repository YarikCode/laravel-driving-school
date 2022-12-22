<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function showGroups(){
        $groups = Group::latest()->get();
        return view('groups', ['groups' => $groups]);
    }
}
