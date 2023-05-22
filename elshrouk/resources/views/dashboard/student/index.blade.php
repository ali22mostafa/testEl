@extends('dashboard.student.layouts.app')
@section('title')
لوحة تحكم الطالب | الرئيسية
@endsection
@section('content')

<div class="content">
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-4">
                <h4 style="font-family: cairo;">المعهد الخاص بك : {{Auth::user()->institute->name}}</h4>
            </div>
            <div class="col-md-4">
                <h4 style="font-family: cairo;">اخر ميعاد لدفع المصاريف : {{Auth::user()->institute->deadline}}</h4>
            </div>
            <div class="col-md-4">
                <h4 style="font-family: cairo;">مجموعك : %{{Auth::user()->academic_total}}</h4>
            </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('success_update'))
        <div class="alert alert-success">
            {{session()->get('success_update')}}
        </div>
        @endif
        <form action="{{route('student.update')}}" method="POST">
            @csrf
            <div class="row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input class="form-control form-control" type="file" name="avatar-file">
                </div>

                <div class="col-md-8">
                    <h1 style="font-family: cairo;">إعدادات الحساب</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="font-family: cairo;">الأسم بالانجليزية</label><input value="{{Auth::user()->username_en}}"  class="form-control" type="text" name="username_en"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="font-family: cairo;">الأسم بالعربي</label><input value="{{Auth::user()->username_ar}}" class="form-control" type="text" name="username_ar" style="font-family: cairo;"></div>
                        </div>
                    </div>
                    <div class="form-group mb-3" style="font-family: cairo;"><label class="form-label" style="font-family: cairo;">البريد الالكتروني</label><input value="{{Auth::user()->email}}" class="form-control" type="email"  name="email" style="font-family: cairo;"></div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label" style="font-family: cairo;">كلمة السر</label><input class="form-control" type="password" name="password"  ></div>
                        </div>

                    </div>
                        <div class="col-md-12 content-right"><button  class="btn btn-primary form-btn" type="submit" style="font-family: cairo;background: rgb(44,41,193);">تأكيد</button>
                            <button class="btn btn-danger form-btn" type="reset" style="font-family: cairo;">إلغاء</button>
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
