@extends('dashboard.student.layouts.app')
@section('title')
عرض نتيجة الفصل الدراسى
@endsection
@section('content')
<div class="content">
    <h3 style="font-family: cairo;" class="bg-dark text-light p-2">   نتيجة الطالب : {{Auth::user()->username_ar}} </h3>
    <table class="table">

        <thead>
          <tr style="font-family: cairo;" >
            <th scope="col">#</th>
            <th scope="col">اسم المادة</th>
            <th scope="col">الدرجة الصغري</th>
            <th scope="col">الدرجة الكبري</th>
            <th scope="col">درجة الطالب</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($results as  $result)

          <tr style="font-family: cairo;" >
            <th>{{$loop->iteration}}</th>
            <td>{{$result->subject_name}}</td>
            <td>{{$result->min_mark}}</td>
            <td>{{$result->max_mark}}</td>
            <td>{{$result->mark_obtained}}</td>
          </tr>

          @endforeach
          <tr style="font-family: cairo;">
            <td  style="font-family: cairo;" class="bg-dark text-light" colspan="10000">درجة الطالب بالنسبة المئوية  % 72,6 </td>
          </tr>
        </tbody>
      </table>

@endsection
