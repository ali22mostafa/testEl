<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Subject;

class StudentController extends Controller
{
//     public function __construct()
//    {
//         $this->middleware('auth:student');
//     }



    public function index()
    {
        return view("dashboard.student.index");
    }

    public function certificate_check(){
        return view('dashboard.student.certifcate_check');
    }

    public function certificate_order(Request $request ,$id){
        // dd($request->all());
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->certificate_type = $request->certificate_type;
        $enrollment->update([
            'certificate_type' => $request->certificate_type
        ]);
        return redirect()->back()->with('success', 'المراجعه تم تقديم طلب الشهادة بنجاح وقيد');
    }
    public function payments_check(){
        return view('dashboard.student.payment_check');
    }


    public function studying_subjects(){

        $term_one = Subject::where('institute_id',Auth::user()->institute_id)->where('term',1)->get();
        $term_two = Subject::where('institute_id',Auth::user()->institute_id)->where('term',2)->get();
        return view('dashboard.student.studying_subjects',compact(['term_one','term_two']));
    }

    public function poll(){
        return view('dashboard.student.poll');
    }


    public function results(){
        $results = Result::all();
        return view('dashboard.student.results',compact('results'));

    }

   public function update(Request $request){
    $request->validate([
        'username_en' => 'required',
        'username_ar' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|max:255',
    ]);
    $student = Enrollment::where('id',Auth::user()->id)->first();
    $student->username_en = $request->username_en;
    $student->username_ar = $request->username_ar;
    $student->email = $request->email;
    $student->password = $request->password;
    $student->update([
        'username_en' => $request->username_en,
        'username_ar' => $request->username_ar,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);
    return response()->json([
        'success_update' => 'تم التعديل بنجاح',
        
    ]);
}



}
