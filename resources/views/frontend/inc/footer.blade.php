
<footer class="bd-footer">
    <img src="{{ asset('frontend/Brandflaire/assest/images/testi-bg-1-1 1.png') }}" class="img-fluid d-block d-lg-none d-md-none bg-image">
    <div class="container text-body-secondary">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12 mb-3 col-mo">
          <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
            <img src="{{ asset('frontend/Brandflaire/assest/images/footer-logo.svg') }}" class="img-fluid">
          </a>
         <div>
            <img src="{{ asset('frontend/Brandflaire/assest/images/Mastercard.svg') }}" class="img-fluid masrterimg">
         </div>
          <div class="list-unstyled small">
                <h5>Follow Us:</h5>
                <img src="{{ asset('frontend/Brandflaire/assest/images/white.svg') }}" class="img-fluid">
                <img src="{{ asset('frontend/Brandflaire/assest/images/Instagram.svg') }}" class="img-fluid">
          </div>
        </div>
        <div class="col-6 col-lg-3 col-md-12 col-12   order-lg-1 order-2">
          <h5>Our Details</h5>
          <ul class="list-unstyled-p">
            <p>info@Brandflaire.com</p>
            <p>132 Dartmouth Street Boston,</p>
            <p>Massachusetts 02156</p>
            <p>United States</p>
          </ul>
        </div>
        
        <div class="col-6 col-lg-3 col-md-12 col-12">
          <h5>Our Solutions</h5>
          <ul class="list-unstyled-main">
            <li class=""><a href="{{ route('wdd') }}">UX/UI</a></li>
            <li class=""><a href="{{ route('social') }}">Social Media </a></li>
            <li class=""><a href="{{ route('em') }}">Email Marketing</a></li>
            <li class=""><a href="{{ route('seo') }}">SEO</a></li>
            <li class=""><a href="{{ route('ppc') }}">PPC</a></li>
            <li class=""><a href="{{ route('orm') }}">ORM</a></li>
          </ul>
        </div>
        
      </div>
    </div>
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-0 order-1">
                    <div class="col-red-div">
                        <p>© {{ date('Y') }} Brandflaire.com. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="footerullid">
                        <ul>
                            <li>
                                <a href="{{ route('termsandconditions') }}">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="{{ route('privacypolicy') }}">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>