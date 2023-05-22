@extends('dashboard.student.layouts.app')
@section('title')
طلب استخراج شهادة
@endsection
@section('content')
<div class="content">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif
    <h3 class="bg-dark text-light p-2"> طلب استخراج شهادة</h3>

    @if (Auth::user()->certificate_type == 0)
   <form method="POST" action="{{route('certificate.order',Auth::user()->id)}}">
    @csrf
    <input value="1" name="certificate_type" type="hidden">
    <button type="submit" class="btn btn-success">تقديم طلب شهادة</button>
   </form>
   @endif

   @if (Auth::user()->certificate_type == 1)
   <h3 class="bg-primary text-light p-2"> حالة الطلب الحالية | قيد الانتظار</h3>
    @endif

    @if (Auth::user()->certificate_type == 2)
   <h3 class="bg-success text-light p-2"> حالة الطلب الحالية | تحت التسليم</h3>
    @endif
@endsection
