@extends('dashboard.employee.layouts.app')

@section('content')
<div class="container">
    <a  href="{{route('employee.enrollment')}}">
        <button class="btn btn-info text-light">عرض جميع طلبات الالتحاق</button>
    </a>
    <div class="">
        <h3 class="bg-dark text-light p-3 mx-auto">تعديل حالة الطالب</h3>
    </div>
    <div class="row">

        <form method="POST" class="mb-3" action="{{route('employee.enrollment.changestatue.store',$enrollment->id)}}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">حالة الطالب</label>
              <select name="status" class="form-select" aria-label="Default select example">
                <option @if ($enrollment->status === 'لم يتم دفع المصاريف')
                    selected
                        @endif value="لم يتم دفع المصاريف">لم يتم دفع المصاريف</option>
                        <option
                        @if ($enrollment->status === 'تم دفع المصاريف ')
                        selected
                            @endif
                        value="تم دفع المصاريف ">تم دفع المصاريف </option>

              </select>
            </div>

            <button type="submit" class="btn btn-success">تعديل الحالة</button>
          </form>
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

        </div>

    </div>
</div>
@endsection
