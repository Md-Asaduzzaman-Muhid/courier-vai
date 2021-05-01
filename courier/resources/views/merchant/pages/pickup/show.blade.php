@extends('merchant.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-fluid">
        <form action=" {{route('merchant.pickup.store')}}" method="post" class="form">
           @CSRF
           <div class="row">
               <div class="col-md-5">
                    <div class="form-group">
                        <input name="total_parcel" type="text" class="form-control" placeholder="Number of parcel">
                    </div>
                </div>
                <div class="col-md-5">
                   <div class="form-group">
                       <input type="datetime-local" name="pickup_time" class="form-control" placeholder="Preferable Time to pickup">
                   </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-common">Confirm Submit</button>
                </div>
           </div>

       </form>
      </div>
        <div class="container-fluid">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Time Request</th>
                        <th scope="col">Time Collect</th>
                        <th scope="col">Number of Parcel</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pickups as $pickup)
                <tr>
                    <td>{{@$pickup->created_at}}</td>
                    <td>{{@$pickup->pickup_time}}</td>
                    <td>{{@$pickup->total_parcel}}</td>
                    <td>{{@$pickup->status}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
  </div>
  <!-- /.content-wrapper -->
@endsection