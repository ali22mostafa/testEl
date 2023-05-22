@extends('dashboard.student.layouts.app')
@section('title')
عرض المواد المسجلة
@endsection
@section('content')
<div class="content">
    <h3 class="bg-dark text-light p-2"> عرض المواد المسجلة</h3>
    <h3 class="bg-primary text-light p-2"> الفصل الدراسي الاول</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم المادة</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($term_one as $term_on)
            <tr>
                <th scope="row">{{$term_on->id}}</th>
                <td>{{$term_on->name}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>


       <h3 class="bg-primary text-light p-2"> الفصل الدراسي الثاني</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم المادة</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($term_two as $term_tw)
            <tr>
                <th scope="row">{{$term_tw->id}}</th>
                <td>{{$term_tw->name}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>


@endsection
