@push('title')
<title>Travela - Tourism Website Template</title>
@endpush
@include('common.head')
@include('common.navbar')

<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        @include('common/welcome')
        <!-- About End -->

        <!-- Travel Guide Start -->
        <div class="container-fluid guide py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Travel Guide</h5>
                    <h1 class="mb-0">Meet Our Guide</h1>
                </div>
                <div class="row g-4">
                    @foreach ($travelGuide as $item)
                        @include('components/guideCard',['img'=> "storage/{$item->ImgName}" , 'flink'=> $item->flink ,'tlink'=> $item->tlink,'ilink'=> $item->ilink,'llink'=> $item->llink,'Name'=> $item->Name,'Designation'=> 'Designation'])
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Travel Guide End -->

@include('common/footer')