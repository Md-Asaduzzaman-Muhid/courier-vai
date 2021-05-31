@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container ">
        <p class="text-danger text-center">you searched for <b>{{$id}}</b> is not available</p>
    </div>
    <form class="tracking-form" method="GET" action="{{ route('parcel.track') }}"role="search">
        <h2 class="text-white">Track Your Parcel</h2>
        <div class="input-group">
            <input type="text" name="tracking_id" class="form-control" placeholder="Enter Your Tracking No ..."
                   aria-label="tracking_id" aria-describedby="tracking_id">
            <div class="input-group-append">
                <button class="btn btn-solid text-uppercase" type="submit">Track</button>
            </div>
        </div>
    </form>
</section>
<section>

@endsection
