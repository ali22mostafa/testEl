<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Institute::factory()->create([
            'name' => 'المعهد العالى للهندسة',
            'academic_total' =>'87.24',
            'deadline' => "2023/04/25"
        ]);

        \App\Models\Institute::factory()->create([
            'name' => 'شعبة علوم حاسب',
            'academic_total' =>'60.16',
            'deadline' => "2023/05/10"
        ]);

         \App\Models\Institute::factory()->create([
            'name' => 'شعبة نظم معلومات ادارية',
            'academic_total' =>'70.30',
            'deadline' => "2023/04/10"
        ]);

         \App\Models\Institute::factory()->create([
            'name' => 'شعبة ادارة و محاسبة',
            'academic_total' =>'80.10',
            'deadline' => "2023/05/12"

        ]);

         \App\Models\Institute::factory()->create([
            'name' => 'المعهد الدولى العام للاعلام',
            'academic_total' =>'73.5',
            'deadline' => "2023/04/10"

        ]);
    }
}
