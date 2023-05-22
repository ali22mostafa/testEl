<div class="sidebar" data-color="purple" data-image="" style="background-image: url(&quot;assets/img/headerback.jpg&quot;);">
    <div class="sidebar-wrapper">
        <div class="logo"><a class="simple-text" href="{{route('student.index')}}" style="font-family: cairo;">الإعدادت</a></div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{route('student.index')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">تعديل البيانات</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">
                <a href="{{route('certificate.check')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">طلب شهادة</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">
                <a href="{{route('payments.check')}}"  style="color: var(--bs-list-group-bg);font-family: cairo;">دفع المصاريف</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">
                <a href="{{route('studying.subjects')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">عرض المواد المسجلة</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">
                <a href="{{route('results')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">عرض نتيجة الفصل الدراسى</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">
                <a href="{{route('student.poll')}}" style="color: var(--bs-list-group-bg);font-family: cairo;">نظام الاستبيانات</a>
            </li>
            <li class="list-group-item" style="color: var(--bs-list-group-bg);font-family: cairo;">

                <a href="{{route('logout_student')}}" style="color: var(--bs-list-group-bg);font-family: cairo;" type="submit">تسجيل الخروج</a>
            </li>
        </ul>
    </div>
</div>
