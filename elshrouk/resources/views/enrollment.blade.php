
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>طلب الالتحاق بالاكاديمية</title>
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo+Play&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Dashboard-layout-v11-DashBoard-light-boostrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Dashboard-layout-v11-styles.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Dashboard-layout-v11.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Multi-step-form.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Navigation-Menu.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/NMDIGbanner.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Responsive-Form-Contact-Form-Clean.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Responsive-Form.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background: #335db0;">
        <div class="container-fluid">
            <div><a class="navbar-brand d-none" href="#"> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav main-nav">
                    <li class="nav-item"><a class="nav-link fs-5 link-light" id="home" href="{{url("/")}}" style="font-family: cairo;">الصفحة الرئيسية</a></li>
                    <li class="nav-item fs-5 text-light" style="font-family: cairo;"><a class="nav-link fs-5 link-light" href="#" style="font-family: cairo;">المعاهد</a></li>
                    <li class="nav-item fs-5 text-light" style="font-family: cairo;"><a class="nav-link fs-5 link-light" href="#" style="font-family: cairo;">اخبارنا</a></li>
                    <li class="nav-item fs-5 text-light" style="font-family: cairo;"><a class="nav-link fs-5 link-light" href="#" style="font-family: cairo;">عن الاكاديمية</a></li>
                    <li class="nav-item fs-5 text-light" style="font-family: cairo;"><a class="nav-link fs-5 link-light" href="#" style="font-family: cairo;">أتصل بنا</a></li>
                </ul><img class="ms-auto" src="{{asset('assets')}}/img/logo.png" width="82" height="69" style="background: #ffffff;">
            </div>
        </div>
    </nav>
    <div style="height: 413px;">
        <div class="header-blue" style="background-image: url(&quot;assets/img/headerback.jpg&quot;);background-position: right;">
            <div class="row">
                <div class="col-md-6 col-lg-5 offset-lg-1" style="background-color: rgba(33,69,111,0.87);margin-top: 75px;margin-left: 20px;margin-right: 20px;">
                    <h1 style="margin-top: 25px;margin-bottom: 25px;color: rgb(252,252,252);">طلب التحاق بالأكاديمية</h1>
                    <p style="color: rgb(255,253,253);margin-bottom: 25px;"></p>
                    <a href="{{url("/")}}">
                    <button class="btn btn-light btn-lg action-button" style="margin-bottom: 25px;" type="button">العودة للرئيسية</button>
                </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <form method="POST" action="{{route('enrollment.store')}}">
                @csrf
                <div class="form-group mb-3">

                    <div id="formdiv">
                        @if (session()->has('success'))
                        <div class="alert alert-warning w-100">
                        <span class="text-dark">{{session('success')}}</span>
                        </div>
                        @endif
                        @if ($errors->any())
                                <div class="alert alert-danger w-100">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session()->has("error_total"))
                                <div class="alert alert-danger">{{session()->get("error_total")}}</div>
                            @endif
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>إختر المعهد</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <select name="institute_id" class="form-select">
                                    {{-- <option>اختار المعهد</option> --}}
                                    @foreach ($institutes as $institute)
                                    <option value="{{$institute->id}}">{{$institute->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;margin-top: -16px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>المجموع الخاص بك</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input value="{{old('academic_total')}}" name="academic_total" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;margin-top: -16px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>الأسم بالانجليزية</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input value="{{old('username_en')}}" name="username_en" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;margin-top: -16px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>الأسم بالعربية</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input value="{{old('username_ar')}}" name="username_ar" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;margin-top: -16px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>الرقم القومى / جواز السفر</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input value="{{old('national_id')}}" name="national_id" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;margin-top: -16px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>البريد الالكتروني</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input value="{{old('email')}}" name="email" class="form-control" type="email"></div>
                        </div>
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>تاريخ الميلاد</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input value="{{old('birth_date')}}" name="birth_date" class="form-control" style="font-family: Roboto, sans-serif;" name="birthDate" type="date"></div>
                        </div>


                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>المحافظة</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1" style="font-family: Roboto, sans-serif;">
                                <select name="government_id" id="sub_category_name" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>المحافظة</option>
                                    @foreach ($governments as $government)
                                    <option value="{{$government->id}}">{{$government->governorate_name_ar}}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 24px;"><strong>المدينة</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1" style="font-family: Roboto, sans-serif;">
                                <select name="city_id" id="sub_category" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
                                    <option value="">اختر المحافظة اولاً</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                            <div class="col-md-8 offset-md-1">
                                <p style="margin-left: 2%;font-family: cairo;font-size: 24px;"><strong>العنوان بالتفصيل</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input value="{{old('address')}}" name="address" class="form-control" type="text" style="margin-left: 0px;font-family: Roboto, sans-serif;" name="birthPlace" placeholder="ادخل العنوان"></div>
                        </div>

                        <div class="row" style="margin-right: 0px;margin-left: 0px;padding-top: 24px;">
                            <div class="col-12 col-md-4 offset-md-4"><button class="btn btn-light btn-lg" style="font-family: Roboto, sans-serif;" type="reset">إلغاء </button><button class="btn btn-success btn-lg" style="margin-left: 16px;" type="submit">تقديم طلب  </button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
        $('#sub_category_name').on('change', function () {
        let id = $(this).val();
        $('#sub_category').empty();
        $('#sub_category').append(`<option value="0" disabled selected>جاري التحميل...</option>`);
        $.ajax({
        type: 'GET',
        url: 'cities/' + id,
        success: function (response) {
        var response = JSON.parse(response);
        console.log(response);
        $('#sub_category').empty();
        $('#sub_category').append(`<option value="0" disabled selected>اختار المدينة*</option>`);
        response.forEach(element => {
            $('#sub_category').append(`<option value="${element['id']}">${element['city_name_ar']}</option>`);
            });
        }
    });
});
});
</script>

    <script src="{{asset('assets')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/js/Dashboard-layout-v11-DashBoard-light-boostrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/js/agency.js"></script>
    <script src="{{asset('assets')}}/js/DataTable---Fully-BSS-Editable-style.js"></script>
    <script src="{{asset('assets')}}/js/Multi-step-form.js"></script>
    <script src="{{asset('assets')}}/js/Profile-Edit-Form-profile.js"></script>
    <script src="{{asset('assets')}}/js/Table-With-Search-search-table.js"></script>
</body>

</html>
