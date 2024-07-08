@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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
                    <div class="container-fluid guide py-5">
                        <div class="container py-5">
                            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                                <h5 class="section-title px-3">Travel Guide</h5>
                                <h1 class="mb-0">Meet Our Guide</h1>
                            </div>
                            
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Profile Img</th>
                                                <th>Name</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($travelGuide as $item)
                                                <tr>
                                                    <td><img src="{{ asset("storage/{$item->ImgName}") }}" /></td>
                                                    <td>{{ $item->Name }}</td>
                                                    <td><label class="btn badge badge-warning"><a
                                                                style="color: white ; text-decoration: none;"
                                                                href="{{ url('/TestimonialGuides/editTravelGuideDB?ID=' . $item->id . '') }}">Edit</a></label>
                                                    </td>
                                                    <td><label class="btn badge badge-danger"><a
                                                                style="color: white ; text-decoration: none;"
                                                                href="{{ url('/TestimonialGuides/deleteTravelGuideDB?ID=' . $item->id . '') }}">Delete</a></label>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
