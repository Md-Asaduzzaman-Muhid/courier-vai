@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container-fluid">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Merchant Name</th>
                    <th scope="col">Time Request</th>
                    <th scope="col">Time To Collect</th>
                    <th scope="col">Number of Parcel</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pickups as $pickup)
                    <tr>
                        <td>{{@$pickup->merchant->name}}</td>
                        <td>{{@$pickup->created_at}}</td>
                        <td>{{@$pickup->pickup_time}}</td>
                        <td>{{@$pickup->total_parcel}}</td>

                        <td>@if($pickup->status == 0 || $pickup->status == null) Submited
                            @elseif($pickup->status == 1) Request Accepted
                            @elseif($pickup->status == 2) Pickup Done
                            @else Unknown
                            @endif
                            <form action="{{ route('admin.pickup.update', $pickup->id) }}" method="POST">
                                @CSRF
                                {{ method_field('PUT') }}
                                <input type="hidden" name="id" value={{$pickup->id}}>
                                <div class="form-group">
                                    <select class="form-control" name= "status">
                                        <option value= "1">Request Accepted</option>
                                        <option value= "2">Pickup Done</option>
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