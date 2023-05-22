@extends('dashboard.employee.layouts.app')
@section('title')
التحقق من طلبات استخراج الشهايد
@endsection
@section('content')
<div class="content">
    <h3 class="bg-success text-light p-1"> طلبات استخراج الشهايد</h3>

<div class="col-md-12 search-table-col mt-0">
    <center>
    <h3 class="bg-dark text-light p-1">حالات الطلب المقدمة</h3>
    </center>
        <table  class="table table-hover table-bordered">
            <thead class="bill-header cs">
                <tr>
                    <th>اسم الطالب</th>
                    <th>اسم المعهد</th>
                    <th>اصدار</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrollments as $enrollment )
                @if ($enrollment->certificate_type == 1)
                <tr>
                    <td>{{$enrollment->username_ar}}</td>
                    <td>{{App\Models\Employee::get_institutes($enrollment->institute_id)}}</td>
                    <td>
                        <form method="POST" action="{{route("Certificate.export",$enrollment->id)}}">
                            @csrf
                            <input value="2" name="certificate_type" hidden type="hidden">
                            <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                اصدار شهادة
                            </button>
                        </form>

                    </td>
                </tr>
                @else
                <td ></td>
                @endif
                @endforeach

            </tbody>
        </table>
        <center>
            <h3 class="bg-dark text-light p-1">حالات الطلب التي تم تسليمها </h3>
            </center>
          <table  class="table table-hover table-bordered">
            <thead class="bill-header cs">
                <tr>
                    <th>اسم الطالب</th>
                    <th>اسم المعهد</th>
                </tr>
            </thead>
                @foreach ($enrollments as $enrollment )
                @if ($enrollment->certificate_type == 2)
                <tr>
                    <td>{{$enrollment->username_ar}}</td>
                    <td>{{App\Models\Employee::get_institutes($enrollment->institute_id)}}</td>
                </tr>
                @else
                <td> </td>
                @endif
                @endforeach
            </tbody>
        </table>

</div>
</div>

@endsection
