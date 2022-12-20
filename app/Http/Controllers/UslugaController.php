<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usluga;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UslugaController extends Controller
{
    private const USL_VALIDATOR = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'price' => 'required|numeric',
        'image' => 'mimes:jpeg,bmp,png'
    ];

    private const USL_NO_IMAGE_VALIDATOR = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'price' => 'required|numeric'
    ];

    private const USL_ERROR_MESSAGES = [
        'price.required' => 'Раздавать услуги бесплатно нельзя',
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        'numeric' => 'Введите число',
        'mimes' => 'Выберите файл формата: jpeg, bmp, png'
    ];

    public function showUsl(){
        $context = ['uslugi' => Usluga::latest()->get()];
        return view('uslugi', $context);
    }

    public function showPublicUsl(){
        $context = ['uslugi' => Usluga::latest()->get()];
        return view('public_usl', $context);
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
        if($request->file('image') != null){
            $validated = $request->validate(self::USL_VALIDATOR, self::USL_ERROR_MESSAGES);
            $image = $request->file('image');
            $filename = time()."_". preg_replace('/\s+/', '_', strtolower($image->getClientOriginalName()));
            $tmp = $image->storeAs('uploads', $filename, 'public');
            $usl->fill(['name' => $validated['name'], 
                        'description' => $validated['description'],
                        'price' => $validated['price'],
                        'image' => $filename]);
        }
        else{
            $validated = $request->validate(self::USL_NO_IMAGE_VALIDATOR, self::USL_ERROR_MESSAGES);
            $usl->fill(['name' => $validated['name'], 
                        'description' => $validated['description'],
                        'price' => $validated['price']]);
        }
        $usl->save();
        return redirect()->route('admin.usl');
    }

    public function storeUsl(Request $request){
        $validated = $request->validate(self::USL_VALIDATOR, self::USL_ERROR_MESSAGES);
        $image = $request->file('image');
        $filename = time()."_". preg_replace('/\s+/', '_', strtolower($image->getClientOriginalName()));
        $tmp = $image->storeAs('uploads', $filename, 'public');
        Usluga::create(['name' => $validated['name'], 'description' => $validated['description'], 'price' => $validated['price'], 'image' => $filename]);
        return redirect()->route('admin.usl');
    }
}