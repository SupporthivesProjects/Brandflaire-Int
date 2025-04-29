@extends('frontend.layouts.app')

@section('content')

<section class="login-section">
        <img src=" {{ asset('frontend/Brandflaire/assest/images/reset-pass.png') }}" alt="" class="img-fluid bg-image d-none d-lg-block d-md-block">
        <img src=" {{ asset('frontend/Brandflaire/assest/images/reset-mob.png') }}" alt="" class="img-fluid bg-image d-block d-lg-none d-md-none mobile-img" style="position: relative;">
        <div class="container">
          <div class="row connn">
            <div class="col lcon">
              <form class="login-content" method="POST" action="{{ route('password.update') }}">
                    @csrf
                  <input type="hidden" name="token" value="{{ $token }}">
                  <h1>{{ __('Reset Password') }}</h1>
                  <p>Lorem ipsum dolor sit amet consectetur. Nisl accumsan pellentesque pellentesque eget id. Urna eget lacus.</p>
                  <div class="cont-con">
                    <input type="email" id="email"class="form-control input_global  @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password" type="password" class="form-control input_global @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      
                        <input type="text" class="form-control input_global" id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                  </div>
                  <button type="submit" class="btn btn-black">Reset password</button>
                </form>
          </div>
          </div>
            
        </div>
    </section>


@endsection