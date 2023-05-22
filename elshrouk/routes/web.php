<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Authentication

Route::get('/login', function () {
    return view('login');
})->name('login');

//employee
Route::post('/login-submit',[EmployeeController::class,'login_submit'])->name('login_submit');

Route::get('/logout',[EmployeeController::class,'logout'])->name('logout');


//student
Route::post('/login-submit-student',[EnrollmentController::class,'login_submit'])->name('login_submit_student');

Route::get('/logout-student',[EnrollmentController::class,'logout'])->name('logout_student');


// HomePage
Route::get('/', function () {
    return view('home');
});

//enrollments
Route::get('enrollment',[EnrollmentController::class,'index']);
Route::post('enrollment',[EnrollmentController::class,'store'])->name('enrollment.store');
Route::get('/cities/{id}',[EnrollmentController::class,'cities']);


Route::group(['middleware'=> 'student:student'], function(){
//Dashboard Student
Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::post('student/update',[StudentController::class,'update'])->name('student.update');
Route::get('/student/poll',[StudentController::class,'poll'])->name('student.poll');
Route::get('/student/certificate_check',[StudentController::class,'certificate_check'])->name('certificate.check');
Route::post('/student/certificate_order/{id}',[StudentController::class,'certificate_order'])->name('certificate.order');
Route::get('/student/payments_check',[StudentController::class,'payments_check'])->name('payments.check');
Route::get('/student/studying_subjects',[StudentController::class,'studying_subjects'])->name('studying.subjects');
Route::get('/student/results',[StudentController::class,'results'])->name('results');
Route::get('/student/payments/request',[PaymentController::class,'request'])->name('payment.request');
});

Route::group(['middleware'=> 'employee:employee'], function(){
//dashboard Employee
Route::get('employee',[EmployeeController::class,'index'])->name('employee.index');
Route::post('employee/update',[EmployeeController::class,'update'])->name('employee.update');
Route::get('employee/Enrollments',[EmployeeController::class,'enrollments'])->name('employee.enrollment');
Route::get('employee/Enrollments/details/{id}',[EmployeeController::class,'detailsEnrollment'])->name('employee.enrollment.detailsEnrollment');
Route::get('employee/Enrollments/changestatue/{id}',[EmployeeController::class,'changestatueindex'])->name('employee.enrollment.changestatue.index');
Route::post('employee/Enrollments/changestatue/{id}',[EmployeeController::class,'changestatue'])->name('employee.enrollment.changestatue.store');
Route::get('employee/Certificates',[EmployeeController::class,'Certificates'])->name('Certificates');
Route::post('employee/Certificates/export/{id}',[EmployeeController::class,'Certificate_export'])->name('Certificate.export');
Route::get('employee/Payments',[EmployeeController::class,'Payments'])->name('Payments');

});



