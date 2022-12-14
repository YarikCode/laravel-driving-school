<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usluga;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UslugaController extends Controller
{
    public function showUsl(){
        $context = ['uslugi' => Usluga::latest()->get()];
        return view('uslugi', $context);
    }

    public function showPublicUsl(){
        $context = ['uslugi' => Usluga::latest()->get()];
        return view('index', $context);
    }

    public function showAddUslForm(){
        return view('usl_add');
    }

    public function showEditUslForm(Usluga $usl){
        return view('usl_edit', ['usl' => $usl]);
    }

    public function showDeleteUslForm(Usluga $usl){
        return view('usl_delete', ['usl' => $usl]);
    }

    public function destroyUsl(Usluga $usl){
        $usl->delete();
        return redirect()->route('admin.usl');
    }

    public function updateUsl(Request $request, Usluga $usl){
        $this->validate($request, [
            'File' => ['required', 'mimes:jpeg,gif,bmp,png', 'max:2048']
        ]);
        $image = $request->file('File');
        $filename = time()."_". preg_replace('/\s+/', '_', strtolower($image->getClientOriginalName()));
        $tmp = $image->storeAs('uploads', $filename, 'public');
        $usl->fill(['name' => $request->name, 
                    'description' => $request->description,
                    'price' => $request->price,
                    'image' => $filename]);
        $usl->save();
        return redirect()->route('admin.usl');
    }

    public function storeUsl(Request $request){
        $this->validate($request, [
            'File' => ['required', 'mimes:jpeg,gif,bmp,png', 'max:2048']
        ]);
        $image = $request->file('File');
        $filename = time()."_". preg_replace('/\s+/', '_', strtolower($image->getClientOriginalName()));
        $tmp = $image->storeAs('uploads', $filename, 'public');
        Usluga::create(['name' => $request->name, 'description' => $request->description, 'price' => $request->price, 'image' => $filename]);
        dd($request->file);
        return redirect()->route('admin.usl');
    }
}