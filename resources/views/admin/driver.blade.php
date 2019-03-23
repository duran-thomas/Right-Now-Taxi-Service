@include('/layouts.adminDashboard')

@section('title')
    Driver
@endsection

@section('content')

    {{-- <div class="container">
            <h2>Driver Table</h2>
        <table class="table table-bordered" id="laravel_datatable">
            <thead>
            <tr>
                <th>Id</th>
                <th>Driver ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>vehicleMake</th>
                <th>vehicleModel</th>
                <th>vehicleYear</th>
                <th>lisencePlate</th>
                <th>Status</th>
            </tr>
            </thead>
        </table>
        </div> --}}

        {{-- <script>
        $(document).ready( function () {
            $('#laravel_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('driver.driverList') }}",
                columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'address', name: 'addreass' },
                        { data: 'contact', name: 'contact' },
                        { data: 'vehicleMake', name: 'vehicleMake' },
                        { data: 'vehicleModel', name: 'vehicleModel' },
                        { data: 'vehicleYear', name: 'vehicleYear' },
                        { data: 'lisencePlate', name: 'lisencePlate' },
                        { data: 'status', name: 'status' }
                    ]
            });
        });
        </script> --}}
@endsection