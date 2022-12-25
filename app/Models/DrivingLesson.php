<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\User;

class DrivingLesson extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(User::class);
    }

    public function instructor(){
        return $this->belongsTo(User::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }

    protected $fillable = ['name', 'student_id', 'instructor_id', 'date', 'time', 'car_id'];
}
