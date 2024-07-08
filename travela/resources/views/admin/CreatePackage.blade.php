@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
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
                                @if (session('package'))
                                    <?php $package = session('package'); ?>
                                @endif
                                <h4 class="card-title">Create a new Tour Package</h4>
                                <p class="card-description">
                                    Explain everything briefly and clear.
                                </p>
                                <form class="forms-sample"
                                    action="{{ isset($package) ? url('/TourManage/editDBPackageDB') : url('/TourManage/CreatePackageDB') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Tour Location</label>
                                        <input type="text" name="Location" class="form-control"
                                            id="exampleInputName1" placeholder="ie., Faislabad , Lahore , Murree"
                                            value="{{ $package->Location ?? '' }}">
                                    </div>
                                    <input name="id" class="d-none" value="{{ $package->id ?? '' }}">
                                    <input name="ImgName" type="text" class="d-none"
                                        value="{{ $package->ImgName ?? '' }}">
                                    <div class="form-group">
                                        <label>Cost of Tour</label>
                                        <input name="Cost" type="text" value="{{ $package->Cost ?? '00:00' }}"
                                            class="form-control" data-inputmask="'alias': 'currency'" />
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img" class="file-upload-default"
                                            {{ isset($package) ? '' : 'required' }}>
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image" value="{{ $package->ImgName ?? '' }}">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Select Category For this Package</label>
                                            <select name="CategoryID" class="js-example-basic-single w-100">
                                                @foreach ($TourCategory as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ isset($package) && $item->id == $package->CategoryID ? 'selected' : '' }}>
                                                        {{ $item->Type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Days of Tour</label>
                                        <input name="Days" type="number" value="{{ $package->Days ?? '' }}"
                                            class="form-control" id="exampleInputName1"
                                            placeholder="Number of Days of Tour">
                                    </div>
                                    <div class="form-group">
                                        <label>Select Rating for this Package</label>
                                        <select name="Rating" class="js-example-basic-single w-100">
                                            @php
                                                $collection = [1, 2, 3, 4, 5];
                                            @endphp
                                            @foreach ($collection as $item)
                                                <option value="{{ $item }}"
                                                    {{ isset($package) && $item == $package->Rating ? 'selected' : '' }}>
                                                    {{ $item }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName3">Short Description</label>
                                        <textarea name="ShortDescription" id="exampleInputName3 maxlength-textarea" class="form-control" maxlength="300"
                                            rows="2" placeholder="Short Description of Tour of maximum 500 Characters">{{ $package->ShortDescription ?? null }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tinyMceExample">Detailed Description</label>
                                        <textarea name="DetailedDescription" id='tinyMceExample'>
                                            {{ $package->DetailedDescription ?? 'Edit your content here...' }}
                                    </textarea>
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
        <script src="{{ asset('admin/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/jquery.repeater/jquery.repeater.min.js') }}"></script>
        <script src="{{ asset('admin/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
        <script src="{{ asset('admin/js/form-repeater.js') }}"></script>
        <script src="{{ asset('admin/js/inputmask.js') }}"></script>
        <script src="{{ asset('admin/js/formpickers.js') }}"></script>
        <script src="{{ asset('admin/js/form-addons.js') }}"></script>
        <script src="{{ asset('admin/vendors/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('admin/js/file-upload.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.cookie.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/dashboard.js') }}"></script>
        <script src="{{ asset('admin/js/form-validation.js') }}"></script>
        <script src="{{ asset('admin/js/bt-maxLength.js') }}"></script>
        <script src="{{ asset('admin/js/editorDemo.js') }}"></script>
        <script src="{{ asset('admin/vendors/select2/select2.min.js') }}"></script>
        <script src="{{ asset('admin/js/select2.js') }}"></script>
    @endpush
    @include('admin/adminCommon/footer')
