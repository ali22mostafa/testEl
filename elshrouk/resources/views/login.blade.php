<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>تسجيل الدخول</title>
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
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-family: cairo;">تسجيل الدخول لأول مرة</h2>
                    <p style="font-family: cairo;">قم بتسجيل الدخول بالمعلومات التى وصلتك على البريد الإلكتروني</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgb(54,62,254);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                                <div class="form-check">
                                    <input class="form-check-input" value="employee" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      الدخول كموظف
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" value="student" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      الدخول كطالب
                                    </label>
                                  </div>
                            <form id="login-action" method="POST" action="" class="text-center">
                                @csrf

                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(58,54,254);">تسجيل الدخول</button></div>
                                <p class="text-muted">إعادة إرسال المعلومات؟</p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
            $('#flexRadioDefault1').on('change', function(e) {
               e.preventDefault();
                $('#login-action').attr('action', '{{route('login_submit')}}');
            });

            $('#flexRadioDefault2').on('change', function(e) {
               e.preventDefault();
                $('#login-action').attr('action', '{{route('login_submit_student')}}');
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
    {{-- <script src="{{asset('assets')}}/js/Multi-step-form.js"></script> --}}
    <script src="{{asset('assets')}}/js/Profile-Edit-Form-profile.js"></script>
    <script src="{{asset('assets')}}/js/Table-With-Search-search-table.js"></script>
</body>

</html>
