@extends('merchant.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div class="container-fluid">
          <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Parcel ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Cash Collection</th>
                    <th scope="col">Delivery Charge</th>
                    <th scope="col">COD Charge</th>
                    <th scope="col">Total Adjustment Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($parcels as $parcel)
              <tr>
                  <td>{{@$parcel->tracking_id }}</td>
                  <td>{{@$parcel->created_at->isoFormat('Do MMM, YYYY')}}</td>
                  <td>{{@$parcel->amount_to_collect}}</td>
                  <td>{{@$parcel->delivery_charge}}</td>
                  <td>0</td>
                  <td>{{@$parcel->amount_to_collect - @$parcel->delivery_charge}}</td>
                  <td>{{@$parcel->payment->status}}</td>
                  <td>
                    <form action="{{ route('admin.payment.update', $parcel->payment->id) }}" method="POST">
                      @CSRF
                      {{ method_field('PUT') }}
                      <div class="form-group">
                        <select class="form-control" name= "status">
                          <option value= "1">Pending</option>
                          <option value= "2">Paid</option>
                        </select>
                      </div>
                      <button onclick="return confirm('Are you sure?')" class="text-danger">Change Status</button>
                  </form>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        </div>
  </div>
  <!-- /.content-wrapper -->
@endsection