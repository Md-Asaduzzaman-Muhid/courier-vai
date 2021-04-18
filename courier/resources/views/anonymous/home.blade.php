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
<section class="half-banner-section">
    <div class="d-flex min-h-300">
        <div class="w-50 bg-dark d-flex align-items-center justify-content-center">
            <div class="study-equal-item text-center text-white p-3">
                <h3>Online Test</h3>
                <p>Increse your confidence</p>
                <a class="btn-common btn" href="#">Give a Test</a>
            </div>
        </div>
        <div class="w-50 bg-dark" style="background-image: url({{ asset('img/user/static/study1.webp') }});background-position: center center;
    background-size: cover;"></div>
    </div>
    <div class="d-flex min-h-300">
        <div class="w-50 bg-dark" style="background-image: url({{ asset('img/user/static/study2.webp') }});background-position: center center;
    background-size: cover;"></div>
        <div class="w-50 bg-dark d-flex align-items-center justify-content-center">
            <div class="study-equal-item text-center text-white p-3">
                <h3>Study question</h3>
                <p>Organized question reduce your learning time </p>
                <a class="btn btn-common" href="#">Question Bank</a>
            </div>
        </div>
    </div>
</section>
<section class="charges-section">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3 border">
                <div class="charge-parcel">
                    <p>Upto 1 kg</p>
                    <h4 >৳60</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 border">
                <div class="charge-parcel">
                    <p>Upto 1 kg</p>
                    <h4 >৳60</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 border">
                <div class="charge-parcel">
                    <p>Upto 1 kg</p>
                    <h4 >৳60</h4>
                </div>
            </div>
            <div class="col-6 col-md-3 border">
                <div class="charge-parcel">
                    <p>Upto 1 kg</p>
                    <h4 >৳60</h4>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
