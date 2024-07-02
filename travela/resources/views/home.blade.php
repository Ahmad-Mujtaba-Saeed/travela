@push('title')
<title>Travela - Tourism Website Template</title>
@endpush
@include('common/head')
@include('common/navbar')
            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Let's The World Together!</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Find Your Perfect Tour At Travel</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Explore The World</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">You Like To Go?</h1>
                                    <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="#">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
            <div class="container">
                <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2" style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        @include('common/welcome')
        <!-- About End -->



        <!-- Services Start -->
        @include('common/ourservices')
        <!-- Services End -->




        <!-- Explore Tour Start -->
        <div class="container-fluid ExploreTour py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Explore Tour</h5>
                    <h1 class="mb-4">Tours Offered By Travela</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                    </p>
                </div>
                <div class="tab-class text-center">
                    
                    <div class="tab-content">
                        <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @include('components/TourCardCategory',['img' => 'img/explore-tour-1.jpg' ,'TourType' => 'Weekend Tour' , 'places','View All Place'])
                                @include('components/TourCardCategory',['img' => 'img/explore-tour-2.jpg' ,'TourType' => 'Holiday Tour' , 'places','View All Place'])
                                @include('components/TourCardCategory',['img' => 'img/explore-tour-3.jpg' ,'TourType' => 'Road Trips' , 'places','View All Place'])
                                @include('components/TourCardCategory',['img' => 'img/explore-tour-4.jpg' ,'TourType' => 'Historical Trips' , 'places','View All Place'])
                                @include('components/TourCardCategory',['img' => 'img/explore-tour-5.jpg' ,'TourType' => 'Family Tour' , 'places','View All Place'])
                                @include('components/TourCardCategory',['img' => 'img/explore-tour-6.jpg' ,'TourType' => 'Beach Tour' , 'places','View All Place'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Explore Tour Start -->

        <!-- Packages Start -->
        <div class="container-fluid packages py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Packages</h5>
                    <h1 class="mb-0">Most Popular Packages</h1>
                </div>
                <div class="packages-carousel owl-carousel">
                    @include('components/packageCard',['img' => 'img/packages-4.jpg', 'Location' => 'The New California' ,'Days'=> '3 days' ,'Cost' => '$449.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'])
                    @include('components/packageCard',['img' => 'img/packages-2.jpg', 'Location' => 'Venice - Italy' ,'Days'=> '3 days' ,'Cost' => '$349.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ])
                    @include('components/packageCard',['img' => 'img/packages-3.jpg', 'Location' => 'Discover Japan' ,'Days'=> '3 days' ,'Cost' => '$549.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ,''])
                    @include('components/packageCard',['img' => 'img/packages-1.jpg', 'Location' => 'Thayland Trip' ,'Days'=> '3 days' ,'Cost' => '$649.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ,''])
                </div>
            </div>
        </div>
        <!-- Packages End -->


        <!-- Tour Booking Start -->
        @include('common/Booking')
        <!-- Tour Booking End -->

        <!-- Travel Guide Start -->
        <div class="container-fluid guide py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Travel Guide</h5>
                    <h1 class="mb-0">Meet Our Guide</h1>
                </div>
                <div class="row g-4">
                    @include('components/guideCard',['img'=> 'img/guide-1.jpg','flink'=> '#','tlink'=> '#','ilink'=> '#','llink'=> '#','Name'=> 'Ahmad Mujtaba','Designation'=> 'Designation'])
                    @include('components/guideCard',['img'=> 'img/guide-2.jpg','flink'=> '#','tlink'=> '#','ilink'=> '#','llink'=> '#','Name'=> 'Moshin','Designation'=> 'Designation'])
                    @include('components/guideCard',['img'=> 'img/guide-3.jpg','flink'=> '#','tlink'=> '#','ilink'=> '#','llink'=> '#','Name'=> 'Awais','Designation'=> 'Designation'])
                    @include('components/guideCard',['img'=> 'img/guide-4.jpg','flink'=> '#','tlink'=> '#','ilink'=> '#','llink'=> '#','Name'=> 'M Saeed','Designation'=> 'Designation'])
                </div>
            </div>
        </div>
        <!-- Travel Guide End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    @include('components/testimonialCard',['img'=>'img/testimonial-1.jpg','Paragraph'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,','Name' => 'John Abraham' ,'Location' => 'New York, USA' ,'Stars' => 5])
                    @include('components/testimonialCard',['img'=>'img/testimonial-2.jpg','Paragraph'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,','Name' => 'John Abraham' ,'Location' => 'New York, USA' ,'Stars' => 4])
                    @include('components/testimonialCard',['img'=>'img/testimonial-3.jpg','Paragraph'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,','Name' => 'John Abraham' ,'Location' => 'New York, USA' ,'Stars' => 3])
                    @include('components/testimonialCard',['img'=>'img/testimonial-4.jpg','Paragraph'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,','Name' => 'John Abraham' ,'Location' => 'New York, USA' ,'Stars' => 2])
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

@include('common/footer')