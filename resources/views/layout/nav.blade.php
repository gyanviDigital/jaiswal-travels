
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{url('')}}" class="navbar-brand">
                    <img src="{{$web_logo}}" alt="" class="" style="width: 100px;">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{url('')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                        <a href="{{url('services')}}" class="nav-item nav-link">Services</a>
                        <a href="{{url('tour-packages')}}" class="nav-item nav-link">Tour Packages</a>
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="{{url('blog-gride')}}" class="dropdown-item">Blog Grid</a>
                                <a href="{{url('blog-details')}}" class="dropdown-item">Blog Detail</a>
                                <a href="{{url('destination')}}" class="dropdown-item">Destination</a>
                                <a href="{{url('travel-guide')}}" class="dropdown-item">Travel Guides</a>
                                <a href="{{url('testimonial')}}" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
