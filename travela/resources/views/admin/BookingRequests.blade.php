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
            <style>
                table,
                th,
                td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
        
                th,
                td {
                    padding: 5px;
                    text-align: left;
                }
            </style>
            <div class="main-panel">
                <div class="content-wrapper" style="background-color: rgba(255, 255, 255, 0.658)">
                    <div class="col-12 grid-margin stretch-card">

                        <div class="row g-4">
                            @foreach ($BookingRequest as $item)

                            <table class="col-6">
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $item['Name'] }}</td>
                                  </tr>
                                  <tr>
                                    <th>Email:</th>
                                    <td>{{ $item['Email'] }}</td>
                                  </tr>
                                  <tr>
                                    <th>Date:</th>
                                    <td>{{ $item['Date'] }}</td>
                                  </tr>
                                  <tr>
                                      <th>Package:</th>
                                      <td>{{ $item['Package'] }}</td>
                                    </tr>
                                    <tr>
                                      <th>Persons:</th>
                                      <td>{{ $item['Persons'] }}</td>
                                    </tr>
                                    <tr>
                                      <th>Kids:</th>
                                      <td>{{ $item['Kids'] }}</td>
                                    </tr>
                                    <tr>
                                      <th>SpecialRequest:</th>
                                      <td>{{ $item['SpecialRequest'] }}</td>
                                    </tr>
                                    <form action="{{url('Booking/sendDeal')}}" method="POST">
                                    @csrf
                                    <tr>
                                        <th>price:</th>
                                        <input name="id" value="{{ $item['id'] }}" hidden />
                                        <td><input name="Price" class="form-control" placeholder="Enter the ammount" value="{{$item['Price'] ?? ''}}" required/></td>
                                    </tr>
                                    <tr>
                                        <th>Action:</th>
                                        <td><button type="submit" class="btn btn-success">Send Deal</button> <a href='{{url("Booking/CancelDeal?ID=$item->id")}}'><button type="button" class="btn btn-danger">Cancel Deal</button></a></td>
                                    </tr>
                                    </form>
                            </table>
                            @endforeach
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
