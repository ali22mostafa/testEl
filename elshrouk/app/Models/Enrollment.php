<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Authenticatable
{
    use HasFactory;
    protected $guarded =[];

    public function institute(){
        return $this->belongsTo(Institute::class);
    }

    public function governments(){
        return $this->belongsTo(governments::class);
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }

}
