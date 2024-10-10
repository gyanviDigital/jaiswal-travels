@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"Tour - Packages"])


    
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->

    <!-- Packages Start -->
@include('layout.packages')
    <!-- Packages End -->


    <!-- Destination Start -->
@include('layout.destination')
    <!-- Destination Start -->

@endsection