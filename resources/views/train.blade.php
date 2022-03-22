@extends('layouts.layout')
@section('content')

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Maktab O'quv ishlari bo'yicha direktor o'rinbosari</h2>

                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{asset('fasset/train.png')}}" alt="Direktor">
                        </div>
                        <div class="name">
                            <h6>Ro'zmetov Qudrat</h6>

                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                        <div class="description">
                            <p>

                            </p>
                        </div>
                    </div> <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>Ma'lumotnoma</h5>
                                        <p>1967 - yilda tug'ilgan. Ma'lumoti Oliy, Millati: o'zbek. 1991-yilda Samarqand davlat pedagogika universitetini tugatgan.</p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h5>Kasbiy faoliyati</h5>
                                        <p>
                                            1984-1991 yy.-   Samarqand davlat  universiteti talabasi <br>
                                            1986-1988 yy -   Xarbiy xizmatda <br>
                                            1991-1992 yy .-  Xorazm viloyati Shovot tumanidagi Krupskaya nomli maktabda  o'qituvchi
                                            <br>
                                            1992-2010 yy-    Xorazm viloyati Shovot tumanidagi 1-IMI da tarbiyachi <br>
                                            2011-2021 yy.  - Xorazm viloyati Shovot tumanidagi 1-IMI da  O'IB direktor o'rinbosari
                                            <br>
                                            2021 y. h.v       -  Xorazm viloyati Shovot tumani Al-Xorazmiy nomidagi Xalqaro fizika va
                                            matematika maktab-internatida  o'quv ishlari bo'yicha direktor  o'rinbosari
                                            <br>

                                        </p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h5>Bog'lanish uchun:</h5>
                                        <p><i class="fa fa-phone"></i>Tel: <b>+998919126376</b></p>
                                        <p><i class = "fa fa-envelope"></i> E-pochta: </p>
                                        <p>Qabul kunlari: Dushanba - Juma soat 10<sup>00</sup> dan 12<sup>00</sup> gacha</p>
                                    </div> <!-- singel dashboard -->
                                </div> <!-- dashboard cont -->
                            </div>

                        </div>
                    </div> <!-- tab content -->
                </div> <!-- teachers right -->
            </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->
    <x-layouts.footer></x-layouts.footer>
@endsection
