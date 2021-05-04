@extends('merchant.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Next Day Delivery (Inside Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 50TK</li>
                            <li>1kg - 2kg = 70TK</li>
                            <li>2kg - 3kg = 90TK</li>
                            <li>3kg - 5kg = 140TK</li>
                        </ul>
                    </div>
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Same Day Delivery (Inside Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 80TK</li>
                            <li>1kg - 2kg = 120TK</li>
                            <li>2kg - 3kg = 160TK</li>
                            <li>3kg - 5kg = 200TK</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Next Day Delivery (Sub Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 95TK</li>
                            <li>1kg - 2kg = 125TK</li>
                            <li>2kg - 3kg = 150TK</li>
                            <li>3kg - 5kg = 190TK</li>
                        </ul>
                    </div>
                    <div class="delivery-charge-box border shadow-sm bg-white mb-2 p-2">
                        <h6>Same Day Delivery Food (Dhaka City)</h6>
                        <ul>
                            <li>Upto 1kg = 95TK</li>
                            <li>1kg - 2kg = 125TK</li>
                            <li>2kg - 3kg = 150TK</li>
                            <li>3kg - 5kg = 190TK</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection