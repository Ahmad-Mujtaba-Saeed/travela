@push('title')
<title>Travela - Tourism Website Template</title>
@endpush
@include('common/head')
@include('common/navbar')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Our Testimonial</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Testimonial</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

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

@include('common/footer')