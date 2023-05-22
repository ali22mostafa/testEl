<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo+Play&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11-DashBoard-light-boostrap.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11-styles.css">
    <link rel="stylesheet" href="assets/css/Dashboard-layout-v11.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/NMDIGbanner.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-styles.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    @extends('layouts.navbar')
    <header class="masthead" style="background-image: url('assets/img/headerback.jpg');filter: brightness;">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"></div>
                <div class="intro-heading text-uppercase"></div>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="font-family: Cairo, sans-serif;">خدمات الموقع</h2>
                    <h6 class="text-muted section-subheading" style="font-family: Cairo, sans-serif;">هذا ما يوفره الموقع من خدمات</h6>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4" style="background: var(--bs-red);">
                    <h4 class="section-heading" style="font-family: Cairo, sans-serif;color: rgb(255,255,255);">طلب إلتحاق بالأكاديمة</h4>
                </div>
                <div class="col-md-4" style="background: var(--bs-blue);">
                    <h4 class="section-heading" style="font-family: Cairo, sans-serif;color: var(--bs-white);">الدفع الالكترونى</h4>
                </div>
                <div class="col-md-4" style="background: var(--bs-code-color);">
                    <h4 class="section-heading" style="font-family: Cairo, sans-serif;color: rgb(255,255,255);">تسجيل دخول</h4>
                </div>
                <div class="col-md-4" style="background: var(--bs-gray-900);">
                    <h4 class="section-heading" style="font-family: Cairo, sans-serif;color: rgb(255,255,255);">المواد الدراسية</h4>
                </div>
                <div class="col-md-4" style="background: var(--bs-purple);">
                    <h4 class="section-heading" style="font-family: Cairo, sans-serif;color: var(--bs-white);">نظام الإستبيانات</h4>
                </div>
                <div class="col-md-4" style="background: var(--bs-success);">
                    <h4 class="section-heading" style="font-family: Cairo, sans-serif;color: rgb(255,255,255);">نتائج الطلاب</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="bg-dark border rounded border-0 border-dark overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold text-white mb-3" style="font-family: Cairo, sans-serif;">كلمة المهندس محمد فريد خميس</h2>
                            <p class="mb-4" style="font-family: Cairo, sans-serif;">فى خضم الإيقاع السريع للقرن الواحد والعشرين ليس هناك فرصة إلا لمن يتسلح بمزيج متجانس من العلم والأخلاق والثقافة وكلما أستزاد منها الأنسان كلما كان قوياً يواجه المصاعب ويصعد سلم النجاح بيسر وتوازن وسرعة من أجل هذا كان أهتمامنا منذ اليوم الأول بأن نقدم لمصر الغالية خريجاً على قدر عالي من العلم التخصصي مع تنمية المهارات الإبداعية وتقويم السلوكيات بالقدوة الحسنة والإضافات الثقافية بطريقة تجعل الطالب دائماً شغوفاً بالبحث عن المزيد من العلم والثقافة وتقويم النفس</p>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="img-thumbnail img-fluid border-0 border-dark w-100 h-100 fit-cover" src="assets/img/03.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" style="background-image: url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading" style="font-family: Cairo, sans-serif;">تواصل معنا</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 lead"></small></div>
                                <div class="form-group mb-3"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger lead"></small></div>
                                <div class="form-group mb-3"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger lead"></small></div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" style="font-family: Cairo, sans-serif;background: var(--bs-blue);">أرسل رسالة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @extends('layouts.footer')

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="assets/js/Dashboard-layout-v11-DashBoard-light-boostrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/DataTable---Fully-BSS-Editable-style.js"></script>
    {{-- <script src="assets/js/Multi-step-form.js"></script> --}}
    <script src="assets/js/Profile-Edit-Form-profile.js"></script>
    <script src="assets/js/Table-With-Search-search-table.js"></script>
</body>

</html>
