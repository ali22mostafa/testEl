<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employee;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $enrollmenst = Enrollment::all();
        foreach ( $enrollmenst as $enrollmens ){
        $startDate = Carbon::parse(now());
        $endDate = Carbon::parse($enrollmens->institute->deadline);
        $diffInDays = $startDate->diffInDays($endDate);
        
        if($diffInDays == 0){
            $enrollmens->delete();
        }
       }
    }

    public function login_submit(Request $request){
        $request->validate([
            'email' => 'required|email|exists:employees,email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard('employee')->attempt($credential)){
            return redirect()->route('employee.index');
        }else{
            return redirect()->route('login');
        }

    }


    public function logout(){
        Auth::guard('employee')->logout();
        return redirect()->route('login');
    }

    public function index()
    {

        return view('dashboard.employee.index');
    }

    public function enrollments(){
        $NewEnrollments = Enrollment::paginate();
        $enrollments = Enrollment::paginate();
        return view('dashboard.employee.enrollment.Enrollment',['enrollments' => $enrollments,'NewEnrollments'=>$NewEnrollments]);
    }

    public function Certificates()
    {
        $enrollments = Enrollment::all();
        return view('dashboard.employee.Certificates',compact('enrollments'));
    }

    public function Certificate_export(Request $request , $id){
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->certificate_type = $request->certificate_type;
         $enrollment->update([
            'certificate_type' => $request->certificate_type
        ]);
        return redirect()->back();
    }

    public function Payments()
    {
        return view('dashboard.employee.Payment');
    }

    public function changestatueindex($id){
        $enrollment = Enrollment::find($id);
        return view('dashboard.employee.enrollment.changestatue',compact('enrollment'));
    }
    public function changestatue(Request $request ,$id){

        $enrollment = Enrollment::findOrFail($id);
        $enrollment->status = $request->status;
        $enrollment->update([
            'status' => $request->status
        ]);
        return redirect()->back();
    }

    public function detailsEnrollment($id){
        $enrollment = Enrollment::where('id',$id)->first();

        return view('dashboard.employee.enrollment.details',compact('enrollment'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
        ]);
        $employee = Employee::where('id',Auth::user()->id)->first();
        $employee->name = $request->name;
        $employee->email = $request->email;

        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back()->with('success_update','تم التعديل بنجاح');


    }

}
