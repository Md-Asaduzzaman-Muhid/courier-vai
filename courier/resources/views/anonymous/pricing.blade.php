@extends('layouts.app')

@section('content')
    <section class="header-section py-4">
            <div class="container">
                <h2 class="page-title text-center">Pricing</h2>
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
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
    <section class="pricing-section py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-single">
                        <div class="title">
                            <span>Dhaka</span>
                            <span>&#8594;</span>
                            <span>Dhaka</span>
                        </div>
                        <div class="body">
                            <h4>50TK</h4>
                            <p>next day</p> <span>upto 1kg</span>
                            <p>Pickup from Dhaka metro Area and delivered inside dhaka metro area</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-single">
                        <div class="title">
                            <span>Dhaka</span>
                            <span>&#8594;</span>
                            <span>Sub Dhaka</span>
                        </div>
                        <div class="body">
                            <h4>95TK</h4>
                            <p>next day</p><span>upto 1kg</span>
                            <p>Pickup from Dhaka metro Area and delivered inside dhaka metro area</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-single">
                        <div class="title">
                            <span>Dhaka</span>
                            <span>&#8594;</span>
                            <span>Dhaka</span>
                        </div>
                        <div class="body">
                            <h4>95TK </h4>
                            <p>same day</p><span>upto 1kg</span>
                            <p>Pickup from Dhaka metro Area and delivered inside dhaka metro area</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pricing-single">
                        <div class="title">
                            <span>Sub Dhaka</span>
                            <span>&#8594;</span>
                            <span>Dhaka</span>
                        </div>
                        <div class="body">
                            <h4>95TK </h4>
                            <p>next day</p><span>upto 1kg</span>
                            <p>Pickup from Dhaka metro Area and delivered inside dhaka metro area</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="calculate">
            <div class="container">
                <h3 class="section-title text-center">Calculate Charge</h3>
                <form>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pickup</label>
                                <select class="form-control" name="pickup">
                                    <option value="1">Dhaka</option>
                                    <option value="2">Sub Dhaka</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Destination</label>
                                <select class="form-control" name="destination">
                                    <option value="1">Dhaka</option>
                                    <option value="2">Sub Dhaka</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Service</label>
                                <select class="form-control" name="service">
                                    <option value="1">Regular</option>
                                    <option value="2">Same Day</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="weight" class="mb-0">Weight(Kg)</label>
                                <input type="number" min="0"step=".1" name="weight" class="form-control" placeholder="0.5">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-common" type="submit"> Calculate</a>
                    </div>

                </form>
            </div>
    </section>
@endsection
