@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
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
                                @if (session('Testimonail'))
                                    <?php $Testimonail = session('Testimonail'); ?>
                                @endif
                                <h4 class="card-title">Add Fake testimonail</h4>
                                <p class="card-description">
                                    A testimonial is a formal statement testifying to someone's character and
                                    qualifications
                                </p>
                                <form class="forms-sample"
                                    action="{{ isset($Testimonail) ? url('/TestimonialGuides/editDBTestimonailDB') : url('/TestimonialGuides/CreateTestimonailDB') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input name="Name" type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Name" value="{{ $Testimonail->Name ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Location</label>
                                        <input type="text" name="Location" class="form-control"
                                            id="exampleInputName1" placeholder="Location"
                                            value="{{ $Testimonail->Location ?? '' }}">
                                    </div>
                                    <input name="id" class="d-none" value="{{ $Testimonail->id ?? '' }}">
                                    <input name="ImgName" type="text" class="d-none"
                                        value="{{ $Testimonail->ImgName ?? '' }}">
                                    <div class="form-group">
                                        <label>Upload testimonail image</label>
                                        <input type="file" name="img" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image" value="{{ $Testimonail->ImgName ?? '' }}">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName3">Testimonial Comment</label>
                                        <textarea name="Comment" id="exampleInputName3 maxlength-textarea" class="form-control" maxlength="100" rows="2"
                                            placeholder="Add a Testimonial Comment of maximum 100 Characters">{{ $Testimonail->Comment ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Select Rating for this testimonail</label>
                                            <select name="Rating" class="js-example-basic-single w-100">
                                                @php
                                                    $collection = [1, 2, 3, 4, 5];
                                                @endphp
                                                @foreach ($collection as $item)
                                                    <option value="{{ $item }}"
                                                        {{ isset($Testimonail) && $item == $Testimonail->Rating ? 'selected' : '' }}>
                                                        {{ $item }}
                                                    </option>
                                                @endforeach
                                            </select>
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
        <script src="{{ asset('admin/js/file-upload.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
        <script src="{{ asset('admin/js/form-validation.js') }}"></script>
        <script src="{{ asset('admin/js/bt-maxLength.js') }}"></script>
        <script src="{{ asset('admin/vendors/select2/select2.min.js') }}"></script>
        <script src="{{ asset('admin/js/select2.js') }}"></script>
    @endpush
    @include('admin/adminCommon/footer')
