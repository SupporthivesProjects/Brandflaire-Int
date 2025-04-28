@extends('frontend.layouts.app')

@section('content')    
    <style>
    .black_btn_int{
        width:176px !important;
    }
    </style>

    {{-- NEW CODE STARTS HERE !! --}}
    <section class="home-banner-home">
      <video src=" {{ asset('frontend/Brandflaire/assest/images/home-banner-video.mp4') }}" autoplay muted loop alt="" class="home-video d-none d-lg-block d-md-block bg-image">
        </video>
        <video src=" {{ asset('frontend/Brandflaire/assest/images/home-banner-video-mo.mp4') }}" autoplay muted loop alt="" class="home-video d-block d-lg-none d-md-none">
        </video>
        <div class="container p-mo-0">
          <div class="col">
            <div class="home-banner-content">
              <h6>BRAND FLAIRE 
                <span>
                  <svg width="46" height="24" viewBox="0 0 46 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#paint0_angular_3281_20785_clip_path)" data-figma-skip-parse="true"><g transform="matrix(0.0144385 0 0 0.0143918 11.5112 11.9739)"><foreignObject x="-1287.78" y="-1287.78" width="2575.56" height="2575.56"><div xmlns="http://www.w3.org/1999/xhtml" style="background:conic-gradient(from 90deg,rgba(255, 0, 0, 1) 0deg,rgba(255, 0, 0, 0) 360deg);height:100%;width:100%;opacity:1"></div></foreignObject></g></g><path d="M23.0224 11.9739L24.793 13.7388L26.5636 11.9739L24.793 10.209L23.0224 11.9739ZM15.4962 8.00185L21.2517 13.7388L24.793 10.209L19.0374 4.47205L15.4962 8.00185ZM21.2517 10.209L15.4962 15.9459L19.0374 19.4757L24.793 13.7388L21.2517 10.209ZM7.52629 15.9459C5.32546 13.7522 5.32546 10.1955 7.52629 8.00185L3.98503 4.47205C-0.171581 8.6152 -0.171581 15.3326 3.98503 19.4757L7.52629 15.9459ZM15.4962 15.9459C13.2954 18.1396 9.72711 18.1396 7.52629 15.9459L3.98503 19.4757C8.14163 23.6189 14.8808 23.6189 19.0374 19.4757L15.4962 15.9459ZM19.0374 4.47205C14.8808 0.328892 8.14163 0.328892 3.98503 4.47205L7.52629 8.00185C9.72711 5.80815 13.2954 5.80815 15.4962 8.00185L19.0374 4.47205Z" data-figma-gradient-fill="{&#34;type&#34;:&#34;GRADIENT_ANGULAR&#34;,&#34;stops&#34;:[{&#34;color&#34;:{&#34;r&#34;:1.0,&#34;g&#34;:0.0,&#34;b&#34;:0.0,&#34;a&#34;:1.0},&#34;position&#34;:0.0},{&#34;color&#34;:{&#34;r&#34;:1.0,&#34;g&#34;:0.0,&#34;b&#34;:0.0,&#34;a&#34;:0.0},&#34;position&#34;:1.0}],&#34;stopsVar&#34;:[],&#34;transform&#34;:{&#34;m00&#34;:28.877056121826172,&#34;m01&#34;:0.0,&#34;m02&#34;:-2.9272975921630859,&#34;m10&#34;:0.0,&#34;m11&#34;:28.783601760864258,&#34;m12&#34;:-2.4179055690765381},&#34;opacity&#34;:1.0,&#34;blendMode&#34;:&#34;NORMAL&#34;,&#34;visible&#34;:true}"/>
                    <g clip-path="url(#paint1_angular_3281_20785_clip_path)" data-figma-skip-parse="true"><g transform="matrix(-0.0144385 0 0 -0.0143918 34.4888 12.0261)"><foreignObject x="-1287.78" y="-1287.78" width="2575.56" height="2575.56"><div xmlns="http://www.w3.org/1999/xhtml" style="background:conic-gradient(from 90deg,rgba(255, 0, 0, 1) 0deg,rgba(255, 0, 0, 0) 360deg);height:100%;width:100%;opacity:1"></div></foreignObject></g></g><path d="M22.9776 12.0261L21.207 10.2612L19.4364 12.0261L21.207 13.791L22.9776 12.0261ZM30.5038 15.9982L24.7483 10.2612L21.207 13.791L26.9626 19.528L30.5038 15.9982ZM24.7483 13.791L30.5038 8.05406L26.9626 4.52426L21.207 10.2612L24.7483 13.791ZM38.4737 8.05406C40.6745 10.2478 40.6745 13.8045 38.4737 15.9982L42.015 19.528C46.1716 15.3848 46.1716 8.66741 42.015 4.52426L38.4737 8.05406ZM30.5038 8.05406C32.7046 5.86036 36.2729 5.86036 38.4737 8.05406L42.015 4.52426C37.8584 0.381103 31.1192 0.381103 26.9626 4.52426L30.5038 8.05406ZM26.9626 19.528C31.1192 23.6711 37.8584 23.6711 42.015 19.528L38.4737 15.9982C36.2729 18.1919 32.7046 18.1919 30.5038 15.9982L26.9626 19.528Z" data-figma-gradient-fill="{&#34;type&#34;:&#34;GRADIENT_ANGULAR&#34;,&#34;stops&#34;:[{&#34;color&#34;:{&#34;r&#34;:1.0,&#34;g&#34;:0.0,&#34;b&#34;:0.0,&#34;a&#34;:1.0},&#34;position&#34;:0.0},{&#34;color&#34;:{&#34;r&#34;:1.0,&#34;g&#34;:0.0,&#34;b&#34;:0.0,&#34;a&#34;:0.0},&#34;position&#34;:1.0}],&#34;stopsVar&#34;:[],&#34;transform&#34;:{&#34;m00&#34;:-28.877056121826172,&#34;m01&#34;:0.0,&#34;m02&#34;:48.927299499511719,&#34;m10&#34;:0.0,&#34;m11&#34;:-28.783601760864258,&#34;m12&#34;:26.417905807495117},&#34;opacity&#34;:1.0,&#34;blendMode&#34;:&#34;NORMAL&#34;,&#34;visible&#34;:true}"/>
                    <defs>
                    <clipPath id="paint0_angular_3281_20785_clip_path"><path d="M23.0224 11.9739L24.793 13.7388L26.5636 11.9739L24.793 10.209L23.0224 11.9739ZM15.4962 8.00185L21.2517 13.7388L24.793 10.209L19.0374 4.47205L15.4962 8.00185ZM21.2517 10.209L15.4962 15.9459L19.0374 19.4757L24.793 13.7388L21.2517 10.209ZM7.52629 15.9459C5.32546 13.7522 5.32546 10.1955 7.52629 8.00185L3.98503 4.47205C-0.171581 8.6152 -0.171581 15.3326 3.98503 19.4757L7.52629 15.9459ZM15.4962 15.9459C13.2954 18.1396 9.72711 18.1396 7.52629 15.9459L3.98503 19.4757C8.14163 23.6189 14.8808 23.6189 19.0374 19.4757L15.4962 15.9459ZM19.0374 4.47205C14.8808 0.328892 8.14163 0.328892 3.98503 4.47205L7.52629 8.00185C9.72711 5.80815 13.2954 5.80815 15.4962 8.00185L19.0374 4.47205Z"/></clipPath><clipPath id="paint1_angular_3281_20785_clip_path"><path d="M22.9776 12.0261L21.207 10.2612L19.4364 12.0261L21.207 13.791L22.9776 12.0261ZM30.5038 15.9982L24.7483 10.2612L21.207 13.791L26.9626 19.528L30.5038 15.9982ZM24.7483 13.791L30.5038 8.05406L26.9626 4.52426L21.207 10.2612L24.7483 13.791ZM38.4737 8.05406C40.6745 10.2478 40.6745 13.8045 38.4737 15.9982L42.015 19.528C46.1716 15.3848 46.1716 8.66741 42.015 4.52426L38.4737 8.05406ZM30.5038 8.05406C32.7046 5.86036 36.2729 5.86036 38.4737 8.05406L42.015 4.52426C37.8584 0.381103 31.1192 0.381103 26.9626 4.52426L30.5038 8.05406ZM26.9626 19.528C31.1192 23.6711 37.8584 23.6711 42.015 19.528L38.4737 15.9982C36.2729 18.1919 32.7046 18.1919 30.5038 15.9982L26.9626 19.528Z"/></clipPath></defs>
                    </svg>
                    
              </span> ONE SOLUTION</h6>
              <h1>
                Simplify your marketing with one smart solution
              </h1>
              <p>
                Lorem ipsum dolor sit amet consectetur. Sed rhoncus velit nunc sit. 
                Aenean orci quis quam rutrum urna purus nibh ligula elit. 
                Tortor imperdiet aliquam morbi bibendum interdum integer 
                ipsum. Non lacus lectus dictumst aliquet.
              </p>
              <div class="position-relative btn-div-home">
                @auth
                <a href="{{ route('dashboard') }}" class="btn btn-red">Go to dashboard</a>
                @else
                <a href="{{ route('user.registration') }}" class="btn btn-red">Create an Account For Free</a>
                @endauth
                <div class="btn-cricle btn-red">
                  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                    <path d="M1.5 11L11.5 1M11.5 1V11M11.5 1H1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="home-section2">
        <div class="container">
          <div class="col">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="desgined-left-img">
                  <video src=" {{ asset('frontend/Brandflaire/assest/images/Abstract Loading 15_1.mp4') }}" class="desgin-video" autoplay muted loop></video>
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/designed-left.png') }}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">
                <div class="home-content-s2">
                  <h2>Designed for Brands That Think Beyond the Basics</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur. Feugiat ut suspendisse cursus feugiat 
                    risus et ultrices magna purus. Massa sit urna mollis at pellentesque dignissim 
                    posuere et. At risus aliquam netus eu hendrerit quis pulvinar ac velit. Eget
                     mauris at nunc id. Mi nisl mauris parturient non orci.
                  </p>
                  <br>
                  <p>
                    commodo tristique quis sit ornare. Velit lacus fusce tellus diam porttitor donec. 
                    Placerat eget at mi eleifend ut tellus dictum vulputate pellentesque. Orci accumsan 
                    at non dignissim eget odio est. Enim.
                  </p>
                  <a href="{{ route('aboutus') }}" class="btn btn-black">
                    Unlock the Full Story
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="explore-our-solutions">
        <div class="container">
          <div class="col-title">
            <h2>Explore our solutions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor donec sit suspendisse euismod imperdiet.</p>
          </div>
          <div class="col">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/Rectangle-47122.png') }}" alt="" class="img-fluid d-lg-block d-md-block d-none">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/wddimg-mo.png') }}" alt="" class="img-fluid d-block d-lg-none d-md-none">
                  <div class="col-details">
                    <h3>web design and web development (UX/UI)</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Feugiat quis 
                      facilisis mi dolor. Eget semper urna nibh velit.
                    </p>
                    <a href="{{ route('wdd') }}" class="btn btn-black black_btn_int">View service</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/Rectangle 47122.png') }}" alt="" class="img-fluid d-lg-block d-md-block d-none">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/seoimg-mo.png') }}" alt="" class="img-fluid d-block d-lg-none d-md-none">

                  <div class="col-details">
                    <h3>Social Media
                      Management</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Feugiat quis 
                      facilisis mi dolor. Eget semper urna nibh velit.
                    </p>
                    <a href="{{ route('social') }}" class="btn btn-black black_btn_int">View service</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/emailmarkteing.png') }}" alt="" class="img-fluid d-lg-block d-md-block d-none">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/emimg-mo.png') }}" alt="" class="img-fluid d-block d-lg-none d-md-none">

                  <div class="col-details">
                    <h3>Email<br>
                      Marketing</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Feugiat quis 
                      facilisis mi dolor. Eget semper urna nibh velit.
                    </p>
                    <a href="{{ route('em') }}" class="btn btn-black black_btn_int">View service</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/seoimg.png') }}" alt="" class="img-fluid d-lg-block d-md-block d-none">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/seoimg-om.png') }}" alt="" class="img-fluid d-block d-lg-none d-md-none">

                  <div class="col-details">
                    <h3>Search Engine
                      Optimization (SEO) </h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Feugiat quis 
                      facilisis mi dolor. Eget semper urna nibh velit.
                    </p>
                    <a href="{{ route('seo') }}" class="btn btn-black black_btn_int">View service</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/ppc-img.png') }}" alt="" class="img-fluid d-lg-block d-md-block d-none">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/ppcimg-mo.png') }}" alt="" class="img-fluid d-block d-lg-none d-md-none">

                  <div class="col-details">
                    <h3>Pay-Per-Click<br>
                      (PPC)</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Feugiat quis 
                      facilisis mi dolor. Eget semper urna nibh velit.
                    </p>
                    <a href="{{ route('ppc') }}" class="btn btn-black black_btn_int">View service</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-12 m-auto">
                <div class="card">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/orm-img.png') }}" alt="" class="img-fluid d-lg-block d-md-block d-none">
                  <img src=" {{ asset('frontend/Brandflaire/assest/images/ormimg-mo.png') }}" alt="" class="img-fluid d-block d-lg-none d-md-none">

                  <div class="col-details">
                    <h3>Online Reputation
                      management (ORM) </h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur. Feugiat quis 
                      facilisis mi dolor. Eget semper urna nibh velit.
                    </p>
                    <a href="{{ route('orm') }}" class="btn btn-black black_btn_int">View service</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="setpecontent-section">
        <div class="col">
          <div class="imgchange">
            <img src=" {{ asset('frontend/Brandflaire/assest/images/pexels-fauxels-3184291 1-mo.png') }}" alt=""   class="img-fluid w-100 d-lg-none d-md-none d-block">
            <div class="d-lg-block d-md-block d-none">
              <img src=" {{ asset('frontend/Brandflaire/assest/images/image-2.png') }}" alt=""   class="img-fluid w-100 imagech" style="display: block;">
              <img src=" {{ asset('frontend/Brandflaire/assest/images/image-1.png') }}" alt=""   class="img-fluid w-100 imagech" style="display: none;">
              <img src=" {{ asset('frontend/Brandflaire/assest/images/image-3.png') }}" alt=""   class="img-fluid w-100 imagech" style="display: none;">
            </div>
          </div>
          <div class="col-bg-stp">
            <div class="container">
              <div class="stepsthree-cool">
                <h2>Your Brand’s Next Breakthrough</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor donec sit suspendisse euismod imperdiet.
                </p>
              </div>
              <div class="d-none d-lg-block d-md-block">
                  <div class="col-lg-10 col-md-12 col-sm-12 col-12 m-auto ">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-12 col-12">
                          <div>
                            <div class="nav flex-column nav-pills me-3 position-relative" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <button onclick="showImage(0)" class="nav-link active btn-navlink" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <img src=" {{ asset('frontend/Brandflaire/assest/images/Artboard-24.svg') }}" alt="" class="img-fluid">
                                <p>Choose
                                  <br>packages</p>
                              </button>
                              <button onclick="showImage(1)" class="nav-link btn-navlink" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <img src=" {{ asset('frontend/Brandflaire/assest/images/Artboard-25.svg') }}" alt="" class="img-fluid">
                                <p>Schedule <br> appointment</p>
                              </button>
                              <button onclick="showImage(2)" class="nav-link btn-navlink" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                <img src=" {{ asset('frontend/Brandflaire/assest/images/Artboard-26.svg') }}" alt="" class="img-fluid">
                                <p>grow <br>together</p>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12 col-12 ">
                            <div class="align-items-start">
                              <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="right-content-box">
                                        <h3>use our easy contact form to schedule an appointment with us</h3>
                                        <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi 
                                          lorem pharetra feugiat ut. Nunc vestibulum nunc facilisi scelerisque 
                                          netus in arcu. Facilisis luctus morbi id id fermentum ac. Odio magna 
                                          accumsan, feugiat pulvinar tristique nulla ut feugiat donec. Non turpis nisl.
                                        </p>
                                        <a href="{{ route('contactus') }}" class="btn btn-black">Explore our solutions</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                  <div class="right-content-box">
                                      <h3>use our easy contact form to schedule an appointment with us</h3>
                                      <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi 
                                        lorem pharetra feugiat ut. Nunc vestibulum nunc facilisi scelerisque 
                                        netus in arcu. Facilisis luctus morbi id id fermentum ac. Odio magna 
                                        accumsan, feugiat pulvinar tristique nulla ut feugiat donec. Non turpis nisl.
                                      </p>
                                      <a href="{{ route('contactus') }}" class="btn btn-black">Explore our solutions</a>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                    <div class="right-content-box">
                                      <h3>use our easy contact form to schedule an appointment with us</h3>
                                      <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi 
                                        lorem pharetra feugiat ut. Nunc vestibulum nunc facilisi scelerisque 
                                        netus in arcu. Facilisis luctus morbi id id fermentum ac. Odio magna 
                                        accumsan, feugiat pulvinar tristique nulla ut feugiat donec. Non turpis nisl.
                                      </p>
                                      <a href="{{ route('contactus') }}" class="btn btn-black">Explore our solutions</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="d-block d-lg-none d-md-none">
                <div class="right-content-box">
                  <button class="button-img">
                    <img src=" {{ asset('frontend/Brandflaire/assest/images/Artboard-24.svg') }}" alt="" class="img-fluid">
                    <p>grow <br>together</p>
                  </button>
                    <h3>use our easy contact form to schedule an appointment with us</h3>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi 
                      lorem pharetra feugiat ut. Nunc vestibulum nunc facilisi scelerisque 
                      netus in arcu. Facilisis luctus morbi id id fermentum ac. Odio magna 
                      accumsan, feugiat pulvinar tristique nulla ut feugiat donec. Non turpis nisl.
                    </p>
                    <a href="{{ route('contactus') }}" class="btn btn-black">Explore our solutions</a>
                </div>
                <div class="right-content-box">
                  <button class="button-img">
                    <img src=" {{ asset('frontend/Brandflaire/assest/images/Artboard-25.svg') }}" alt="" class="img-fluid">
                    <p>Choose
                      <br>packages</p>
                  </button>
                  <h3>use our easy contact form to schedule an appointment with us</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi 
                    lorem pharetra feugiat ut. Nunc vestibulum nunc facilisi scelerisque 
                    netus in arcu. Facilisis luctus morbi id id fermentum ac. Odio magna 
                    accumsan, feugiat pulvinar tristique nulla ut feugiat donec. Non turpis nisl.
                  </p>
                  <a href="{{ route('contactus') }}" class="btn btn-black">Contact our team</a>
                </div>
                <div class="right-content-box">
                  <button class="button-img">
                    <img src=" {{ asset('frontend/Brandflaire/assest/images/Artboard-26.svg') }}" alt="" class="img-fluid">
                    <p>Choose
                      <br>packages</p>
                  </button>
                  <h3>use our easy contact form to schedule an appointment with us</h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi 
                    lorem pharetra feugiat ut. Nunc vestibulum nunc facilisi scelerisque 
                    netus in arcu. Facilisis luctus morbi id id fermentum ac. Odio magna 
                    accumsan, feugiat pulvinar tristique nulla ut feugiat donec. Non turpis nisl.
                  </p>
                  <a href="{{ route('contactus') }}" class="btn btn-black">Unlock the Full Story</a>
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="last-section-home">
      <div class="container-fluid p-0">
        <div class="last-cl-bg">
          <div class="last-content-left">
            <div>
              <h2>Let’s Get Your Brand
                Where It Deserves to Be</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur. Sed adipiscing morbi laoreet tristique vel.
                Vitae leo elementum dictum at euismod. Feugiat viverra tortor tortor congue faucibus.
              </p>
            </div>
            <div>
              <a href="{{ route('seo') }}" class="btn btn-black black_btn_int">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section>



@endsection




@section('script')

@endsection