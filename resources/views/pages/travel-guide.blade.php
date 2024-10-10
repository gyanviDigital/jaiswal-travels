@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"Travel - guide"])


  
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->


    <!-- Team Start -->
  
@include('layout.team')
    <!-- Team End -->

@endsection