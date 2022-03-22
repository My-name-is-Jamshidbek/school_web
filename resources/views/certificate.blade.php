@extends('layouts.layout')
@section('content')
<div class="container">
    @foreach($photos as $photo)
    <div class="gallery" id="gallery">
    <div class="gallery-item">
        <div class="content"><img src="{{asset('/storage/certificate/' . $photo->img)}}" alt=""></div>
    </div>
        @endforeach
</div>
    <script src="{{asset('fasset/js/gallery.js')}}"></script>
@endsection
