<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EnrollmentController extends Controller
{


    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email|exists:enrollments,email',
            'password' => 'required'
        ]);
        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('student')->attempt($credential)){
            return redirect()->route('student.index');
        }else{
            return redirect()->route('login');
        }

    }


    public function logout(){
        Auth::guard('student')->logout();
        return redirect()->route('login');
    }


    public function index(){
        $governments = DB::table('governorates')->get();
        $institutes = DB::table('institutes')->get();
        return view('enrollment', ['governments' => $governments,'institutes'=>$institutes]);
    }

     public function cities($id){
        echo json_encode(DB::table('cities')->where('governorate_id',$id)->get());
    }

    public function store(Request $request){

        $request->validate([
            'academic_total' => 'required|numeric|min:0|max:100',
            'username_ar' => 'required','string',
            'username_en' => 'required','string',
            'institute_id'=>'required|exists:institutes,id',
            'email'=>'email|unique:enrollments,email',
            'address'=>"required",
            'national_id'=>['required','numeric','unique:enrollments,national_id'],
            'birth_date' => 'required|date',
            'government_id'=>'required',
            'city_id' => 'required',
        ], [
            'academic_total.required' => 'يجب ادخال مجموعك',
            'username_ar.required' => 'يجب ادخال حقل الاسم  بالعربي',
            'username_en.required' => 'يجب ادخال حقل الاسم  بالانجليزي',
            'institute_id.required' => 'يجب اختيار المعهد',
            'email.email' => 'يجب ادخال رقم صحيح',
            'email.unique' => 'البريد الالكتروني مسجل مسبقا لدينا',
            'address.required' => 'يجب ادخال العنوان بالتفصيل',
            'national_id.required' => 'يجب ادخال الرقم القومي',
            'national_id.unique' => 'الرقم القومي مسجل مسبقا لدينا',
            'national_id.numeric' => ' يجب ان يكون الرقم القومي ارقام فقط',
            
            'birth_date.required' => ' يجب ادخال تاريخ الميلاد',
            'birth_date.date' => ' قيمة تاريخ الميلاد غير صحيحة',
            'government_id.required' => ' يجب اختيار المحافظة',
            'city_id.required' => ' يجب اختيار المدينة',
        ]);

        $institute = Institute::where('id',$request->institute_id)->first();
            if($institute->academic_total > $request->academic_total){
            return redirect()->back()->with('error_total','مجموعك غير مطابق لشروط القبول بالمعهد');
        }
        $enrollment = new Enrollment();
        $enrollment->academic_total = $request->academic_total;
        $enrollment->institute_id = $request->institute_id;
        $enrollment->username_en = $request->username_en;
        $enrollment->username_ar = $request->username_ar;
        $enrollment->national_id = $request->national_id;
        $enrollment->email = $request->email;
        $enrollment->birth_date = $request->birth_date;
        $enrollment->address = $request->address;
        $enrollment->government_id = $request->government_id;
        $enrollment->city_id = $request->city_id;
        $enrollment->password = Hash::make($request->national_id);
        $enrollment->save();

        return response()->json([
            'MESSEGE' => " $institute->deadline  تم قبولك بمعهد $institute->name  لحين دفع المصاريف واخر معاد لدفع المصاريف يوم";
        ]);
    }



}