<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;
use App\Models\User;

class TheoreticalLesson extends Model
{
    use HasFactory;

    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function teacher(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['name', 'description', 'date', 'time', 'teacher_id', 'group_id'];
}
