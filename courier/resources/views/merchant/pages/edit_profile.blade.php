@extends('merchant.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-fluid py-2">
            
                <form  id="regForm" method="POST" action='#' aria-label="{{ __('Register') }}">
                @csrf
                    <div class="form-group text-center mb-5">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Name ..."autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group text-center mb-5">
                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter Phone Number ...">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                            
                        <div class="form-group text-center mb-5">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"required autocomplete="email" placeholder="Enter Email ...">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group text-center mb-5">
                                <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ old('nid') }}" autocomplete="nid" placeholder="Enter NID Number (Optional) ...">

                                @error('nid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group text-center mb-5">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password ...">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group text-center mb-5">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password ...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center mb-5">
                            <input id="cName" type="text" class="form-control @error('cName') is-invalid @enderror" name="cName" value="{{ old('cName') }}" required autocomplete="cName" placeholder="Enter Company Name ...">

                            @error('cName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group text-center mb-5">
                            <input id="cUrl" type="text" class="form-control @error('cUrl') is-invalid @enderror" name="cUrl" value="{{ old('cUrl') }}" autocomplete="cUrl" placeholder="Enter Company URL(Facebook/Website) ...">

                            @error('cUrl')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <select class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" >
                            <option> --- Select ---</option>
                            <option value="Uttara">Uttara</option>
                            <option value="Bashundhara R/A">Bashundhara R/A</option>
                            <option value="Gulshan">Gulshan</option>
                            <option value="Mirpur">Mirpur</option>
                            <option value="Rampura">Rampura</option>
                            <option value="Badda">Badda</option>
                            <option value="Banani">Banani</option>
                            <option value="Mohammadpur">Mohammadpur</option>
                            <option value="Dhanmondi">Dhanmondi</option>
                            <option value="Old Town">Old Town</option>
                            <option value="Tejgoan">Tejgoan</option>
                            <option value="Khilgoan">Khilgoan</option>
                            <option value="Nikunja">Nikunja</option>
                            <option value="Motijhil">Motijhil</option>
                            <option value="Demra">Demra</option>
                            <option value="Jatrabari">Jatrabari</option>
                            <option value="Baridhara">Baridhara</option>
                            <option value="Shyamoli">Shyamoli</option>
                            <option value="Mogbazar">Mogbazar</option>
                            <option value="Bangla Motor">Bangla Motor</option>
                            <option value="Malibagh">Malibagh</option>
                            <option value="Elephent Road">Elephent Road</option>
                            <option value="Green Road">Green Road</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name= "address" class="form-control" id="address" rows="5" >{{ old('address') }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <select class="form-control @error('payment') is-invalid @enderror" name="payment" value="{{ old('payment') }}" >
                            <option> --- Select ---</option>
                            <option value="Mobile Banking">Mobile Banking</option>
                            <option value="Bank">Bank</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>
                    <div class="form-group text-center mb-5">
                            <input id="accountHolder" type="text" class="form-control @error('accountHolder') is-invalid @enderror" name="accountHolder" value="{{ old('accountHolder') }}" autocomplete="accountHolder" placeholder="Enter Account Holder Name ...">

                            @error('accountHolder')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group text-center mb-5">
                            <input id="bankName" type="text" class="form-control @error('bankName') is-invalid @enderror" name="bankName" value="{{ old('bankName') }}" required autocomplete="bankName" placeholder="Enter Bank Name ...">

                            @error('bankName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group text-center mb-5">
                            <input id="branch" type="text" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ old('branch') }}" autocomplete="branch" placeholder="Enter Branch Name ...">

                            @error('branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group text-center mb-5">
                            <input id="accountNumber" type="text" class="form-control @error('accountNumber') is-invalid @enderror" name="accountNumber" value="{{ old('accountNumber') }}" required autocomplete="accountNumber" placeholder="Enter Account Number Name ...">

                            @error('accountNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </form>
        </div>
    </div>
<!-- /.content-wrapper -->
@endsection