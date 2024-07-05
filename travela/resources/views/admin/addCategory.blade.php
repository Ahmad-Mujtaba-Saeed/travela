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
                                @if (session('category'))
                                    <?php $category = session('category'); ?>
                                @endif

                                <h4 class="card-title">Add Tour Category</h4>
                                <p class="card-description">
                                    Specify the Tour is such as Road Trip Or any Historical Trip
                                </p>
                                <form class="forms-sample"
                                    action="{{ isset($category) ? url('/TourManage/editDBTourCategoryDB') : url('/TourManage/addTourCategoryDB') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Tour Type</label>
                                        <input type="text" name="Type" class="form-control" id="exampleInputName1"
                                            placeholder="ie., Family Tour , Historical Trip , Road Trip"
                                            value="{{ $category->Type ?? '' }}" required>
                                    </div>
                                    <input name="id" class="d-none" value="{{ $category->id ?? '' }}">
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img" class="file-upload-default"
                                            {{ isset($category) ? '' : 'required' }}>
                                        <div class="input-group col-xs-12">
                                            <input type="text" value="{{ $category->ImgName ?? '' }}"
                                                class="form-control file-upload-info" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName3">Text Area</label>
                                        <textarea name="description" id="exampleInputName3 maxlength-textarea" class="form-control" maxlength="100"
                                            rows="2" placeholder="Add a description of maximum 100 Characters" required> {{ $category->description ?? '' }} </textarea>
                                    </div>
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
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
