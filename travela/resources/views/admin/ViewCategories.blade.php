@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}"/>
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endpush
@include('admin/adminCommon/head')

<body class="with-welcome-text">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('admin/adminCommon/navbar')
        <div class="container-fluid page-body-wrapper">

            @include('admin/adminCommon/settingpanel')
            @include('admin/adminCommon/sidebar')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper" style="background-color: rgba(255, 255, 255, 0.658)">
                    <div class="ExploreTour ">
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
                                            @foreach ($TourCategory as $item)
                                                @include('components/TourCardCategory',['img' => "storage/{$item->ImgName}" ,'TourType' => $item->Type , 'places','View All Place' , 'delete' => '<a href="'.url("/TourManage/deleteTourCategoryDB?ID=$item->id").'" class="my-auto"><img src="' . asset("img/bin.png") . '" width="20px"/></a>', 'edit' => '<a href="'.url("/TourManage/editTourCategoryDB?ID=$item->id").'" class="my-auto ms-5"><img src="' . asset("img/edit.png") . '" width="20px"/></a>'   ,'ID' => $item->id ])
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @push('footerlinks')



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
        <!-- Template Javascript -->
    @endpush
    @include('admin/adminCommon/footer')
