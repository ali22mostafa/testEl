@extends('dashboard.student.layouts.app')
@section('title')
طلب استعلام عن المصاريف
@endsection
@section('content')

<div class="content">

    <h3 class="bg-dark text-light p-2"> طلب استعلام عن المصاريف</h3>
    <center>
    <h2>حالة الدفع الخاصة بك هي : <span class="bg-primary text-light p-3 rounded">{{Auth::user()->status}}</span>
    </h2>

        @if (!isset(Auth::user()->payment->request))
        <form method="GET" class="mt-5" action="{{route('payment.request')}}">
            @csrf
            <button class="btn btn-success" type="submit">تقديم طلب</button>
        </form>
        @endif

        @if (session()->has("success"))
        <div class="alert alert-success">{{session()->get("success")}}</div>
    @endif

    </center>
@endsection
