<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrivingLesson;
use App\Models\TheoreticalLesson;
use App\Models\Group;
use App\Models\User;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    private const THEORETICAL_VALIDATOR = [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'date' => 'required|date',
        'time' => 'required', 
        'teacher' => 'required'
    ];

    private const THEORETICAL_ERROR_MESSAGES = [
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        'numeric' => 'Введите число',
        'date' => 'Введите дату'
    ];

    private const DRIVING_VALIDATOR = [
        'name' => 'required|max:255',
        'student' => 'required|numeric',
        'instructor' => 'required|numeric',
        'dates' => 'required',
        'time' => 'required', 
        'car' => 'required|numeric'
    ];

    private const DRIVING_ERROR_MESSAGES = [
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        'numeric' => 'Введите число'
    ];

    public function showLessons(){
        $theoretical_lessons = TheoreticalLesson::latest()->where('group_id', Auth::user()->group->id)->orderBy('date', 'ASC')->orderBy('time', 'ASC')->get();
        $driving_lessons = DrivingLesson::latest()->where('student_id', Auth::user()->id)->get();
        return view('lessons', ['drivingLessons' => $driving_lessons,
                                'theoreticalLessons' => $theoretical_lessons]);
    }

    public function showTheoreticalLessons(){
        $groups = Group::latest()->get();
        return view('admin_theoretical', ['groups' => $groups]);
    }

    public function showAddTheoreticalLessons(Group $group){
        $teachers = User::latest()->where('status', 'Преподаватель')->get();
        return view('theoretical_add', ['group' => $group, 'teachers' => $teachers]);
    }

    public function storeTheoreticalLessons(Request $request, Group $group){
        $validated = $request->validate(self::THEORETICAL_VALIDATOR, self::THEORETICAL_ERROR_MESSAGES);
        TheoreticalLesson::create(['name' => $validated['name'], 'description' => $validated['description'], 'date' => $validated['date'], 'time' => $validated['time'], 'teacher_id' => $validated['teacher'], 'group_id' => $group->id]);
        return redirect()->route('admin.theoretical');
    }

    public function showEditTheoreticalLessons(TheoreticalLesson $lesson){
        $teachers = User::latest()->where('status', 'Преподаватель')->get();
        return view('theoretical_edit', ['lesson' => $lesson, 'teachers' => $teachers]);
    }

    public function updateTheoreticalLessons(Request $request, TheoreticalLesson $lesson){
        $validated = $request->validate(self::THEORETICAL_VALIDATOR, self::THEORETICAL_ERROR_MESSAGES);
        $lesson->fill(['name' => $validated['name'], 
                    'description' => $validated['description'],
                    'date' => $validated['date'],
                    'time' => $validated['time'],
                    'teacher' => $validated['teacher']]);
        $lesson->save();
                return redirect()->route('admin.theoretical');
    }

    public function showDeleteTheoreticalLessons(TheoreticalLesson $lesson){
        return view('theoretical_delete', ['lesson' => $lesson]);
    }

    public function deleteTheoreticalLessons(TheoreticalLesson $lesson){
        $lesson->delete();
        return redirect()->route('admin.theoretical');
    }

    public function showDrivingLessons(){
        $groups = Group::latest()->get();
        return view('admin_driving', ['groups' => $groups]);
    }

    public function showAddDrivingLesson(Group $group){
        $instructors = User::latest()->where('status', '=', 'Инструктор')->get();
        $cars = Car::latest()->get();
        return view('driving_add', ['group' => $group, 'instructors' => $instructors, 'cars' => $cars]);
    }

    public function storeDrivingLesson(Request $request){
        $validated = $request->validate(self::DRIVING_VALIDATOR, self::DRIVING_ERROR_MESSAGES);
        DrivingLesson::create(['name' => $validated['name'], 'student_id' => $validated['student'], 'instructor_id' => $validated['instructor'], 'time' => $validated['time'], 'car_id' => $validated['car'], 'date' => $validated['dates']]);
        return redirect()->route('admin.driving');
    }

    public function showEditDrivingLesson(DrivingLesson $lesson, Group $group){
        $instructors = User::latest()->where('status', '=', 'Инструктор')->get();
        $cars = Car::latest()->get();
        return view('driving_edit', ['group' => $group, 'instructors' => $instructors, 'cars' => $cars, 'lesson' => $lesson]);
    }

    public function updateDrivingLesson(Request $request, DrivingLesson $lesson){
        $validated = $request->validate(self::DRIVING_VALIDATOR, self::DRIVING_ERROR_MESSAGES);
        $lesson->fill(['name' => $validated['name'], 
                        'student_id' => $validated['student'], 
                        'instructor_id' => $validated['instructor'],
                        'time' => $validated['time'], 
                        'car_id' => $validated['car'], 
                        'date' => $validated['dates']]);
        $lesson->save();
        return redirect()->route('admin.driving');
    }

    public function showDeleteDrivingLesson(DrivingLesson $lesson){
        return view('delete_driving', ['lesson' => $lesson]);
    }

    public function destroyDrivingLesson(DrivingLesson $lesson){
        $lesson->delete();
        return redirect()->route('admin.driving');
    }
}