<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usluga;
use App\Models\User;

class Application extends Model
{
    use HasFactory;

    public function usluga(){
        return $this->belongsTo(Usluga::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['usluga_id', 'user_id', 'status'];
}
