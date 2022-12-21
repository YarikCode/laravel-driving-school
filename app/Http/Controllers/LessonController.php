<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrivingLesson;
use App\Models\TheoreticalLesson;

class LessonController extends Controller
{
    public function showLessons(){
        $theoretical_lessons = TheoreticalLesson::latest()->get();
        $driving_lessons = DrivingLesson::latest()->get();
        return view('lessons', ['drivingLessons' => $driving_lessons,
                                'theoreticalLessons' => $theoretical_lessons]);
    }
}
