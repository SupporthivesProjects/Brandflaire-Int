@extends('frontend.layouts.app')

@section('content')
    
<section class="login-section">
    <img src="{{ asset('frontend/Brandflaire/assest/images/sign-up.png') }}" alt="" class="img-fluid bg-image d-none d-lg-block d-md-block">
    <div class="container sign-up">
      <div class="row connn">
        <div class="col" style="padding: 0px;">
            <img src="{{ asset('frontend/Brandflaire/assest/images/sign-up-mob.png') }}" alt="" class="img-fluid bg-image d-block d-lg-none d-md-none mobile-img" style="position: relative;">
        </div>
        <div class="col lcon">
            <form id="registerform" role="form" action="{{ route('register') }}" method="POST"
                        onsubmit="return check_agree(this);">
                    @csrf
                <div class="login-content">
                    <h1>Sign up</h1>
                    <div class="cont-con">
                        <input type="text" placeholder="Full Name" form="registerform" name="name"
                        id="name">
                        <input type="email" placeholder="Email Address" id="email" name="email" form="registerform">
                        <input type="password" placeholder="Password (at least 8 characters)" form="registerform" name="password"
                        id="password">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" 
                        id="password_confirmation" form="registerform">
                        <label class="checkbox-wrapper" >
                            <input type="checkbox" id="termsCheckbox" name="terms"/>
                            <span class="circle-checkbox"></span>
                            <span class="checkbox-label " >
                                <span class="checkbox-label " for="terms">
                            By ticking this box, you agree to the
                            <a href="{{ route('termsandconditions') }}" target="_blank">Terms & Conditions</a> & 
                            <a href="{{ route('privacypolicy') }}" target="_blank">Privacy Policy</a>.
                            </span>
                        </label>
                    </div>
                    {{-- <img src="{{ asset('frontend/Brandflaire/assest/images/reCAPTCHA.png') }}" alt="" class="modal-captcha"> --}}
                    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                                    <div class="h-captcha mx-auto my_mob_24" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}">
                                    </div>
                    {{-- <a href="#" class="btn btn-black" onclick="showThankYouModal()">Create an account</a> --}}
                    <button class="btn btn-black"  type="submit" form="registerform">
                        Create an account
                    </button>
                    <p class="red-line"></p>
                    <p class="desc">Already have an account?</p>
                    <a href="{{ route('user.login') }}" class="forgotp">Sign in Here</a>
                </div>
            </form>
      </div>
      </div>   
    </div>
    <!-- modal code  -->
    <div class="thankyou-modal-overlay" id="thankYouModal">
      <div class="thankyou-modal-box">
        <h2>Thank you for registering</h2>
        <p>Almost there! Just check your inbox
          or junk to verify your account.</p>
        <button onclick="hideThankYouModal()">Close</button>
      </div>
    </div>      
     <!-- modal code  end-->
</section>



    <script type="text/javascript">
        function check_agree(form) {

            var password1 = form.password.value;
            var password2 = form.password_confirmation.value;

            if (password2 == password1 && form.terms.checked) {
                return true;
            } else if (password1.length < 6) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password is too short, please try again !'
                })
            } else if (password2 != password1) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password does not matched, please try again !'
                })
            } else if (!form.terms.checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You must agree to the Terms and Conditions and Privacy Policy before continuing.'
                })
                return false;
            }
            return false;
        }
    </script>

    <!-- modal code  -->
    <script>
        function showThankYouModal() {
          document.getElementById('thankYouModal').style.display = 'flex';
        }
    
        function hideThankYouModal() {
          document.getElementById('thankYouModal').style.display = 'none';
        }
      </script>
       <!-- modal code  end-->
@endsection
