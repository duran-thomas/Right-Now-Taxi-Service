@extends('layouts.adminDashboard')

@section('title')
    Driver
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Drivers Table</h3>
                    <div class="table">
                        <table class="table col-md" id="laravel_datatable">
                            <thead class="thead-primary">
                                <tr class="table-primary">
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col" class="text-center">Driver ID</th>
                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col" class="text-center">Address</th>
                                    <th scope="col" class="text-center">Contact</th>
                                    <th scope="col" class="text-center">Vehicle Info</th>                 
                                    <th scope="col" class="text-center">Assigned Route </th>                 
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($driver as $driver)
                                    <tr>
                                        <td class="text-center">{{$driver->id}}</td>
                                        <td class="text-center">{{$driver->driverID}}</td>
                                        <td class="text-center">{{$driver->name}}</td>
                                        <td class="text-center">{{$driver->address}}</td>
                                        <td class="text-center">{{$driver->contact}}</td>
                                        <td class="text-center">
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#viewVehicle">
                                                <span><i class="mdi  mdi-car"></i></span> Vehicle
                                            </button>
                                        </td>
                                        <td class="text-center">{{$driver->routes}}</td>
                                        <td class="text-center">{{$driver->status}}</td>
                                        <td>
                                            <button class="edit-modal btn btn-primary" data-toggle="modal" data-target="#editDriver">
                                                <span><i class="mdi mdi-comment-text-outline"></i></span> Edit
                                            </button>
                                            <button class="delete-modal btn btn-danger" data-toggle="modal" data-target="#deleteDriver">
                                                <span><i class="mdi mdi-delete"></i></span> Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Button trigger modal -->
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newDriver">
                            Add New Driver
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="newDriver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Driver</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{route('driver.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                @include('layouts.driverForm')
                  {{-- @if ($errors->any())
                    <div class="notification is-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif --}}
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
    </div>

    <!-- View Vehicle Modal -->
    <div class="modal fade" id="viewVehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">View Vehicle</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <div class="row">
                        <div class="form-group">
                            <label>Vehicle Make</label>
                            <input type="text" class="form-control" value="{{$driver->vehicleMake}}" name="vehicleMake" id="vehicleMake" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label>Vehicle Model</label>
                            <input type="text" class="form-control" value="{{$driver->vehicleModel}}" name="vehicleModel" id="vehicleModel" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                                <label>Vehicle Year</label>
                            <input type="text" class="form-control" value="{{$driver->vehicleYear}}" name="vehicleYear" id="vehicleYear" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                                <label>Vehicle Lisence Plate</label>
                            <input type="text" class="form-control" value="{{$driver->lisencePlate}}" name="licensePlate" id="licensePlate" disabled>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
              </div>
            </div>
        </div>


      {{-- Edit Modal --}}
      <div class="modal fade" id="editDriver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Driver</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('driver.update', 'id')}}" method="post">
                @method('patch')
                @csrf
                <div class="modal-body">
                  <input type="hidden" name="driverID" value="" id="driverID">
                  @include('layouts.driverForm',[
                      'disableDriverID'=>true
                  ])
                  {{-- @if ($errors->any())
                    <div class="notification is-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif --}}
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  
                </div>
            </form>
          </div>
        </div>
      </div>
      
      {{-- Delete Driver --}}
      <div class="modal fade" id="deleteDriver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalLabel">Confirm Delete</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('driver.destroy', 'id')}}" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                      <p class="text-center">Are you sure you want to delete this record?</p>
                      <input type="hidden" name="driverID" value="" id="driverID">
                      {{-- @if ($errors->any())
                        <div class="notification is-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif --}}
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-danger">Confirm</button>
                      </div>
                      
                    </div>
                </form>
              </div>
            </div>
          </div>
    
@endsection

@section('scripts')
    <script type="text/javascript">

        //DataTable
        $(document).ready( function () {
            $('#laravel_datatable').DataTable();
        }); 

        // function add_new(){
        //     var original = document.getElementById('routes')
        //     var copy = original.cloneNode(true)
        //     original.after(copy)
        // };

        $('#editDriver').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);
            var driverID = button.data('driverID');
            var name = button.data('name');
            var address = button.data('address');
            var contact = button.data('contact');
            var status = button.data('status');
            var vehicleMake = button.data('vehicleMake');
            var vehicleModel = button.data('vehicleModel');
            var vehicleYear = button.data('vehicleYear');
            var lisencePlate = button.data('lisencePlate');
            var routes = button.data('routes');

            var modal = $(this)
            modal.find('.modal-body #driverID').val(driverID);
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #address').val(address);
            modal.find('.modal-body #contact').val(contact);
            modal.find('.modal-body #status').val(status);
            modal.find('.modal-body #vehicleMake').val(vehicleMake);
            modal.find('.modal-body #vehicleModel').val(vehicleModel);
            modal.find('.modal-body #vehicleYear').val(vehicleYear);
            modal.find('.modal-body #lisencePlate').val(lisencePlate);
            modal.find('.modal-body #route').val(routes);
        })

        //Delete Stock Modal
        $('#deleteDriver').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var driverID = button.data('driverID')

            var modal = $(this)
            modal.find('.modal-body #driverID').val(driverID);
        })
    </script>
@endsection