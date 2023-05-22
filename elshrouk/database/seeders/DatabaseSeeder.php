<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // ini_set('memory_limit', '-1');

        // \DB::unprepared(file_get_contents(__dir__ . '/source/SQL-File.sql'));


        // $this->call(InstituteSeeder::class);

        // \App\Models\Employee::create([
        //     'name' => 'eslam',
        //     'email' => 'eslam@employee.com',
        //     'password' => Hash::make(12345678),
        // ]);

        // \App\Models\Result::create([
        //     'subject_name' => 'مادة الرياضيات',
        //     'min_mark' => '33',
        //     'max_mark' => '100',
        //     'mark_obtained' => '85',
        // ]);

        // \App\Models\Result::create([
        //     'subject_name' => 'الفيزياء',
        //     'min_mark' => '33',
        //     'max_mark' => '100',
        //     'mark_obtained' => '93',
        // ]);


        // \App\Models\Result::create([
        //     'subject_name' => 'الكيمياء',
        //     'min_mark' => '33',
        //     'max_mark' => '100',
        //     'mark_obtained' => '65',
        // ]);


        // \App\Models\Result::create([
        //     'subject_name' => 'انجليزي',
        //     'min_mark' => '33',
        //     'max_mark' => '100',
        //     'mark_obtained' => '50',
        // ]);

        // \App\Models\Result::create([
        //     'subject_name' => 'ضريبة',
        //     'min_mark' => '33',
        //     'max_mark' => '100',
        //     'mark_obtained' => '70',
        // ]);

        \App\Models\Subject::create([
            'name' => 'لغة عربية 2',
            'institute_id' => '5',
           'term' => '2',
        ]);

        \App\Models\Subject::create([
            'name' => 'لغة انجليزية 2',
            'institute_id' => '5',
           'term' => '2',
        ]);

        \App\Models\Subject::create([
            'name' => 'مقدمة في علم الاجتماع',
            'institute_id' => '5',
           'term' => '2',
        ]);

         \App\Models\Subject::create([
            'name' => 'التفكير العلمي',
            'institute_id' => '5',
           'term' => '2',
        ]);

        \App\Models\Subject::create([
            'name' => 'مدخل الي العلاقات العامة ',
            'institute_id' => '5',
           'term' => '2',
        ]);


        \App\Models\Subject::create([
            'name' => 'الجغرافيا السياسية ',
            'institute_id' => '5',
           'term' => '2',
        ]);

        // \App\Models\Subject::create([
        //     'name' => 'توصيف دراسات تجارية بالانجليزية PDF ',
        //     'institute_id' => '5',
        //    'term' => '2',
        // ]);







    }
}
