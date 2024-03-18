@extends('layouts.layout')
@section('content')

    <!--====== PRELOADER PART START ======-->


    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->

   {{-- <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
--}}
    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url({{asset('fasset/images/slide1.jpg')}})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Biz bilan yuksak cho'qqilarni zabt et</h1>
{{--                            <ul>--}}
{{--                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Batafsil</a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url({{asset('fasset/images/slide2.jpg')}})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Iqtidoringni namoyon et</h1>    </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url({{asset('fasset/images/slide3.jpg')}})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Vaqtingni to'g'ri sarfla</h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Barcha fanlarni biz bilan oson o'rgan</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-1.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Ingliz tili</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-2.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Matematika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-3.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Fizika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-1.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Ingliz tili</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-2.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Matematika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-3.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Fizika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>

    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                        <div class="section-title mt-50">
                            {{--                        <h5>Biz haqimizda</h5>--}}
                            <h2>O`zbekiston respublikasi madhiyasi</h2>
                        </div> <!-- section title -->
                        <div class="about-cont ">
                            <p class="">
                                Serquyosh, hur o‘lkam, elga baxt, najot,
                                <br>
                                Sen o‘zing do‘stlarga yo‘ldosh, mehribon!
                                <br>
                                Yashnagay to abad ilmu fan, ijod,
                                <br>
                                Shuhrating porlasin toki bor jahon!
                                <br>
                                <br>
                                Oltin bu vodiylar — jon O‘zbekiston,
                                <br>
                                Ajdodlar mardona ruhi senga yor!
                                <br>
                                Ulug‘ xalq qudrati jo‘sh urgan zamon,
                                <br>
                                Olamni mahliyo aylagan diyor!
                                <br>
                                <br>
                                Bag‘ri keng o‘zbekning o‘chmas iymoni,
                                <br>
                                Erkin, yosh avlodlar senga zo‘r qanot!
                                <br>
                                Istiqlol mash'ali, tinchlik posboni,
                                <br>
                                Haqsevar, ona yurt, mangu bo‘l obod!
                                <br>
                                <br>
                                Oltin bu vodiylar — jon O‘zbekiston,
                                <br>
                                Ajdodlar mardona ruhi senga yor!
                                <br>
                                Ulug‘ xalq qudrati jo‘sh urgan zamon,
                                <br>
                                Olamni mahliyo aylagan diyor!
                            </p>
                        </div>
                    </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Maktab emblemasi</h3>
                        </div> <!-- event title -->
                        <img src="{{asset('fasset/images/emblem.jpg')}}" alt="Emblema"><br>
{{--                        <div class="event-title">--}}
{{--                            <h3>Maktab bayrog'i</h3>--}}
{{--                        </div> <!-- event title -->--}}
{{--                        <img src="{{asset('fasset/images/flag.png')}}" alt="Bayroq">--}}
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
{{--            <img src="{{asset('fasset/images/about/bg-1.png')}}" alt="About">--}}
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    {{--<section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for fall 2019</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Apply for scholarship</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>--}}

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

  {{--  <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-1.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-2.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-3.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-4.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-4.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-5.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                        </div>
                        <div class="cont">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(20 Reviws)</span>
                            <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="#"><img src="images/course/teacher/t-5.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>--}}

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url({{asset('fasset/images/school1.jpg')}})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=8IUOYkK7YQM"><i class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Bizning ixtisosliklar</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('fasset/images/all-icon/f-1.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Olimpiada va tanlovlar</h4>
                                        <p>O'zbekiston va Jahon olimpiadasida ishtirok etish</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('fasset/images/all-icon/f-2.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Barcha o'quvchilarning faolligi</h4>
                                        <p>O'quvchilarning barchasi dars jarayonida faol ishtirok eta oladilar.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('fasset/images/all-icon/f-3.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Kutubxona va resurslar</h4>
                                        <p>Bo'sh vaqtni mazmunli o'tkazish uchun kutubxona va resurslarning mavjudligi</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>

    <!--====== VIDEO FEATURE PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

   {{-- <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Career with us</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-1.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                                        <span>Vice chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-2.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>David card</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-3.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Rebeka alig</h6></a>
                                        <span>Pro chencelor</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="images/teachers/t-4.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.html"><h6>Hanna bein</h6></a>
                                        <span>Aerobics head</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
--}}
    <!--====== TEACHERS PART ENDS ======-->

    <!--====== PUBLICATION PART START ======-->

  {{--  <section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5>Publications</h5>
                        <h2>From Store </h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <a href="#" class="main-btn">All Products</a>
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="images/publication/p-1.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>Set for life </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($50)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="images/publication/p-2.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>A Daughters </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($30)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="images/publication/p-3.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>A Magnet </h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($20)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                        <div class="image">
                            <img src="images/publication/p-4.jpg" alt="Publication">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="name">
                                <a href="shop-singel.html"><h6>Pices of light</h6></a>
                                <span>By Scott Trench</span>
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy Now ($75)</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
--}}
    <!--====== PUBLICATION PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->
    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== NEWS PART START ======-->

    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>So'ngi yangiliklar</h5>
                        <h2>Yangiliklar</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">

                @foreach($posts as $new)
                <div class="col">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="{{asset('/storage/posts/' . $new->img)}}"  alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i> {{$new->created_at->format('d.m.Y')}} </a></li>
                            </ul>
                            <a href="{{route('news-item' , $new->id)}}"><h3>{{$new->header}}</h3></a>
                            <p>{{ \Illuminate\Support\Str::limit($new->description, 250, '...') }}</p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                    @endforeach

                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NEWS PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://uzedu.uz">  <img src="{{asset('fasset/images/uzedu.png')}}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://xorazmvxtb.uz/"><img src="{{asset('fasset/images/xorazm.png')}}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://ziyonet.uz"><img src="{{asset('fasset/images/ziyonet.png')}}" width="150px" alt="Logo"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://lex.uz/ru/">  <img src="{{asset('fasset/images/lex.png')}}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://eyuf.uz/">  <img src="{{asset('fasset/images/el.jpg')}}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://mininnovation.uz/"> <img src="{{asset('fasset/images/min.png')}}" width="150px" alt="Logo"></a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <x-layouts.footer></x-layouts.footer>
    @endsection

