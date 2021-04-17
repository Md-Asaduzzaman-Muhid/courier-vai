@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <p>Tracking ID</p>
                <p>{{$parcel->tracking_id}}</p>
            </div>
            <div class="col-md-7">
                <ul class="list-unstyled">
                    @foreach($parcel->track as $tc)
                    <li>
                        <div class="status-step pl-5">
                            <div class="step-icon">
                                <i class="fas fa-truck"></i>
                                <span class="line"></span>
                            </div>
                            @if($tc->status == 0)
                            <h5>Successfully created</h5>
                            @elseif($tc->status == 0)
                            <h5>Successfully updated</h5>
                            @else
                            <h5>wao</h5>
                            @endif
                            
                            <p>{{$tc->created_at}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <div class="parcel-details-box bg-secondary text-white p-3">
                    <h2>Parcel Details</h2>
                    <p class="mb-0"> Parcel ID</p>
                    <p>{{$parcel->tracking_id}}</p>

                    <p class="mb-0">Customer Name</p>
                    <p>{{$parcel->reciever->name}}</p>

                    <p class="mb-0">Area</p>
                    <p>{{$parcel->reciever->area}}</p>

                    <p class="mb-0">Placed At</p>
                    <p>{{$parcel->created_at}}</p>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
