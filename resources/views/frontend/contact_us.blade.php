@extends('frontend.layouts.app')

@section('content')
<section class="contact_us">
    <video src="{{ asset('frontend/Brandflaire/assest/images/contact_pg.mp4')}}" muted="" loop="" autoplay="" class="bg-image d-lg-block d-md-block d-none">
    </video>
    <video src="{{ asset('frontend/Brandflaire/assest/images/cont_mob.mp4')}}" muted="" loop="" autoplay="" class="bg-image d-lg-none d-md-none d-block bg_video">
    </video>
    <div class="container px-0">
      <div class="mid_box">
        <div class="conatc_side">

          {{-- form starts here --}}
          <form id="contactform" role="form"
          action="{{ route('contactus.store') }}" method="post" onsubmit="return check_agree(this);"style="display: contents;">
          @csrf
          <input type="hidden" name="from_page" value="contactus">

          <input type="text" class="form-control inpi_boxx" id="fullname" name="fullname" placeholder="Full Name" required>
          <input type="email" class="form-control inpi_boxx" id="email" name="email" placeholder="Email Adress" required>
          <input type="tel" class="form-control inpi_boxx" id="phone" name="phone" placeholder="Phone Numbaer" required>
          <textarea class="form-control inpi_boxx" id="message" name="message" placeholder="Type Your Message" required="" style="height: 152px;"></textarea>
          
          
          <div class="custom-control custom_checkbox">
            <input type="checkbox" class="form-check-input tick_box" id="terms" name="terms">
            <label class="custom-control-label terms_lline" for="terms">
              By ticking this box, you are agree to the 
              <a href="{{route('termsandconditions')}}" class="odd">Terms and Conditions</a> &
              <a href="{{route('privacypolicy')}}" class="odd">Privacy Policy.</a>
            </label>
          </div>

                    <div class="contact_input_div">
                        <p class="contact_input_title">Phone</p>
                        <input type="tel" class="form-control input_global" id="phone" name="phone" required>
                    </div>

                    <div class="contact_input_div">
                        <p class="contact_input_title">Your Message</p>
                        <textarea class="form-control input_global" id="message" name="message" required></textarea>
                    </div>

                    <div class="contact_input_div">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-checkbox mb-3">
                                    <div class="c-div">
                                        <label class="d-flex justify-content-center justify-content-lg-start">
                                            <input type="checkbox" id="terms" name="terms">
                                            <label for="terms"></label>
                                        </label>
                                    </div>
                                    <div class="c-text">
                                        <p class="login_strong">By ticking this box, you agree to the
                                            <a href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a
                                                href="{{ route('privacypolicy') }}">Privacy Policy</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="h-captcha mx-auto my_mob_24" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"
                                    form="contactform"></div>
                            </div>
                        </div>
                    </div>

                    <div class="contact_submit_div">
                        <button class="btn btn_global mx-auto" type="submit">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}"
                                alt="" class="img-fluid btn_global_pattern">
                            <div class="btn_global_inner">
                                <p class="cart_text">Submit Message</p>
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/arrow_logo.svg') }}" alt=""
                                    class="img-fluid cart_logo">
                            </div>
                        </button>
                    </div>
                </form>
                <!-- form ends here -->
            </div>
        </div>
    </section>
@endsection   
@section('scripts')   
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
@endsection
