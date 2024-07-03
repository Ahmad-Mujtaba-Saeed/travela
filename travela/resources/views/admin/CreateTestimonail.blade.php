@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/bars-1to10.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/bars-horizontal.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/bars-movie.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/bars-pill.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/bars-reversed.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/bars-square.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/bootstrap-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/css-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/examples.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-bar-rating/fontawesome-stars.css') }}">
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
                                <h4 class="card-title">Add Fake testimonail</h4>
                                <p class="card-description">
                                    A testimonial is a formal statement testifying to someone's character and qualifications
                                </p>
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Location</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Location">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload testimonail image</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName3">Testimonial Comment</label>
                                        <textarea id="exampleInputName3 maxlength-textarea" class="form-control" maxlength="100" rows="2"
                                            placeholder="Add a Testimonial Comment of maximum 100 Characters"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-4 grid-margin stretch-card">
                                            <div class="card">
                                              <div class="card-body">
                                                <h4 class="card-title">CSS rating</h4>
                                                <p class="card-description">CSS star rating</p>
                                                <select id="example-css" name="rating" autocomplete="off">
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                </select>
                                              </div>
                                            </div>
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
        <script src="{{ asset('admin/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
        <script src="{{ asset('admin/js/file-upload.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
        <script src="{{ asset('admin/js/form-validation.js') }}"></script>
        <script src="{{ asset('admin/js/bt-maxLength.js') }}"></script>
    @endpush
    @include('admin/adminCommon/footer')
