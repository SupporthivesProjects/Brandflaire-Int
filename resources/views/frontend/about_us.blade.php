@extends('frontend.layouts.app')

@section('content')
    {{--New Code Starts Here--}}
    <section class="abou1">
        <video src="{{ asset('frontend/Brandflaire/assest/images/about_us.mp4')}}" muted="" loop="" autoplay=""
          class="bg-image d-lg-block d-md-block d-none bg_about">
        </video>
        <video src="{{ asset('frontend/Brandflaire/assest/images/about_mob.mp4')}}" muted="" loop="" autoplay="" class="bg-image d-lg-none d-md-none d-block bg_abo">
        </video>
        <div class="container px-0">
          <div class="about_sec_1">
            <div class="upper_sec_1">
              <p>BRAND FLAIRE <img src="{{ asset('frontend/Brandflaire/assest/images/Animated_infinity.png')}}" alt="" class="ani_infi"> ONE SOLUTION </p>
              <h1>The Future of your Marketing begins Here</h1>
            </div>
            <div class="upper_sec_2">
              <p>Lorem ipsum dolor sit amet consectetur. Odio aliquam urna venenatis integer ut mi diam. In ultrices
                adipiscing tempus nulla accumsan tellus lacus. Urna posuere sit tristique et arcu nulla. Eu laoreet pretium
                pharetra volutpat nibh tempus turpis.</p>
            </div>
          </div>
          <a class="nav-link btn btn_red" href="{{ route('user.registration')}}">Sign Up</a>
        </div>
      </section>
      <section class="abou2">
        <div class="container px-0">
          <div class="abou_mid_box">
            <h1 class="bold_d">How it all started</h1>
            <p class="sub_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus elementum dolor
              tellus diam aliquam. Diam egestas adipiscing ut et consequat. Erat tristique mattis at at vitae. Tortor,
              adipiscing suspendisse ut quam vulputate. Nulla enim laoreet turpis ac. Dolor sapien ut eget sit bibendum. Vel
              pharetra morbi auctor est donec feugiat maecenas neque. Convallis arcu, cras ornare lectus. Nam quam arcu,
              ridiculus tellus vehicula sed elementum suspendisse est. Imperdiet eleifend velit eget sed dolor pulvinar. At
              at massa sodales sed enim amet. Donec lacus, in pellentesque lacus, porttitor. Adipiscing vestibulum neque
              lobortis auctor. Convallis praesent aliquam maecenas et id tellus adipiscing.
              <br> <br>
              Justo amet tincidunt aliquet scelerisque eros, diam. Lobortis aliquam eu tempor nec integer diam consequat
              elit. Tempor mauris mattis eu purus. Nisl, volutpat sit lacus orci. Ultrices aliquam commodo, augue faucibus
              eget.
              Donec orci etiam donec arcu, arcu leo, ac pulvinar condimentum. Urna, convallis fusce et sit sed. Est viverra
              proin ac ut vitae quis. Proin pellentesque quam mauris, vitae in sed neque. Purus, etiam lorem lobortis
              aliquet vitae in in tempus iaculis. Pulvinar ac vitae
            </p>
          </div>
        </div>
      </section>
    
      <section class="abou3">
        <div class="container-fluid px-0">
          <div class="main_box">
            <div class="abou_mid_box">
              <h1 class="bold_d">A young diverse team of digital experts</h1>
              <p class="sub_title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus elementum dolor
                tellus diam aliquam. Diam egestas adipiscing ut et consequat. Erat tristique mattis at at vitae. Tortor,
                adipiscing suspendisse ut quam vulputate. Nulla enim laoreet turpis ac. Dolor sapien ut eget sit bibendum.
                Vel pharetra morbi auctor est donec feugiat maecenas neque. Convallis arcu, cras ornare lectus. Nam quam
                arcu, ridiculus tellus vehicula sed elementum suspendisse est. Imperdiet eleifend velit eget sed dolor
                pulvinar. At at massa sodales sed enim amet.
            </div>
            <div class="contentt_box">
              <img src="{{ asset('frontend/Brandflaire/assest/images/IMG1.png')}}" alt="" class="img-fluid d-block d-md-none d-lg-none">
              <div class="cont_inner_box">
                <h4 class="mini_bold">Research & Insight</h4>
                <p class="mini_prs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus et pulvinar feugiat
                  lectus vulputate vitae nulla eros. Dapibus risus amet, in curabitur non morbi purus, mi, sed.
                  Sollicitudin.
                  <br><br>
                  elementum sit diam. Faucibus et, odio vel massa ut nunc. Dictum quisque tincidunt dictumst ut lectus.
                  Mauris dolor turpis ut mauris pharetra elementum sit penatibus habitant..
                </p>
              </div>
            </div>
            <div class="contentt_box2">
              <img src="{{ asset('frontend/Brandflaire/assest/images/IMG2.png')}}" alt="" class="img-fluid d-block d-md-none d-lg-none">
              <div class="cont_inner_box2">
                <h4 class="mini_bold">Research & Insight</h4>
                <p class="mini_prs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus et pulvinar feugiat
                  lectus vulputate vitae nulla eros. Dapibus risus amet, in curabitur non morbi purus, mi, sed.
                  Sollicitudin.
                  <br><br>
                  elementum sit diam. Faucibus et, odio vel massa ut nunc. Dictum quisque tincidunt dictumst ut lectus.
                  Mauris dolor turpis ut mauris pharetra elementum sit penatibus habitant..
                </p>
              </div>
            </div>
            <div class="contentt_box3">
              <img src="{{ asset('frontend/Brandflaire/assest/images/IMG3.png')}}" alt="" class="img-fluid d-block d-md-none d-lg-none">
              <div class="cont_inner_box">
                <h4 class="mini_bold">Research & Insight</h4>
                <p class="mini_prs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus et pulvinar feugiat
                  lectus vulputate vitae nulla eros. Dapibus risus amet, in curabitur non morbi purus, mi, sed.
                  Sollicitudin.
                  <br><br>
                  elementum sit diam. Faucibus et, odio vel massa ut nunc. Dictum quisque tincidunt dictumst ut lectus.
                  Mauris dolor turpis ut mauris pharetra elementum sit penatibus habitant..
                </p>
              </div>
            </div>
            <div class="last_box">
              <div class="thricebix">
                <div class="thrice_inner_box">
                  <h4>The Next Move for <br>
                    Your Brand Starts Here</h4>
                  <p>Lorem ipsum dolor sit amet consectetur. Sed adipiscing morbi laoreet tristique vel.
                    Vitae leo elementum dictum at euismod. Feugiat viverra tortor tortor congue faucibus.</p>
                </div>
                <a class="nav-link btn black_bttn" href="{{ route('contactus') }}">Get Started</a>
              </div>
            </div>
          </div>
      </section>


    
@endsection

@section('scripts')
<script src="./assest/js/jquery-3.7.1.min.js"></script>
  <script src="./assest/js/owl.carousel.js"></script>
  <script src="./assest/js/popper.min.js"></script>
  <script src="./assest/js/bootstrap.bundle.min.js"></script>
  <script src="./assest/js/swiper-bundle.min.js"></script>
  <script src="./assest/js/aos.js"></script>
  <script src="./assest/js/main.js"></script>

@endsection