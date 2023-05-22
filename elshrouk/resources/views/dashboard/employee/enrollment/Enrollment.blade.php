@extends('dashboard.employee.layouts.app')
@section('title')
التحقق من طلبات التقديم
@endsection
@section('content')

<div class="content">
    <div class="col-md-12 search-table-col mt-0">
        {{-- <div class="form-group pull-right col-lg-12"><input type="text" class="search form-control " placeholder="البحث عن طالب.."></div><span class="counter pull-right"></span> --}}
        <div class="table-responsive table table-hover table-bordered results">
            {{-- <table class="table table-hover table-bordered">
                <thead class="bill-header cs">
                    <tr>
                        <th>اسم الطالب</th>
                        <th>اسم المعهد</th>
                        <th>الرقم القومي</th>
                        <th>العنوان</th>
                        <th>المحافظة</th>
                        <th>المدينة</th>
                        <th>الحالة</th>
                        <th>تعديل</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="warning no-result">
                        <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                    @foreach ($enrollments as $enrollment )
                    <tr>
                        <td>{{$enrollment->username_ar}}</td>
                        <td>{{$enrollment->institute->na}}</td>
                        <td>{{$enrollment->national_id}}</td>
                        <td>{{$enrollment->address}}</td>
                        <td>{{App\Models\Employee::get_government($enrollment->government_id)}}</td>
                        <td>{{App\Models\Employee::get_city($enrollment->city_id)}}</td>
                        <td>{{$enrollment->status}}</td>
                        <td>
                            <a href="{{route('employee.enrollment.detailsEnrollment',$enrollment->id)}}">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-eye" style="font-size: 15px;"></i>
                              </button>
                            </a>
                            <a href="{{route('employee.enrollment.changestatue.index',$enrollment->id)}}">
                              <button type="button" class="btn btn-success" >
                                <i class="fa fa-edit" style="font-size: 15px;"></i>
                            </button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button>
                        </a>
                        </td>
                    </tr>
                    <!-- Modal -->

                    @endforeach

                </tbody>
            </table> --}}
        </div>
    </div>

    <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow">
                            <div class="card-header py-2">
                                <p class="lead m-0" style="font-family: cairo;">حالات طلبات التقدم</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table  pt-3 pe-2">
                                    <table class="table table-striped table-sm my-0 mydatatable">
                                        <thead>
                                            <tr>
                                                <th>اسم الطالب</th>
                                                <th>اسم المعهد</th>
                                                <th>الرقم القومي</th>
                                                <th>المحافظة</th>
                                                <th>المدينة</th>
                                                <th>تاريخ تقديم</th>
                                                <th>اخر تاريخ لدفع المصاريف</th>
                                                <th>الحالة</th>
                                                <th>التحكم</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($NewEnrollments as $NewEnrollment )
                                            <tr>
                                                <td>{{$NewEnrollment->username_ar}}</td>
                                                <td>{{$NewEnrollment->institute->name}}</td>
                                                <td>{{$NewEnrollment->national_id}}</td>
                                                <td>{{App\Models\Employee::get_government($NewEnrollment->government_id)}}</td>
                                                <td>{{App\Models\Employee::get_city($NewEnrollment->city_id)}}</td>
                                                <td>{{$NewEnrollment->created_at->format("Y-m-d")}}</td>
                                                <td>{{$NewEnrollment->institute->deadline}}</td>
                                                <td>{{$NewEnrollment->status}}</td>
                                                <td>
                                                        <a href="{{route('employee.enrollment.detailsEnrollment',$NewEnrollment->id)}}">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="fa fa-eye" style="font-size: 15px;"></i>
                                                          </button>
                                                        </a>
                                                        <a href="{{route('employee.enrollment.changestatue.index',$NewEnrollment->id)}}">
                                                          <button type="button" class="btn btn-success" >
                                                            <i class="fa fa-edit" style="font-size: 15px;"></i>
                                                        </button>
                                                    </a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>

@endsection
