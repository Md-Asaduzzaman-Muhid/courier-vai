@extends('layouts.app')

@section('content')
<section class="banner-section" style="background-image: url({{ asset('img/user/static/banner.webp') }});background-position: center center;
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
<section class="half-banner-section py-md-5 py-2">
    <h3 class="page-title text-center">Why Parcel Goal</h3>
    <div class="d-flex min-h-300">
        <div class="w-50 bg-theme d-flex align-items-center justify-content-center">
            <div class="feature-equal-item text-center text-white px-md-5 px-2 mx-md-5 mx-0">
                <h3 class="mb-md-4 mb-2">Next day payment</h3>
                <p>Once the delivery is complete you will receive payment the very next working day.</p>
                <a class="btn-common-rev btn" href="{{ route('merchant.register') }}">Register Now</a>
            </div>
        </div>
        <div class="w-50 bg-dark" style="background-image: url({{ asset('img/user/static/door-knock.webp') }});background-position: center center;
    background-size: cover;"></div>
    </div>
    <div class="d-flex min-h-300">
        <div class="w-50 bg-dark" style="background-image: url({{ asset('img/user/static/to-home.webp') }});background-position: center center;
    background-size: cover;"></div>
        <div class="w-50 bg-theme d-flex align-items-center justify-content-center">
            <div class="feature-equal-item text-center text-white px-md-5 px-2 mx-md-5 mx-0">
                <h3 class="mb-md-4 mb-2">Reverse Delivery</h3>
                <p>We provide reverse delivery, allowing customers to return products.</p>
                <a class="btn-common-rev btn" href="{{ route('merchant.register') }}">Register Now</a>
            </div>
        </div>
    </div>
    <div class="d-flex min-h-300">
        <div class="w-50 bg-theme d-flex align-items-center justify-content-center">
            <div class="feature-equal-item text-center text-white px-md-5 px-2 mx-md-5 mx-0">
                <h3 class="mb-md-4 mb-2">Payment via bKash/Bank</h3>
                <p>Merchants can accept payment via bank or bKash.</p>
                <a class="btn-common-rev btn" href="{{ route('merchant.register') }}">Register Now</a>
            </div>
        </div>
        <div class="w-50 bg-dark" style="background-image: url({{ asset('img/user/static/cash.webp') }});background-position: center center;
                background-size: cover;"></div>
    </div>
    <div class="d-flex min-h-300">
        <div class="w-50 bg-dark" style="background-image: url({{ asset('img/user/static/search.webp') }});background-position: center center;
                background-size: cover;"></div>
        <div class="w-50 bg-theme d-flex align-items-center justify-content-center">
            <div class="feature-equal-item text-center text-white px-md-5 px-2 mx-md-5 mx-0">
                <h3 class="mb-md-4 mb-2">Live tracking</h3>
                <p>Check the real-time location and status of your parcel from anywhere.</p>
                <a class="btn-common-rev btn" href="{{ route('merchant.register') }}">Register Now</a>
            </div>
        </div>
    </div>
</section>
<section class="charges-section  pb-md-5 pb-2">
    <div class="container">
        <h3 class="page-title text-center">Our Charges</h3>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Inside City</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sub City</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Outside City</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active table-responsive" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th scope="col">Upto 1 kg</th>
                        <th scope="col">1 kg - 2 kg</th>
                        <th scope="col">2 kg - 3 kg</th>
                        <th scope="col">3 kg - 4 kg</th>
                        <th scope="col">4 kg - 5 kg</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">৳50</th>
                        <th scope="row">৳65</th>
                        <th scope="row">৳80</th>
                        <th scope="row">৳95</th>
                        <th scope="row">৳110</th>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th scope="col">Upto 1 kg</th>
                        <th scope="col">1 kg - 2 kg</th>
                        <th scope="col">2 kg - 3 kg</th>
                        <th scope="col">3 kg - 4 kg</th>
                        <th scope="col">4 kg - 5 kg</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">৳95</th>
                        <th scope="row">৳110</th>
                        <th scope="row">৳125</th>
                        <th scope="row">৳140</th>
                        <th scope="row">৳155</th>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr>
                        <th scope="col">Upto 1 kg</th>
                        <th scope="col">1 kg - 2 kg</th>
                        <th scope="col">2 kg - 3 kg</th>
                        <th scope="col">3 kg - 4 kg</th>
                        <th scope="col">4 kg - 5 kg</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">৳120</th>
                        <th scope="row">৳135</th>
                        <th scope="row">৳150</th>
                        <th scope="row">৳165</th>
                        <th scope="row">৳180</th>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
