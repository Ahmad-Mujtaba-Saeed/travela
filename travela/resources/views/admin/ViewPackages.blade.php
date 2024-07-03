@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
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
                    <div class="container-fluid packages">
                        <div class="container py-5">
                            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                                <h5 class="section-title px-3">Packages</h5>
                                <h1 class="mb-0">Awesome Packages</h1>
                            </div>
                            <div class="row m-0 p-0 g-4">
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-4.jpg', 'Location' => 'The New California' ,'Days'=> '3 days' ,'Cost' => '$449.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat', 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-2.jpg', 'Location' => 'Venice - Italy' ,'Days'=> '3 days' ,'Cost' => '$349.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'    , 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-3.jpg', 'Location' => 'Discover Japan' ,'Days'=> '3 days' ,'Cost' => '$549.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'    , 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-1.jpg', 'Location' => 'Thayland Trip' ,'Days'=> '3 days' ,'Cost' => '$649.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'     , 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-4.jpg', 'Location' => 'The New California' ,'Days'=> '3 days' ,'Cost' => '$449.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat', 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-2.jpg', 'Location' => 'Venice - Italy' ,'Days'=> '3 days' ,'Cost' => '$349.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'    , 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-3.jpg', 'Location' => 'Discover Japan' ,'Days'=> '3 days' ,'Cost' => '$549.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'    , 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
                                @include('components/packageCard',['extra_class' => 'col-12 col-md-6 col-lg-4' ,  'img' => 'img/packages-1.jpg', 'Location' => 'Thayland Trip' ,'Days'=> '3 days' ,'Cost' => '$649.00', 'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat'     , 'delete' => '<img src="' . asset("img/bin.png") . '" width="20px"/>' , 'edit' => '<img src="' . asset("img/edit.png") . '" width="20px"/>' , 'deleteURL' => '/delete/3' , 'editURL' => '/edit/3' ])
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
        
        <script src="{{ asset('admin/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
        <!-- Custom js for this page-->

        <script src="{{ asset('admin/js/file-upload.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
        <script src="{{ asset('admin/js/form-validation.js') }}"></script>
        <script src="{{ asset('admin/js/bt-maxLength.js') }}"></script>
        
    @endpush
    @include('admin/adminCommon/footer')
