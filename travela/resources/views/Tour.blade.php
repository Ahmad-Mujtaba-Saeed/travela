@push('title')
<title>Travela - Tourism Website Template</title>
@endpush
@include('common/head')
@include('common/navbar')



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Tour Category</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Category</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        <!-- Explore Tour Start -->
        <div class="container-fluid ExploreTour py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Explore Tour</h5>
                    <h1 class="mb-4">The World</h1>
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


@include('common/footer')