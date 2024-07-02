@push('title')
    <title>Travela - Tourism Website Template</title>
@endpush
@include('common/head')
@include('common/navbar')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Our Travel Guides</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Guides</li>
            </ol>
    </div>
</div>
<!-- Header End -->
<!-- Travel Guide Start -->
<div class="container-fluid guide py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Travel Guide</h5>
            <h1 class="mb-0">Meet Our Guide</h1>
        </div>
        <div class="row g-4">
            @include('components/guideCard', [
                'img' => 'img/guide-1.jpg',
                'flink' => '#',
                'tlink' => '#',
                'ilink' => '#',
                'llink' => '#',
                'Name' => 'Ahmad Mujtaba',
                'Designation' => 'Designation',
            ])
            @include('components/guideCard', [
                'img' => 'img/guide-2.jpg',
                'flink' => '#',
                'tlink' => '#',
                'ilink' => '#',
                'llink' => '#',
                'Name' => 'Moshin',
                'Designation' => 'Designation',
            ])
            @include('components/guideCard', [
                'img' => 'img/guide-3.jpg',
                'flink' => '#',
                'tlink' => '#',
                'ilink' => '#',
                'llink' => '#',
                'Name' => 'Awais',
                'Designation' => 'Designation',
            ])
            @include('components/guideCard', [
                'img' => 'img/guide-4.jpg',
                'flink' => '#',
                'tlink' => '#',
                'ilink' => '#',
                'llink' => '#',
                'Name' => 'M Saeed',
                'Designation' => 'Designation',
            ])
        </div>
    </div>
</div>
<!-- Travel Guide End -->

@include('common/footer')
