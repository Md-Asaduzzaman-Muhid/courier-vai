@extends('layouts.app')

@section('content')
<section class="login-section py-5">
    <div class="container">
        <div class="login-container shadow py-5 py-5">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="login-description text-center p-3">
                        <h3>Welcome To Parcel Goal</h3>
                        <p>One stop home delivery service door to door. Give us parcel and enjoy super fast delivery.</p>
                        @isset($url)
                            <a class="btn btn-solid" href='{{ route("$url.register") }}'>Register</a>
                        @else
                            <a class="btn btn-solid" href="{{ route('register') }}">Register</a>
                        @endisset
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-form">
                        <h2 class="text-center">Sign In</h2>
                        @isset($url)
                            <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                        @else
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @endisset
                        @csrf
                        <div class="form-group text-center mb-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Enter Email ..." autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           
                        </div>

                        <div class="form-group text-center mb-5">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password ...">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group text-center mb-2">
                            <button type="submit" class="btn btn-solid">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="form-group text-center">
                            
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                        </div>
                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
