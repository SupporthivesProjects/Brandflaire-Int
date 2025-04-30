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
                <a class="nav-link btn black_bttn" href="#">Get Started</a>
              </div>
            </div>
          </div>
      </section>
{{--<section>

    <section class="sec1_s">
        <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay=""
            style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/aboutus.mp4') }}" type="video/mp4">
        </video>
        <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay="" style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/aboutus_mob.mp4') }}" type="video/mp4">
        </video>

        <div class="aboutus__sec1">
            <h1 class="main_tt">
                The Brains Behind <br class="mobile_none">the<span class="aboutus_span">
                    Brand Sparkz
                </span>
            </h1>
            <p class="main_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nunc eget molestie
                duis nunc iaculis morbi vestibulum. Massa volutpat nisi, ultrices aenean pellentesque ornare ornare
                vel. Viverra et lobortis a scelerisque vitae. Turpis non venenatis vel sed. Urna id.</p>

        </div>
    </section>


    <section class="for_bgonly">
        <section class="aboutus_2">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect_tt.png') }}" alt="" class="img-fluid intersect_tt mobile_none">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_intersect.png') }}" alt="" class="img-fluid intersect_tt_mob desktop_none">

            <h1 class="about_tt">
                Our <span class="about_tt_span">Spark</span> by the Numbers
            </h1>
            <p class="about_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam leo velit mi diam sed
                viverra aenean. Ut et velit molestie consectetur pharetra, platea convallis. Eleifend porttitor
                viverra sed lectus ipsum vitae ipsum blandit.</p>
            <div class="container p-0">
                <div class="image_section">
                    <div class="img_1_shadow_wrapper">
                        <img class="img_1_shadow" src="{{ asset('frontend/BrandSparkz/assets/img/img_1_shadow.png') }}">
                        <div class="img_1">
                            <p class="image_tt mx-auto">Campaigns That Actually work</p>
                        </div>
                    </div>




                    <div class="img_2">
                        <p class="image_tt mx-auto">Support That Doesn’t Sleep</p>
                    </div>
                    <div class="img_3">
                        <p class="image_tt mx-auto">More Than 20 Digital Creators, One Mission</p>
                    </div>
                    <div class="img_4_shadow_wrapper">
                        <img class="img_4_shadow" src="{{ asset('frontend/BrandSparkz/assets/img/img_4_shadow.png') }}">
                        <div class="img_4">
                            <p class="image_tt mx-auto">Cross-Industry Knowledge</p>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <section class="aboutus_3">
            <div class="container custom_pad_about">
                <div class="aboutus3_maincrd">

                    <div class="aucrd_contentouter">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/aboutusprop.png') }}" alt="" class="img-fluid aboutusprop mobile_none">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_au_prop.png') }}" alt=""
                            class="img-fluid mobile_au_prop desktop_none">
                        <div class="aucrd_contentinner">
                            <h1 class="au_tt">
                                the Minds That Make <span class="au_tt_span">the Magic</span>
                            </h1>
                            <p class="au_pp">Lorem ipsum dolor sit amet consectetur. Felis tristique dapibus felis
                                vestibulum vulputate tincidunt. Nunc quis ut aliquet orci bibendum et placerat
                                iaculis pellentesque. Accumsan facilisi duis nullam cursus volutpat et molestie
                                vestibulum. Tellus nullam a egestas elementum ut odio turpis cursus lobortis.
                                <br>
                                Amet dictumst nulla ac at nunc sit in adipiscing volutpat. Vulputate nisl cum diam
                                pulvinar. Ut tellus tellus posuere volutpat tellus aliquam aliquam amet. Ac morbi
                                sed pulvinar sed amet lacinia. Lectus justo vestibulum ipsum cras leo sagittis.
                                <br>
                                Id non sed habitant vel massa. Ipsum leo leo aliquet vel aliquam. Tristique nam
                                turpis dolor et fames ac. Non non est sed dui at enim pharetra. Dapibus nisl
                                dictumst dignissim sit dictumst mi sit fames diam. Ut nunc nulla eu urna bibendum
                                nec penatibus.
                                <br>
                                Cras tincidunt in suspendisse fusce quisque sapien dui mi. Accumsan fringilla
                                gravida venenatis sit consequat commodo quis. Sed massa nec nec turpis.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="desktop_none">

            <div class="only_mob">
                    <h1 class="only_mob_tt">
                        Turn Brand Potential Into <span class="only_mob_tt_span">Brand Power</span>
                    </h1>
                    <div class="per_section">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/icon1.png') }}" alt="" class="img-fluid icon_icon">
                        <div>
                            <h1 class="per_sec_tt">impact Over Noise</h1>
                            <p class="per_sec_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo vitae massa integer lorem aliquam turpis fusce. Est arcu mi massa</p>
                        </div>
                    </div>
                    <div class="per_section">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/icon2.png') }}" alt="" class="img-fluid icon_icon">
                        <div>
                            <h1 class="per_sec_tt">impact Over Noise</h1>
                            <p class="per_sec_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo vitae massa integer lorem aliquam turpis fusce. Est arcu mi massa</p>
                        </div>
                    </div>
                    <div class="per_section">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/icon3.png') }}" alt="" class="img-fluid icon_icon">
                        <div>
                            <h1 class="per_sec_tt">Built for Bold Brands</h1>
                            <p class="per_sec_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo vitae massa integer lorem aliquam turpis fusce. Est arcu mi massa</p>
                        </div>
                    </div>
            </div>

        </section>

        <section class="aboutus_4">
            <h1 class="au_tt">
                The <span class="au_tt_span">Sparkz</span> Menu

            </h1>
            <p class="au_pp extra_widith">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, feugiat
                laoreet vel, amet tristique dolor euismod sed diam. Consectetur porttitor diam mattis commodo sed
                elementum, ultricies.</p>
            <div class="container main_div_hoverpadding">

                <div class="in_hover">

                    <div class="serv_rw_1">
                        <div class="serv_c1 js_hv">
                            <a class=" card_btn" href="#">SEO</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive SEO </h4>
                                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare
                                    volutpat blandit scelerisque et cursus tristique <span class="mobile_none">hendrerit hendrerit. Nunc urna at
                                        quis eu enim egestas.</span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('seo') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c2 js_hv">
                            <a class=" card_btn" href="#">Pay-per-click</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive Pay-per-click </h4>
                                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare
                                    volutpat blandit scelerisque et cursus tristique <span class="mobile_none">hendrerit hendrerit. Nunc urna at
                                        quis eu enim egestas.</span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('ppc') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c3 js_hv">
                            <a class=" card_btn" href="#">ORM</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive ORM </h4>
                                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare
                                    volutpat blandit scelerisque et cursus tristique <span class="mobile_none">hendrerit hendrerit. Nunc urna at
                                        quis eu enim egestas.</span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('orm') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="serv_rw_1">
                        <div class="serv_c4 js_hv">
                            <a class=" card_btn" href="#">UX/UI</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive UX/UI </h4>
                                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare
                                    volutpat blandit scelerisque et cursus tristique <span class="mobile_none">hendrerit hendrerit. Nunc urna at
                                        quis eu enim egestas.</span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('wdd') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c5 js_hv">
                            <a class=" card_btn" href="#">Email Marketing</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive Email Marketing </h4>
                                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare
                                    volutpat blandit scelerisque et cursus tristique <span class="mobile_none">hendrerit hendrerit. Nunc urna at
                                        quis eu enim egestas.</span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route('em') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="serv_c6 js_hv">
                            <a class=" card_btn" href="#">Social Media</a>
                            <div class="serv_gree">
                                <h4 data-aos="fade-up">Progressive Social Media </h4>
                                <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare
                                    volutpat blandit scelerisque et cursus tristique <span class="mobile_none">hendrerit hendrerit. Nunc urna at
                                        quis eu enim egestas.</span>
                                </p>
                                <button class="btn btn_global2 mx-auto" onclick="window.location.href='{{ route(name: 'social') }}'">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                                        class="img-fluid btn_global_pattern2">
                                    <div class="btn_global_inner2 on_phone">
                                        <h1 class="cart_text">Explore Service</h1>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </section>

    








    <section class="floater_section">
        <div class="line_div mobile_none">

        </div>
        <div class="grey_div mobile_none">

        </div>

        <div class="floater_div">

            <div class="inner_floater">
                <div>
                    <h1 class="floater_div_tt">
                        We’re <span class="floater_div_tt_span">All In</span>, Are You?
                    </h1>
                    <p class="floater_div_pp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus dignissim dictumst
                        leo at fusce euismod ut eleifend. Lectus blandit amet mi in.
                    </p>

                </div>

                <button class="btn btn_global2 on_phone" onclick="window.location.href='{{ route('contactus') }}'">
                    <img src="{{ asset('frontend/Brandsparkz/assets/img/btn_primary_pattern2.png') }}" alt="" class="img-fluid btn_global_pattern2">
                    <div class="btn_global_inner2 on_phone">
                        <p class="cart_text">Get started!</p>
                    </div>
                </button>
            </div>



        </div>

    </section>
</section>--}}

    
@endsection

@section('scripts')
<script src="./assest/js/jquery-3.7.1.min.js"></script>
  <script src="./assest/js/owl.carousel.js"></script>
  <script src="./assest/js/popper.min.js"></script>
  <script src="./assest/js/bootstrap.bundle.min.js"></script>
  <script src="./assest/js/swiper-bundle.min.js"></script>
  <script src="./assest/js/aos.js"></script>
  <script src="./assest/js/main.js"></script>

{{--<script>
    const div = document.querySelector('.img_1');
    const img = document.querySelector('.img_1_shadow');

    // Function to sync image size with div's content box size
    function syncSize() {
        const rect = div.getBoundingClientRect();
        img.style.width = rect.width + 'px';
        img.style.height = rect.height + 'px';
    }

    // Set initial size
    syncSize();

    // Use ResizeObserver to track changes
    const observer = new ResizeObserver(() => {
        syncSize();
    });

    observer.observe(div);


    const div4 = document.querySelector('.img_4');
    const img4 = document.querySelector('.img_4_shadow');

    // Function to sync image size with div's content box size
    function syncSize4() {
        const rect = div4.getBoundingClientRect();
        img4.style.width = rect.width + 'px';
        img4.style.height = rect.height + 'px';
    }

    // Set initial size
    syncSize4();

    // Use ResizeObserver to track changes
    const observer4 = new ResizeObserver(() => {
        syncSize4();
    });

    observer4.observe(div4);
</script>

<script>
    function check_agree(form) {
        console.log(form.email.valid);
        if (form.fullname && form.email && form.message && form.terms.checked) {

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
</script>--}}

@endsection