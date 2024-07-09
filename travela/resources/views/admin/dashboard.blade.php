@push('headlinks')
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
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
                                            <th>Name</th>
                                            <th>Destination</th>
                                            <th>Persons</th>
                                            <th>Email</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($BookingRequest as $item)
                                            <tr>
                                                <td>{{ $loop->index }}</td>
                                                <td>{{ $item->Name }}</td>
                                                <td>{{ $item->Package }}</td>
                                                <td>{{ $item->Persons }}</td>
                                                <td>{{ $item->Email }}</td>
                                                <td>{{ '$' . number_format($item->Price, 2) }}</td>
                                                <td>
                                                    @php
                                                        $badgeClass = 'badge-success'; // Default class

                                                        if ($item->Status == 'On hold') {
                                                            $badgeClass = 'badge-info';
                                                        } elseif ($item->Status == 'Pending') {
                                                            $badgeClass = 'badge-danger';
                                                        }
                                                    @endphp

                                                    <label
                                                        class="badge {{ $badgeClass }}">{{ $item->Status }}</label>
                                                </td>
                                                <td>
                                                  @if ($item->Status == 'On hold')
                                                  <a href="{{ url('/Booking/Active?ID=' . $item->id) }}">
                                                      <button class="btn btn-outline-primary">Active</button>
                                                  </a>
                                              @elseif ($item->Status == 'Pending')
                                                  <a href="{{ url('/Booking/Close?ID=' . $item->id) }}">
                                                      <button class="btn btn-outline-primary">Close</button>
                                                  </a>
                                              @else
                                              <a href="{{ url('/Booking/View?ID=' . $item->id) }}">
                                                <button class="btn btn-outline-primary">View</button>
                                               </a>
                                              @endif
                                                </td>
                                            </tr>
                                        @endforeach
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
        <script src="{{ asset('admin/js/data-table.js') }}"></script>
    @endpush
    @include('admin/adminCommon/footer')
