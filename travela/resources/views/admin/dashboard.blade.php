@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
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
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                  <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Purchased On</th>
                                        <th>Customer</th>
                                        <th>Ship to</th>
                                        <th>Base Price</th>
                                        <th>Purchased Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2012/08/03</td>
                                        <td>Edinburgh</td>
                                        <td>New York</td>
                                        <td>$1500</td>
                                        <td>$3200</td>
                                        <td>
                                          <label class="badge badge-info">On hold</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2015/04/01</td>
                                        <td>Doe</td>
                                        <td>Brazil</td>
                                        <td>$4500</td>
                                        <td>$7500</td>
                                        <td>
                                          <label class="badge badge-danger">Pending</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2010/11/21</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                          <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2016/01/12</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                          <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>2017/12/28</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                          <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>2000/10/30</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                          <label class="badge badge-info">On-hold</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>2011/03/11</td>
                                        <td>Cris</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                          <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>2015/06/25</td>
                                        <td>Tim</td>
                                        <td>Italy</td>
                                        <td>$6300</td>
                                        <td>$2100</td>
                                        <td>
                                          <label class="badge badge-info">On-hold</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>2016/11/12</td>
                                        <td>John</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                          <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>2003/12/26</td>
                                        <td>Tom</td>
                                        <td>Germany</td>
                                        <td>$1100</td>
                                        <td>$2300</td>
                                        <td>
                                          <label class="badge badge-danger">Pending</label>
                                        </td>
                                        <td>
                                          <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                  </tbody>
                                </table>
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
        <script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('admin/js/data-table.js')}}"></script>
    @endpush
    @include('admin/adminCommon/footer')
