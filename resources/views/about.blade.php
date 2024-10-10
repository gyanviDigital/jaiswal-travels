@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"about - us"])

 
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->


    <!-- About Start -->
    
@include('layout.about')
    <!-- About End -->


    <!-- Feature Start -->
   
@include('layout.feature-start')
    <!-- Feature End -->


    <!-- Registration Start -->
   
@include('layout.registration')
    <!-- Registration End -->


    <!-- Team Start -->
  
@include('layout.team')
    <!-- Team End -->

@endsection