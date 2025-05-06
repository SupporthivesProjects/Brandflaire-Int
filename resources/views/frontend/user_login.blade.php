@extends('frontend.layouts.app')

@section('content')
{{--New Code Starts here?--}}
<section class="login-section">
        <img src="{{ asset('frontend/Brandflaire/assest/images/login-dc.png')}}" alt="" class="img-fluid bg-image d-none d-lg-block d-md-block">
        <img src="{{ asset('frontend/Brandflaire/assest/images/login-mob.png')}}" alt="" class="img-fluid bg-image d-block d-lg-none d-md-none mobile-img" style="position: relative;">
        <div class="container sign-in">
          <div class="row connn">
            <div class="col lcon">
              <div class="login-content">
                <form class="cutter_main_div_inner_right_login login-content" id="loginform" role="form" action="{{ route('login') }}"
                method="POST">
                @csrf
                  <h1>sign in </h1>
                  <div class="cont-con">
                      <input type="email" placeholder="Email Address" name="email" id="email" required> 
                      <input type="password" placeholder="Password" name="password" id="password" required>
                      <label class="remember-container">
                          <input type="checkbox" id="remember"  />
                          <span class="custom-round-checkbox" ></span>
                          Remember Me
                        </label>
                  </div>
                  <button class="btn btn-black" type="submit" form="loginform">Continue</button>
                  <a href="#" class="forgotp" onclick="openModal()">Forgot Password?</a>
                  <p class="red-line"></p>
                  <p class="desc">Don't have an account?</p>
                  <a href="{{ route('user.registration')}}" class="forgotp">Sign Up Here</a>
                </form>
              </div>
          </div>
          </div>   
        </div>
        <!-- modal code  -->
        <div id="myModal" class="modal">
          <form class="modal-content" method="POST" action="{{ route('password.email') }}">
            @csrf
            
            <div class="text-modal">
              <h2>{{ __('Reset Password') }}</h2>
              <p>Lorem ipsum dolor sit amet consectetur. Nisl accumsan pellentesque pellentesque eget id. Urna eget lacus.</p>
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address" required>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               
               <label class="checkbox-wrapper">
                <input type="checkbox" id="termsCheckbox" />
                <span class="circle-checkbox"></span>
                <span class="checkbox-label">
                  By ticking this box, you agree to the
                  <a href="#" target="_blank">Terms & Conditions</a> & 
                  <a href="#" target="_blank">Privacy Policy</a>.
                </span>
              </label>
              <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
              <div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
            </div>
           
            <div class="modal-btns">
              <a href="#" class="close btn" onclick="closeModal()">Close</a>
              <button type="submit"  class="conf btn">   {{ __('Send Password Reset Link') }}</buttom>
            </div>
          </form>
        </div>
         <!-- modal code  end-->
    </section>

@endsection

@section('scripts')
<script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
  
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
  
    // Optional: Close modal when clicking outside of it
    window.onclick = function(event) {
      const modal = document.getElementById("myModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

<script>
    function check_agree(form) {


        if (form.terms.checked) {
            return true;
        } else if (!form.terms.checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please accept terms and conditions'
            })
        }
        return false;
    }

</script>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });

</script>
@endsection