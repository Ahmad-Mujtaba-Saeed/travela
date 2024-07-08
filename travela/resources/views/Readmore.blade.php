@push('title')
    <title>Travela - Tourism Website Template</title>
@endpush
@include('common/head')
@include('common/navbar')


{{-- .bg-breadcrumb {
    background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url(../img/breadcrumb-bg.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0 50px 0;
} --}}

@if (session('data'))
    <?php $data = session('data'); ?>
@endif

<div class="container-fluid "
    style="background: linear-gradient(rgba(19, 53, 123, 0.5), rgba(19, 53, 123, 0.5)), url({{url("storage/$data->ImgName")}});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 150px 0 50px 0;">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">{{$data->Location}}</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item"><a href="#">Packages</a></li>
                <li class="breadcrumb-item active text-white">{{$data->Location}}</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="d-flex">
        <h1>{{$data->Location}}</h1>
        <h3 class="ms-auto mt-1" style="">{{$data->Cost}}</h3>
        </div>
        <p>Tour of Total {{$data->Days}} Days</p>
        <br>
        <h3>Quick Intro to Tour :</h3>
        {{$data->ShortDescription}}
        <br>
        <br>
        <br>
        <h2>Detailed Information :</h2>
        
        {!! $data->DetailedDescription !!}
    </div>
</div>
<!-- Packages End -->

<!-- Tour Booking Start -->
@include('common/Booking')
<!-- Tour Booking End -->

@include('common/footer')
