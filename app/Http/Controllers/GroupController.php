<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    private const GROUP_VALIDATOR = [
        'name' => 'required|max:255',
        'time' => 'required|max:255'
    ];

    private const GROUP_ERROR_MESSAGES = [
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов'
    ];

    public function showGroups(){
        $groups = Group::latest()->get();
        return view('groups', ['groups' => $groups]);
    }

    public function showAddForm(){
        return view('groups_add');
    }

    public function storeGroup(Request $request){
        $validated = $request->validate(self::GROUP_VALIDATOR, self::GROUP_ERROR_MESSAGES);
        Group::create(['name' => $validated['name'], 'time' => $validated['time']]);
        return redirect()->route('admin.groups');
    }

    public function showUpdateForm(Request $request, Group $group){
        return view('group_update', ['group' => $group]);
    }

    public function updateGroup(Request $request, Group $group){
        $validated = $request->validate(self::GROUP_VALIDATOR, self::GROUP_ERROR_MESSAGES);
        $group->fill(['name' => $validated['name'], 
                    'time' => $validated['time']]);
        $group->save();
                return redirect()->route('admin.groups');
    }

    public function showDeleteForm(Request $request, Group $group){
        return view('group_delete', ['group' => $group]);
    }

    public function destroyGroup(Request $request, Group $group){
        $group->delete();
        return redirect()->route('admin.groups');
    }
}
