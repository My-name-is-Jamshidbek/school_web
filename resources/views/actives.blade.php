@extends('layouts.layout')
@section('content')


    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                @if(isset($posts))
                @foreach($posts as $post)
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-teachers mt-30 text-center">
                        <div class="image">
                            <img src="{{asset('/storage/veteran/' . $post->img)}}" alt="Faollar">
                        </div>
                        <div class="cont">
                            <a href="{{route('active',$post->id)}}"><h6>{{$post->name}}</h6></a>

                        </div>
                    </div> <!-- singel teachers -->
                </div>
                @endforeach
                @endif
            </div> <!-- row -->

        </div> <!-- container -->
    </section>
<x-layouts.footer></x-layouts.footer>
@endsection
