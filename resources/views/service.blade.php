
@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"Servises"])

  
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->

    <!-- Service Start -->
@include('layout.service')
    <!-- Service End -->


    <!-- Testimonial Start -->
    
@include('layout.testimonial')
    <!-- Testimonial End -->

@endsection