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
                                <h5>Successfully Created parcel</h5>
                            @elseif($tc->status == 1)
                                <h5>Recieved by Parcel Goal</h5>
                            @elseif($tc->status == 2)
                                <h5>Send to the nearest delivery point</h5>
                            @elseif($tc->status == 3)
                                <h5>On the way to deliver</h5>
                            @elseif($tc->status == 4)
                                <h5>Successfully delivered</h5>
                            @elseif($tc->status == 5)
                                <h5>Customer couldn't respond</h5>
                            @elseif($tc->status == 6)
                                <h5>On the way to return to mercahnt</h5>
                            @elseif($tc->status == 7)
                                <h5>Successfully Returned to merchant</h5>
                            @else
                                <h5>Untracked</h5>
                            @endif
                            
                            <p>{{@$tc->created_at->isoFormat('Do MMM, YYYY h:m A')}}</p>
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
