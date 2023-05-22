<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function enrollment (){
        return $this->hasMany(Enrollment::class);
    }
}
