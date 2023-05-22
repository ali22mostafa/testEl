@extends('dashboard.employee.layouts.app')

@section('title')
تفاصيل المتقدم الي المعهد
@endsection

@section('content')

<div class="container">
    <div class="">
        <h3 class="bg-dark text-light p-3 mx-auto">تفاصيل  الطالب</h3>
    </div>
<div class="col-md-12 search-table-col mt-0">
    <div class="table-responsive table table-hover table-bordered results">
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs">
                <tr>
                    <th>اسم الطالب</th>
                    <th>اسم المعهد</th>
                    <th>الرقم القومي</th>
                    <th>العنوان</th>
                    <th>المحافظة</th>
                    <th>المدينة</th>
                    <th>الحالة</th>
                </tr>
            </thead>
            <tbody>


                <tr>
                    <td>{{$enrollment->username_ar}}</td>
                    <td>{{App\Models\Employee::get_institutes($enrollment->institute_id)}}</td>
                    <td>{{$enrollment->national_id}}</td>
                    <td>{{$enrollment->address}}</td>
                    <td>{{App\Models\Employee::get_government($enrollment->government_id)}}</td>
                    <td>{{App\Models\Employee::get_city($enrollment->city_id)}}</td>
                    <td>{{$enrollment->status}}</td>
                </tr>


            </tbody>
        </table>
    </div>
</div>
<a  href="{{route('employee.enrollment')}}">
    <button class="btn btn-info text-light">عرض جميع طلبات الالتحاق</button>
</a>
</div>


@endsection
