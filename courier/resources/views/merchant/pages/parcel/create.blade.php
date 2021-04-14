@extends('merchant.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{ route('merchant.parcels.store') }}" method="post" class="form">
                    @CSRF
                        <div class="row">
                            <div class="col-md-6">
                                <input name="customer_name" type="text" class="form-control" placeholder="Customer name" required>
                                <input name="customer_phone" type="tel" class="form-control" placeholder="Customer Phone Number" required>
                                <textarea name="customer_address" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Customers address" required></textarea>
                                <input name="merchant_invoice_id" type="text" class="form-control" placeholder="Merchant Invoice Id">
                            </div>
                            <div class="col-md-6">
                                <input name ="delivery_area"list="brow" class="form-control" placeholder="Select Delivery Area">
                                    <datalist id="brow">
                                    <option value="Internet Explorer">
                                    <option value="Firefox">
                                    <option value="Chrome">
                                    <option value="Opera">
                                    <option value="Safari">
                                </datalist> 
                                <div class="form-check form-check-inline">
                                    <input name = "fragile"class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                                    <label class="form-check-label" for="inlineCheckbox1">Fragile</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="liquid" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1">
                                    <label class="form-check-label" for="inlineCheckbox2">Liquid</label>
                                </div>
                                <input type="number" name="weight" class="form-control" placeholder="Weight">
                                <textarea name="special_instruction" class="form-control" rows="5" placeholder="Special Instruction"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-common">Confirm Submit</button>
                    </form>
                </div>
                <div class="col-md-4">

                </div>
            </div>
            
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection