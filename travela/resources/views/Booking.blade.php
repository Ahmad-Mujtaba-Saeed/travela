@push('title')
<title>Travela - Tourism Website Template</title>
@endpush
@include('common/head')
@include('common/navbar')



        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Online Booking</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Online Booking</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
        @include('common/Booking')


@include('common/footer')