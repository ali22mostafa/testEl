<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Employee extends Authenticatable
{

    protected $guarded =[];
    protected $guard = "employee";

    use HasFactory;
    public static function get_government($id){
        $government_name = DB::table('governorates')->where('id', $id)->pluck('governorate_name_en');
        foreach($government_name as $government_nam){
            return  $government_nam;
        }
    }

    public static function get_city($id){
        $city_name = DB::table('cities')->where('id', $id)->pluck('city_name_en');
        foreach($city_name as $city_nam){
            return  $city_nam;
        }
    }

    public static function get_institutes($id){
        $institutes = DB::table('institutes')->where('id', $id)->pluck('name');
        foreach($institutes as $institute){
            return  $institute;
        }
    }



}
