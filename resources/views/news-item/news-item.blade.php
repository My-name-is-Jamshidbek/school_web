@extends('layouts.layout')
@section('content')
<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->

<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/news-item.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                                        <h2>{{$post->header}}</h2>

                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog-singel" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details mt-30">
                    <div class="thum">
                        <img src="{{asset('/storage/posts/' . $post->img)}}" width="100%" alt="Blog Details">
                    </div>
                    <div class="cont">
                        <h3>{{$post->header}}</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar"></i>{{$post->created_at->format('d.m.Y')}}</a></li>
                            <li><a href="#"><i class="fa fa-eye"></i>Ko'rildi: {{$post->viewed}}</a></li>
                        </ul>
                        <p>{{$post->description}}
                        </p>
                        </div> <!-- blog comment -->
                    </div> <!-- cont -->
                </div> <!-- blog details -->
            </div>

            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>







@endsection
