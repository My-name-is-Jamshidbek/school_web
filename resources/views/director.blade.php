@extends('layouts.layout')
@section('content')

<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Maktab direktori</h2>

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
                        <img src="{{asset('fasset/director1.png')}}" alt="Direktor">
                    </div>
                    <div class="name">
                        <h6>Do‘schanov  Muzaffar</h6>

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
                           2017- yildan hozirgi kunga qadar muassasa direktori lavozimida ishlab kelmoqda
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
                                    <p>1976 - yilda tug'ilgan. Ma'lumoti Oliy, Millati: o'zbek. 1998-yilda Toshkent davlat universitetini tugatgan.</p>
                                </div> <!-- singel dashboard -->
                                <div class="singel-dashboard pt-40">
                                    <h5>Kasbiy faoliyati</h5>
                                   <p><p>1993-1998 yy. – Toshkent davlat universiteti talabasi <br>
                                        1998-2008 yy. – Shovot tuman 37-umumiy o'rta ta'lim maktabida fizika fani o'qituvchisi
                                        <br>
                                        2008-2011 yy. - Shovot tuman 37-umumiy o'rta ta'lim maktabi direktori <br>
                                        2011-2016 yy. – Toshkent axborot texnologiyalari universiteti Urganch filiali qoshidagi 1-son akademik litsey “Aniq fanlar” yo'nalishi bo'lim boshlig'i
                                        <br>
                                        2016- 2017yy.  - Shovot tuman 36-umumiy o'rta ta'lim maktabi direktori <br>
                                        2017-2021yy   – Ayrim fanlar chuqur o'rganiladigan 1-ixtisoslashtirilgan maktab-internati

                                        direktori    <br>
                                        2021 y. h.v      – Xorazm viloyati Shovot tumani  Al-Xorazmiy nomidagi Xalqaro fizika
                                        va matematika  maktab-internat direktori <br>
                                    </p></p>
                                </div> <!-- singel dashboard -->
                                <div class="singel-dashboard pt-40">
                                    <h5>Bog'lanish uchun:</h5>
                                    <p><i class="fa fa-phone"></i>Tel: <b>+998934532827</b></p>
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
