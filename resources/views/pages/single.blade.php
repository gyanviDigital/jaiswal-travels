@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"Page - Details"])

 
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('nepal/pokhra/pokhra-outdoor.webp')}}" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">08</h6>
                                    <small class="text-white text-uppercase">Oct</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Travels</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <h1 class="mb-3">Pokhara, N</h1>
                            <p>Welcome to Pokhara, the gateway to the majestic Annapurna region and one of Nepal's most beautiful cities. Nestled between the stunning Himalayan peaks and serene lakes, Pokhara offers a perfect blend of adventure, natural beauty, and cultural richness. Our mission is to provide visitors with unforgettable experiences, whether through thrilling outdoor activities like trekking, paragliding, and boating or exploring the vibrant local culture and cuisine.</p>
                            <p>We are passionate about showcasing the best of Pokhara, from the breathtaking sunrise views at Sarangkot to the tranquil ambiance of Phewa Lake. Our team is dedicated to ensuring a seamless and enjoyable experience for every traveler, with personalized itineraries and expert guidance. Join us in discovering the magic of Pokhara, where every moment becomes a cherished memory!






</p>
                            <h4 class="mb-3">Chitwan, Nepal</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{asset('nepal/chitwan.webp')}}">
                            <p>Welcome to Chitwan, a UNESCO World Heritage Site and one of Nepal's premier wildlife destinations. Nestled in the heart of the Terai lowlands, Chitwan National Park is renowned for its diverse flora and fauna, including the majestic one-horned rhinoceros, Bengal tigers, and a variety of bird species. Our mission is to provide visitors with an unforgettable experience that connects them with nature and the vibrant wildlife of this incredible region.</p>
                            <h5 class="mb-3">Ramjanki, Nepal</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="{{asset('nepal/janakpur.webp')}}">
                            <p>Welcome to Ramjanki, a serene and spiritually significant destination in Nepal. Nestled in the heart of the Terai region, Ramjanki is renowned for its rich cultural heritage and religious importance, particularly among Hindu pilgrims. Our goal is to provide visitors with a unique experience that blends spirituality, tradition, and natural beauty.</p>
                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                  
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <img src="{{$web_logo}}" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">{{$web_name}}</h3>
                        <p>Jaiswal Travels, based in Gorakhpur, specializes in creating unforgettable tour packages to Nepal, ensuring exceptional experiences and seamless adventures for every traveler.</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
    
                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                <input type="text" class="form-control p-4" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="{{url('/')}}"><i class="fa fa-angle-right text-primary mr-2"></i>Home</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="{{url('about')}}"><i class="fa fa-angle-right text-primary mr-2"></i>about-us</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="{{url('services')}}"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Services</a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="{{url('tour-packages')}}"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Tour packages</a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="{{url('contact')}}"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Contact</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                  
    
                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Nepal</a>
                            <a href="" class="btn btn-light m-1">Chitwan</a>
                            <a href="" class="btn btn-light m-1">Ramjanki</a>
                            <a href="" class="btn btn-light m-1">Bandipur</a>
                            <a href="" class="btn btn-light m-1">Bharatpur</a>
                            <a href="" class="btn btn-light m-1">Pokhra</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection