@extends('layouts.app')

@section('content')
<section class="banner-section" style="background-image: url({{ asset('img/user/static/study1.webp') }});background-position: center center;
background-size: cover;">
    <div class="container">
            <div class="tracking-form-wrapper">
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
            </div>
            <div class="quick-link-home">
                    <div class="row no-gutters">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <div class="quick-link-single text-center p-md-3 p-1">
                                <i class="fas fa-sign-in-alt"></i>
                                <h3>Join Marchent</h3>
                                <p>Join and get superfast service</p>
                                <a href="{{ route('merchant.register') }}" class="hyperlink"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2 mb-md-0">
                            <div class="quick-link-single text-center p-md-3 p-1">
                                <i class="fas fa-calculator"></i>
                                <h3>Get A Quote</h3>
                                <p>Estimate Cost to deliver</p>
                                <a href="#" class="hyperlink"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2 mb-md-0">
                            <div class="quick-link-single text-center p-md-3 p-1">
                                <i class="fas fa-business-time"></i>
                                <h3>For Your Business </h3>
                                <p>One stop solution for frequent marchent</p>
                                <a href="#" class="hyperlink"></a>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</section>
@endsection
