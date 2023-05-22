<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo+Play&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/fonts/fontawesome5-overrides.min.css">
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
    <div class="wrapper">
        @extends('dashboard.student.layouts.aside')
        <div class="main-panel">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid">
                    <div><a class="navbar-brand" href="#" style="font-family: cairo;">مرحبا بك احمد</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav"></ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="{{url('/student')}}">إعدادات الحساب</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
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
   @yield('scripts')
</body>

</html>
