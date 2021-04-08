@extends('layouts.app')

@section('content')
<section class="banner-section" style="background-image: url({{ asset('img/user/static/study1.webp') }});background-position: center center;
background-size: cover;">
    <div class="container">
            <div class="tracking-form-wrapper">
                <form class="tracking-form">
                    <h3 >Track Your Shipment</h3>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="quick-link-home">
                    <div class="row no-gutters">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <div class="quick-link-single text-center p-3">
                                icon
                                <h3>Name</h3>
                                <p>login and get</p>
                                <a href="#" class="hyperlink"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2 mb-md-0">
                            <div class="quick-link-single text-center p-3">
                                icon
                                <h3>Name</h3>
                                <p>login and get</p>
                                <a href="#" class="hyperlink"></a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2 mb-md-0">
                            <div class="quick-link-single text-center p-3">
                                icon
                                <h3>Name</h3>
                                <p>login and get</p>
                                <a href="#" class="hyperlink"></a>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</section>
@endsection
