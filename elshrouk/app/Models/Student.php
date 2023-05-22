<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Authenticatable
{
    use HasFactory;
    public function institute(){
        return $this->hasOne(Institute::class);
    }

    public function Result(){
        return $this->hasMany(Result::class);
    }

    public function StudyingSubjects(){
        return $this->hasMany(StudyingSubjects::class);
    }

}
