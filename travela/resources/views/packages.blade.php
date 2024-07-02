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
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-4.jpg', 'Location' => 'The New California' ,'Days'=> '3 days' ,'Cost' => '$449.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'])
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-2.jpg', 'Location' => 'Venice - Italy' ,'Days'=> '3 days' ,'Cost' => '$349.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ])
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-3.jpg', 'Location' => 'Discover Japan' ,'Days'=> '3 days' ,'Cost' => '$549.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ,''])
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-1.jpg', 'Location' => 'Thayland Trip' ,'Days'=> '3 days' ,'Cost' => '$649.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ,''])
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-4.jpg', 'Location' => 'The New California' ,'Days'=> '3 days' ,'Cost' => '$449.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'])
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-2.jpg', 'Location' => 'Venice - Italy' ,'Days'=> '3 days' ,'Cost' => '$349.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ])
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-3.jpg', 'Location' => 'Discover Japan' ,'Days'=> '3 days' ,'Cost' => '$549.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ,''])
            @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-1.jpg', 'Location' => 'Thayland Trip' ,'Days'=> '3 days' ,'Cost' => '$649.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat' ,''])
        </div>
    </div>
</div>
<!-- Packages End -->

<!-- Tour Booking Start -->
@include('common/Booking')
<!-- Tour Booking End -->

@include('common/footer')