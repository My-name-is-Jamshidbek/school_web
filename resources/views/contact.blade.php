@extends('layouts.layout')
@section('content')


    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('/fasset/images/slide1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Biz bilan aloqa</h2>

                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Biz bilan aloqa</h5>
                            <h2>Hoziroq bog'laning</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form id="contactForm" accept-charset="UTF-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" id = "name" placeholder="Ismingiz" data-error="Ism to'ldirilishi shart" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" id="email" placeholder="Email" data-error="Pochtangizni yozishingiz shart" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="subject" type="text" id = "subject" placeholder="Fan" data-error="Fan sohasi to'ldirilishi shart" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" id = "phone" placeholder="Telefon raqam" data-error="Telefon raqamni kiritishingiz shart" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="messege" placeholder="Xabar" id ="message" data-error="Iltimos xabaringizni kiriting" required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn">Jo'natish</button>
                                        </div> <!-- singel form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>O'zbekiston Respublikasi, Xorazm viloyati, Shovot tumani, K. Otaniyozov ko'chasi, 65-uy </p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+998-(93)-453-28-27</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>al.xorazmiy2021@gmail.com</p>

                                    </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <div class="map mt-30">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="465" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=41.659248362871026,%2060.27639777016081&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:200px;width:465px;}</style><a href="https://www.embedgooglemap.net">google maps code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:465px;}</style></div></div>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<x-layouts.footer></x-layouts.footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();
        var modalAjax = document.querySelector('.modal-back')
        if(modalAjax)modalAjax.classList.add("modal__disable");
        document.documentElement.style.removeProperty('overflow');
        document.documentElement.style.paddingRight = '0';
        let name = $('#name').val();
        let phone = $('#phone').val();
        let email = $('#email').val();
        let subject = $('#subject').val();
        let message = $('#message').val();
        $.ajax({
            url: "{{route('messages.store')}}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                phone: phone,
                email: email,
                subject: subject,
                message: message,
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Muvaffaqiyatli jo\'natildi',
                })
            },
            fail: function (response) {
                Swal.fire({
                    icon: 'fail',
                    title: 'Xatolik',
                })
            }
        });
    });
</script>
@endsection
