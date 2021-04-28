@extends('merchant.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <div class="container-fluid">
          <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Time Request</th>
                    <th scope="col">Time Collect</th>
                    <th scope="col">Number of Parcel</th>
                   
                </tr>
            </thead>
            <tbody>
              @foreach($pickups as $pickup)
                    <td>{{$pickup->created_at}}</td>
                    <td>{{$pickup->pickup_time}}</td>
                    <td>{{$pickup->total_parcel}}</td>
              @endforeach
            </tbody>
        </table>
        </div>
  </div>
  <!-- /.content-wrapper -->
@endsection