@extends('layouts.app')

@section('content')
    <section class="page-title-section py-4">
        <div class="container">
            <h2 class="page-title text-center">Support</h2>
        </div>
    </section>
    <section class="support-section pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box shadow p-2 p-md-5">
                            <h5 class="section-title">Head Office</h5>
                            <p><i class="fas fa-map-marker-alt"></i> House : 56,adarsha nagar, Badda link Road, Dhaka 1212, Bangladesh</p>
                            <p><a href="tel:01920020044"><i class="fas fa-phone-alt"></i> 019200 200 44</a></p>
                            <p><a href="mailto:parcelgoal@gmail.com"><i class="fas fa-at"></i> parcelgoal@gmail.com</a></p>

                    </div>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control ">
                        </div>
                        <div class="form-group">
                            <textarea rows="6" placeholder="Your Message" class="form-control "></textarea>
                        </div>
                        <button type="submit" disabled="disabled" class="btn btn-common w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
