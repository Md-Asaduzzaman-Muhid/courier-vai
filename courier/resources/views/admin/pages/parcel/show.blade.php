@extends('admin.layouts.app')
    @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div class="container-fluid">
           
           
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">ID</th>
                            <th scope="col">Merchant</th>
                            <th scope="col">Reciever</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment Info</th>
                            <th scope="col">Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parcels as $parcel)
                        <tr>
                            <td>{{@$parcel->created_at->isoFormat('Do MMM, YYYY h:m A')}}</td>
                            <td>{{@$parcel->tracking_id}}</td>
                            <td>{{@$parcel->merchant->name}}</td>
                            <td>
                                <p>{{@$parcel->reciever->name}}</p>
                                <p>{{@$parcel->reciever->phone}}</p>
                            </td>
                            <td>{{@$parcel->status}}
                                <form action="{{ route('admin.parcel.status', $parcel->id) }}" method="POST">
                                    @CSRF
                                    <input type="hidden" name="id" value={{$parcel->id}}>
                                    <div class="form-group">
                                      <select class="form-control" name= "status">
                                        <option value= "1">Pending</option>
                                        <option value= "2">Paid</option>
                                        <option value= "3">Not paid</option>
                                      </select>
                                    </div>

                                    <button onclick="return confirm('Are you sure?')"class="text-danger">Change Status</button>
                                </form>
                            </td>
                            <td>Amount To Collect: {{@$parcel->amount_to_collect}}
                               Delivery Charge: {{@$parcel->delivery_charge}}
                            </td>
                            <td>
                                <a href="{{ route('admin.parcels.edit', $parcel->id) }}">Edit</a> 
                                <form action="{{ route('admin.parcels.destroy', $parcel->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button onclick="return confirm('Are you sure?')" class="text-danger">Delete</button>
                                </form>
                                <a href="#" class="text-danger">Raise Issue</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection