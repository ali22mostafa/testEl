@extends('layouts.app')
@section('title')
الرئيسية اكاديمية الشروق
@endsection
@section('content')
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
                <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="img-thumbnail img-fluid border-0 border-dark w-100 h-100 fit-cover" src="{{asset('assets')}}/img/03.jpg"></div>
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
@endsection
