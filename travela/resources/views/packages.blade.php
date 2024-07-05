@push('title')
<title>Travela - Tourism Website Template</title>
@endpush
@include('common/head')
@include('common/navbar')


<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Travel Packages</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Packages</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Packages Start -->
<div class="container-fluid packages py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Packages</h5>
            <h1 class="mb-0">Awesome Packages</h1>
        </div>
        <div class="row m-0 p-0 g-4">
        @foreach ($tourPackages as $item)
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,'img' => "storage/{$item->ImgName}" , 'Location' => $item->Location ,'Days'=> "{$item->Days} Days" ,'Cost' => $item->Cost, 'Description' => $item->ShortDescription , 'Stars' => $item->Rating])
        @endforeach
        {{ $tourPackages->links() }}
        </div>
    </div>
</div>
<!-- Packages End -->

<!-- Tour Booking Start -->
@include('common/Booking')
<!-- Tour Booking End -->

@include('common/footer')