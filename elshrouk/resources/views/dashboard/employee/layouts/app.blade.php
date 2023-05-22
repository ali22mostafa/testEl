<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css">
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
        @extends('dashboard.employee.layouts.aside')
        <div class="main-panel">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid">
                    <div><a class="navbar-brand" href="#" style="font-family: cairo;">مرحبا بك {{Auth::user()->name}}</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav"></ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="{{url('employee')}}">إعدادات الحساب</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
           @yield('content')
        </div>
    </div>
    <script src="{{asset('assets')}}/bootstrap/js/bootstrap.min.js"></script>
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
