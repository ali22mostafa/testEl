<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('institute_id');
            $table->double("academic_total",6,2);
            $table->string('username_en');
            $table->string('username_ar');
            $table->string('national_id');
            $table->string('email');
            $table->string('password');
            $table->enum('certificate_type', [0,1,2])->default(0)->nullable();
            $table->date('birth_date');
            $table->string('address');
            $table->string('government_id');
            $table->string('city_id');
            $table->enum('status',['لم يتم دفع المصاريف','تم دفع المصاريف'])->default('لم يتم دفع المصاريف');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
};
