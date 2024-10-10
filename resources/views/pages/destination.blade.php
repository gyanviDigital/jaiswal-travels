@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"Destination"])


  
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->

    <!-- Destination Start -->
   
@include('layout.destination')
    <!-- Destination Start -->

@endsection