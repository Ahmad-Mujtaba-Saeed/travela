@push('title')
<title>Travela - Tourism Website Template</title>
@endpush
@include('common.head')
@include('common.navbar')



        <!-- 404 Start -->
        <div class="container-fluid py-5" style="background: linear-gradient(rgba(19, 53, 123, 0.3), rgba(19, 53, 153, 0.3)); object-fit: cover;">
            <div class="container py-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h1 class="display-1">Booking Confirmed</h1>
                        <h1 class="mb-4 text-dark">Thank you for confirmation </h1>
                        <p class="mb-4 text-dark">We'll contact you soon. Thank you for your corporation.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{url('/')}}">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->



@include('common/footer')