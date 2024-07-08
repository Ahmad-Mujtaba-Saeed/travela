@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
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
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                @if (session('TourGuide'))
                                <?php $TourGuide = session('TourGuide'); ?>
                            @endif
                                <h4 class="card-title">Add Tour Guide</h4>
                                <p class="card-description">
                                    Tour Guide helps the customers of explaining their Packages and Go along with them
                                </p>
                                <form class="forms-sample"  action="{{ isset($TourGuide) ? url('/TestimonialGuides/editDBTravelGuideDB') : url('/TestimonialGuides/CreateTravelGuideDB') }}"
                                method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        @csrf
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="Name" class="form-control" id="exampleInputName1"
                                            placeholder="Name" value="{{$TourGuide->Name ?? ''}}">
                                    </div>
                                    <input name="id" class="d-none" value="{{ $TourGuide->id ?? '' }}">
                                    <input name="ImgName" type="text" class="d-none"
                                        value="{{ $TourGuide->ImgName ?? '' }}">
                                    <div class="form-group">
                                        <label>Upload Image of Travel Guide</label>
                                        <input type="file" name="img" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image" value="{{$TourGuide->ImgName ?? ''}}">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="material-form">
                                        <div class="form-group">
                                            <input name="flink" type="text" required="required" value="{{$TourGuide->flink ?? ''}}" />
                                            <label for="input" class="control-label">Facebook Link</label><i
                                                class="bar"></i>
                                        </div>
                                        <div class="form-group">
                                            <input name="tlink" type="text" required="required"  value="{{$TourGuide->tlink ?? ''}}"/>
                                            <label for="input" class="control-label">Twitter Link</label><i
                                                class="bar"></i>
                                        </div>
                                        <div class="form-group">
                                            <input name="ilink" type="text" required="required"  value="{{$TourGuide->ilink ?? ''}}"/>
                                            <label for="input" class="control-label">Instagram Link</label><i
                                                class="bar"></i>
                                        </div>
                                        <div class="form-group">
                                            <input name="llink" type="text" required="required"  value="{{$TourGuide->llink ?? ''}}"/>
                                            <label for="input" class="control-label">Linkedin Link</label><i
                                                class="bar"></i>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- partial -->
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
