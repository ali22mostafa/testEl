<div class="sidebar" data-color="purple" data-image="" style="background-image: url(&quot;assets/img/headerback.jpg&quot;);">
    <div class="sidebar-wrapper">
        <div class="logo"><a class="simple-text" href="#" style="font-family: cairo;">الإعدادت</a></div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{url('/employee')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">الرئيسية</a>
            </li>
            <li class="list-group-item">
            <a href="{{route('employee.enrollment')}}" style="color: var(--bs-list-group-bg);font-family: cairo;"> طلبات التقديم </a>
        </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">
                <a href="{{route("Certificates")}}" style="color: var(--bs-list-group-bg);font-family: cairo;">التحقق من طلبات استخراج الشهايد</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">
                <a href="{{route('Payments')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">التحقق من طلبات دفع المصاريف</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">

                <a href="{{route('logout')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">تسجيل الخروج</a>
            </li>
        </ul>
    </div>
</div>
