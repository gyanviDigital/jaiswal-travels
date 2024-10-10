@extends('layout.index')
@section('main')
@include('layout.page_name',['page_name'=>"Blog"])
   
    <!-- Booking start -->
@include('layout.enquery1')
    <!-- Booking End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pb-3">
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog1.jpg')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">01</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                   <span>
                                    <strong> Discover the Majesty of the Himalayas</strong> <br>
                                   
Experience breathtaking views and thrilling adventures with our best tour packages to Nepal, featuring iconic destinations like Everest Base Camp and Annapurna. Whether you're an avid trekker or a casual explorer, we have the perfect itinerary for you.
                                   </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog2.webp')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">02</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                <span>
                                    <strong>Cultural Immersion in Kathmandu</strong> <br>

Dive into the rich cultural heritage of Kathmandu with our curated tours that include visits to UNESCO World Heritage sites, vibrant local markets, and authentic culinary experiences. Explore the city’s ancient temples and bustling streets while immersing yourself in its unique traditions.
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog3.webp')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">03</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                    <span>
                                    <strong>Adventure Awaits in Pokhara</strong> <br>
                                    
From paragliding over stunning landscapes to trekking in the Annapurna region, our Pokhara adventure packages offer an exhilarating experience. Enjoy a peaceful boat ride on Phewa Lake and witness mesmerizing sunsets against the backdrop of the Himalayas.
                                </span>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog4.jpg')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">04</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                    <span>
                                    <strong>Wildlife Safari in Chitwan National Park</strong> <br>
                                    
Embark on an unforgettable safari adventure in Chitwan National Park, home to diverse wildlife, including the endangered one-horned rhinoceros and Bengal tigers. Our tour packages include jeep safaris, elephant rides, and guided bird-watching excursions.


                                </span>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog5.jpg')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">05</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                    <span>
                                    <strong>Spiritual Journey to Lumbini</strong> <br>
                                    
Visit the birthplace of Lord Buddha with our spiritual tour packages to Lumbini. Explore sacred sites, serene meditation gardens, and ancient monasteries, all while experiencing the peaceful atmosphere that attracts pilgrims from around the world.
                                </span>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog6.jpg')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">06</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                    <span>
                                    <strong> Explore the Scenic Beauty of Bandipur</strong> <br>
                                   
Discover the charming hilltop town of Bandipur, known for its stunning views and preserved Newari culture. Our travel packages include guided tours of the town’s historical sites, hiking trails, and delicious local cuisine, making it a perfect retreat.


                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog7.jpg')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">07</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                    <span>
                                    <strong> Trekking the Annapurna Circuit</strong> <br>
                                   
Experience one of the most popular trekking routes in the world with our Annapurna Circuit packages. Enjoy breathtaking landscapes, diverse ecosystems, and encounters with local communities, all while trekking through the heart of the Himalayas.
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset('image/blog/blog8.jpg')}}" alt="" style="height:300px;">
                                    <div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">08</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Traveler</a>
                                        <span class="text-primary px-2">|</span>
                                        <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                    </div>
                                    <span>
                                    <strong> Customized Family Tours in Nepal</strong> <br>
                                   
Travel with your family and explore the best of Nepal with our tailored family tour packages. From kid-friendly activities in Pokhara to cultural experiences in Kathmandu, we ensure a fun and enriching adventure for all ages.
                                </span>
                                    </div>
                            </div>
                        </div>

                        <!-- <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg justify-content-center bg-white mb-0" style="padding: 30px;">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                  </li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div> -->
                    </div>
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
    
                    <!-- Recent Post -->
                
    
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
