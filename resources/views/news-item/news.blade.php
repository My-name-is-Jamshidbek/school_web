@extends('layouts.layout')
@section('content')
<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->

<div class="search-box">
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

<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('/fasset/images/news.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Yangiliklar</h2>

                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @foreach($posts as $post)
                <div class="singel-blog mt-30">
                    <div class="blog-thum">
                        <img src="{{asset('/storage/posts/' . $post->img)}}" alt="rasm" width="100%" height="auto">
                    </div>
                    <div class="blog-cont">
                        <a href="{{route('news-item',$post->id)}}"><h3>{{$post->header}}</h3></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar"></i>{{$post->created_at->format('d.M.Y')}}</a></li>
                            <li><a href="#"><i class="fa fa-eye"></i>Ko'rildi: {{$post->viewed}}</a></li>
                        </ul>
                        <p>{{ \Illuminate\Support\Str::limit($post->description, 150, '...') }}</p>
                    </div>

                </div> <!-- singel blog -->
            @endforeach
                <!-- courses pagination -->
            </div>

        </div> <!-- row -->
    </div> <!-- container -->
</section>

@endsection
