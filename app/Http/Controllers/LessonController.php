<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrivingLesson;
use App\Models\TheoreticalLesson;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function showLessons(){
        $theoretical_lessons = TheoreticalLesson::latest()->where('group_id', Auth::user()->group->id)->orderBy('date', 'ASC')->orderBy('time', 'ASC')->get();
        $driving_lessons = DrivingLesson::latest()->where('student_id', Auth::user()->id)->get();
        return view('lessons', ['drivingLessons' => $driving_lessons,
                                'theoreticalLessons' => $theoretical_lessons]);
    }
}
