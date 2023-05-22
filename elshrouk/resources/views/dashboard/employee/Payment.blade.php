@extends('dashboard.employee.layouts.app')
@section('title')
التحقق من طلبات دفع المصاريف
@endsection
@section('content')

<div class="content">
    <h3 class="bg-dark text-light p-2"> طلبات دفع المصاريف</h3>

<div class="col-md-12 search-table-col mt-0">
    <div class="form-group pull-right col-lg-12"><input type="text" class="search form-control " placeholder="البحث عن طالب.."></div><span class="counter pull-right"></span>
        <table  class="table table-hover table-bordered">
            <thead class="bill-header cs">
                <tr>
                    <th>اسم الطالب</th>
                    <th>حالة الطلب</th>
                    <th>تعديل</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>محمد ابراهيم</td>
                    <td>
                        <span class="bg-success text-light p-2">
                        تم الدفع
                        </span>
                    </td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-edit" style="font-size: 15px;"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>اسلام علي</td>
                    <td>
                        <span class="bg-danger text-light p-2">
                        لم يتم الدفع
                        </span>
                    </td>                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-edit" style="font-size: 15px;"></i>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
</div>
</div>

@endsection
