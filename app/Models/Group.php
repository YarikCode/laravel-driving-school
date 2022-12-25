<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\TheoreticalLesson;

class Group extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(User::class);
    }

    public function theoreticalLesson(){
        return $this->hasMany(TheoreticalLesson::class);
    }

    protected $fillable = ['name', 'time'];
}
