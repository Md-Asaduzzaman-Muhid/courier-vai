@extends('merchant.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid py-5">
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
                    @foreach($parcels as $parcel)
                    <tr>
                        <td>{{@$parcel->created_at->isoFormat('Do MMM, YYYY h:m A') }}</td>
                        <td>{{@$parcel->tracking_id}}</td>
                        <td>{{@$merchant_name}}</td>
                        <td><p class="mb-0">{{@$parcel->reciever->name}}</p>
                            <p class="mb-0">{{@$parcel->reciever->phone}}</p>
                            <p class="mb-0">{{@$parcel->reciever->address}}</p>
                        </td>
                        <td>
                            @if($parcel->status == 0 || $parcel->status == null) Parcel Created
                            @elseif($parcel->status == 1) Recieved by parcel goal
                            @elseif($parcel->status == 2) Send to nearest delivery point
                            @elseif($parcel->status == 3) On the way to deliver
                            @elseif($parcel->status == 4) Successfully delivered
                            @elseif($parcel->status == 5) Customer didn't respond
                            @elseif($parcel->status == 6) On the way to return
                            @elseif($parcel->status == 7) Returned to merchant
                            @else Unknown Status
                            @endif
                    
                        </td>
                        <td><p class="mb-0">Amount To Collect : {{@$parcel->amount_to_collect}}</p>
                            <p class="mb-0">Delivery Charge : {{@$parcel->delivery_charge}}</p>
                        </td>
                        <td><a href="{{ route('merchant.parcels.edit', $parcel->id) }}">Edit</a> 

                        <form action="{{ route('merchant.parcels.destroy', $parcel->id) }}" method="POST">
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