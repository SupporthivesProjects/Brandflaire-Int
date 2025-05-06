@extends('frontend.layouts.app')

<style>
    header {
      background: transparent;
    }
  </style>

@section('content')

<section class="contact_us">
    <video src="{{ asset('frontend/Brandflaire/assest/images/contact_pg.mp4')}}" muted="" loop="" autoplay="" class="bg-image d-lg-block d-md-block d-none">
    </video>
    <video src="{{ asset('frontend/Brandflaire/assest/images/cont_mob.mp4')}}" muted="" loop="" autoplay="" class="bg-image d-lg-none d-md-none d-block bg_video">
    </video>
    <div class="container px-0">
        <div class="mid_box">
            <form  id="contactform"  class="conatc_side p-0" role="form" action="{{ route('contactus.store') }}" method="post" onsubmit="return check_agree(this);">
                @csrf
                <input type="hidden" name="from_page" value="contactus">
                <div class="conatc_side" >
                    <input type="text" class="form-control inpi_boxx" placeholder="Full Name" id="fullname" name="fullname" required>
                    <input type="email" class="form-control inpi_boxx" placeholder="Email"  id="email" name="email" required>
                    <input type="tel" class="form-control inpi_boxx" placeholder="Phone" id="phone" name="phone" required>
                    <textarea class="form-control inpi_boxx" placeholder="Type Your Message Here..." id="message" name="message" required style="height: 152px;"></textarea>
                    <div class="custom-control custom_checkbox">
                        <input type="checkbox" class="form-check-input tick_box" id="terms" name="terms">
                        <label class="custom-control-label terms_lline" for="terms">
                            By ticking this box, you are agree to the <a href="{{ route('termsandconditions') }}" class="odd">Terms and Conditions</a> &
                            <a href="{{ route('privacypolicy') }}" class="odd">Privacy Policy.</a>
                        </label>
                 </div>
                    <div class="coupoun_boxx">
                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                        <!--<div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}" form="contactform"></div>-->
                        <div class="h-captcha" data-sitekey="c1103c58-adaa-4f06-8296-7fd856a8e2a0" form="contactform"></div>
                        <button class="nav-link btn botto_black" type="submit">Submit your message</button>
                    </div>
                </div>
            </form>    

            <div class="adress_side">
                    <div class="as_in">
                        <div class="as_upp">
                            <h4>Get in touch with us <br>
                                we are here to assist you</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi diam fermentum aliquam porttitor rutrum augue pellentesque amet.</p>
                        </div>
                        <div class="as_low">
                            <div class="connt">
                                <img src="{{ asset('frontend/Brandflaire/assest/images/phone_call.svg') }}" alt="">
                                <p>+1012 3456 789</p>
                            </div>
                            <div class="connt">
                                <img src=".{{ asset('frontend/Brandflaire/assest/images/email.svg') }}" alt="">
                                <p>info@Brandflaire.com</p>
                            </div>
                            <div class="connt">
                                <img src="{{ asset('frontend/Brandflaire/assest/images/local.svg') }}" alt="">
                                <p>132 Dartmouth Street Boston, Massachusetts 02156 United States</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')

<script>
    function check_agree(form) {
        console.log(form.email.valid);
        if (form.fullname && form.email && form.phone && form.message && form.terms.checked) {

            $('#submit-btn').attr('disabled', true);
            return true;
        } else if (!form.fullname.value) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Fullname'
            })
            return false;
        } else if (!form.email.value) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Email'
            })
            return false;
        } else if (!form.phone.value) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Phone'
            })
            return false;
        } else if (!form.message.value) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Enter Comments'
            })
            return false;
        } else if (!form.terms.checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Accept T&C'
            })
            return false;
        }
        return false;
    }
</script>
@if(Session::has('flash_success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ Session::get('flash_success') }}",
        confirmButtonText: 'OK'
    });
</script>
@endif

@if(Session::has('flash_error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "{{ Session::get('flash_error') }}",
        confirmButtonText: 'OK'
    });
</script>
<script>
    window.scrollTo({ top: 0, behavior: 'smooth' });
</script>

@endif

@endsection