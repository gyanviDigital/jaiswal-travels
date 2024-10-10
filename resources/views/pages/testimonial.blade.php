@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"Testimonial "])


  
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->

    <!-- Testimonial Start -->
    
@include('layout.testimonial')
    <!-- Testimonial End -->

@endsection