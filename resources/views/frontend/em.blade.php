@extends('frontend.layouts.app')

@section('content')

{{--<section >

    <section class="sec1_s">
        <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay=""
            style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/email.mp4') }}" type="video/mp4">
        </video>
        <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay="" style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/email_mob.mp4') }}" type="video/mp4">
        </video>

        <div class="sec1_video">
            <h1 class="main_tt">
                Email Marketing
            </h1>
            <p class="main_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nunc eget molestie
                duis nunc iaculis morbi vestibulum. Massa volutpat nisi, ultrices aenean pellentesque ornare.</p>
            <button class="btn btn_global" onclick="window.location='#target-element'">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                    <div class="btn_global_inner w-100">
                        
                        <p class="cart_text">Explore our pricing</p>
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/down_arrow.svg') }}" alt="" class="img-fluid cart_logo">
                    </div>
            </button>
        </div>

        <div class="mobile_none">
            <div class="prop1">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>
                <p class="prop_pp ">Two Factor Authentication</p>
            </div>
        </div>

        <div class="mobile_none">
            <div class="prop2 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>
                <p class="prop_pp ">A/B Testing</p>
            </div>
        </div>

        <div class="mobile_none">
            <div class="prop3">
                <p class="prop_pp ">Multi User Access</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>

            </div>
        </div>


    </section>

    <section class="sec2_s">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect_tt.png') }}" alt="" class="img-fluid intersect_tt mobile_none">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_intersect.png') }}" alt="" class="img-fluid intersect_tt_mob desktop_none">
        <div class="container p-0">
            <div class="inner_sec2">
                <div class="left_inner2">

                    <div class="inin_div">
                        <h1 class="div2_tt">
                            What is email <br>marketing?
                        </h1>
                        <p class="div2_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper nunc
                            hendrerit eget sed iaculis felis, quis viverra. Quisque donec purus ac amet fusce duis
                            tellus facilisis pharetra. Imperdiet pellentesque nisl in tellus. Consectetur magnis at
                            aliquet sed elementum. Pellentesque volutpat a vitae risus nunc et pharetra leo.
                            Tristique sem mi porttitor morbi vel enim proin. Nisl ac neque, id euismod.</p>

                    </div>
                </div>
                <div class="right_inner2">
                    <div class="inin_div">
                        <h1 class="div2_tt">
                            Reach interested customers fast
                        </h1>
                        <p class="div2_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper nunc
                            hendrerit eget sed iaculis felis, quis viverra. Quisque donec purus ac amet fusce duis
                            tellus facilisis pharetra. Imperdiet pellentesque nisl in tellus. Consectetur magnis at
                            aliquet sed elementum. Pellentesque volutpat a vitae risus nunc et pharetra leo.
                            Tristique sem mi porttitor morbi vel enim proin. Nisl ac neque, id euismod.</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- <img class="img-fluid inter mobile_none" src="{{ asset('frontend/BrandSparkz/assets/img/Intersect_t.png') }}"> -->

    </section>

    <section class="sec3_s">

        <div class="sec3_1div">
            <h1 class="sec3_tt">How We <span class="sec3_spantt">Make<br class="desktop_none"> It Happen</span></h1>
            <p class="sec_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam leo velit mi diam sed
                viverra aenean. Ut et velit molestie consectetur pharetra, platea convallis. Eleifend porttitor
                viverra sed lectus ipsum vitae ipsum blandit.</p>
        </div>

        <div class="cards_div container custom_padding">

            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/1.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt">
                        Creation
                    </h1>

                    <p class="crd_pp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit arcu aliquam vitae.
                    </p>

                </div>

            </div>
            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/2.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd2.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt">
                        Communication
                    </h1>

                    <p class="crd_pp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit arcu aliquam vitae.
                    </p>

                </div>

            </div>
            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/3.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd3.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt">
                        Development
                    </h1>

                    <p class="crd_pp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit arcu aliquam vitae.
                    </p>

                </div>

            </div>
            <div class="cards_crd">

                <img src="{{ asset('frontend/BrandSparkz/assets/img/4.png') }}" alt="" class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd4.png') }}" alt="" class="img-fluid crd_image desktop_none">
                <div class="context_crd">
                    <h1 class="crd_tt">
                        Results
                    </h1>

                    <p class="crd_pp">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit arcu aliquam vitae.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section class="sec4_s">

        <div class="container custom_padding2">
            <div class="sec4_1">

                <h1 class="sec4_tt">Powering Brands<br> <span class="sec4_tt_span">That Mean Business</span></h1>
                <p class="sec4_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper nunc hendrerit eget sed iaculis felis, quis viverra. Quisque donec purus ac amet fusce duis tellus facilisis pharetra. Imperdiet pellentesque nisl in tellus. Consectetur magnis at aliquet sed. </p>

            </div>

            <div class="sec4_2">
                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_1.png') }}" alt="" class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em1_mob.png') }}" alt="" class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt">A/B Testing</h1>
                        <p class="crd4_pp">Lorem ipsum dolor sit amet <br class="desktop_none">  consectetur. Neque integer faucibus imperdiet turpis.</p>

                    </div>
                </div>

                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_2.png') }}" alt="" class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em2_mob.png') }}" alt="" class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt">Transactional Emails</h1>
                        <p class="crd4_pp">Lorem ipsum dolor sit amet <br class="desktop_none">  consectetur. Neque integer faucibus imperdiet turpis.</p>

                    </div>
                </div>

                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_3.png') }}" alt="" class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em3_mob.png') }}" alt="" class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt">Mobile Optimization</h1>
                        <p class="crd4_pp">Lorem ipsum dolor sit amet <br class="desktop_none"> consectetur. Neque integer faucibus imperdiet turpis.</p>

                    </div>
                </div>
            </div>
        </div>
        

    </section>

    <section class="sec5_s">

        <div class="container custom_padding5">

            <div class="inner_sec5_ulta">
                <div class="left_sec5">
                    <div class="inin_sec5">
                        <h1 class="sec5_tt">Digital Marketing <br><span class="span_sec5_tt">That Hits Different!</span>
                        </h1>
                        <p class="sec5_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper nunc
                            hendrerit eget sed iaculis felis, quis viverra. Quisque donec purus ac amet fusce duis tellus
                            facilisis pharetra..
                        </p>
    
                        <div class="pointer_p">
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt="" class="img-fluid">
                                <p class="pointer_pp">Strategy experience and analytical expertise combine.</p>
                            </div>
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt="" class="img-fluid">
                                <p class="pointer_pp">Strategy experience and analytical expertise combine.</p>
                            </div>
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt="" class="img-fluid">
                                <p class="pointer_pp">Strategy experience and analytical expertise combine.</p>
                            </div>
    
                        </div>
                    </div>
    
                    <button class="btn btn_global2 on_phone" onclick="location.href='{{route('aboutus') }}'">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt="" class="img-fluid btn_global_pattern2">
                        <div class="btn_global_inner2 on_phone">
                            <p class="cart_text">Learn more about us</p>
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/up_right.svg') }}" alt="" class="img-fluid cart_logo">
                        </div>
                    </button>

                </div>
                <div class="right_sec5">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_photo.png') }}" alt="" class="img-fluid mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/em_photo_mob.png') }}" alt="" class="img-fluid desktop_none">
                </div>
            </div>

        </div>
        

    </section>

    <section class="sec8_s" id="target-element">

        
        <h1 class="table_tt">
            Pricing That <br class="desktop_none">Makes Sense
        </h1>
        <p class="table_pp">No contracts. No Surprise fees.</p>
        <div class="for_below_table em_width mx-auto">
            <div class="social_tablebar w-100">
                <div class="tab_btnbar">
                    <div class="nav-tabs-container position-relative">
                        <ul class="nav nav-pills service_tabbar" id="pills-tab" role="tablist">
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="active service_tabbtn w-100" id="pills-one-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one"
                                    aria-selected="true">1&nbsp;Month</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-three-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three"
                                    aria-selected="false">3&nbsp;Months</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-six-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six"
                                    aria-selected="false">6&nbsp;Months</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-twelve-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-twelve" type="button" role="tab" aria-controls="pills-twelve"
                                    aria-selected="false">12&nbsp;Months</button>
                            </li>
                        </ul>
                        <div class="progress-line">
                            <div class="progress-arrow"></div>
                        </div>
                    </div>
                </div>
                <p class="social_swipetext desktop_none">Swipe left and right to view table</p>
                <div class="tab_contentbar tab-content">
                    <div class="tab-content" id="pills-tabContent">
                        <!-- 1 Months Tab -->
                        <div class="tab-pane fade show active service_contentmain" id="pills-one" role="tabpanel"
                            aria-labelledby="pills-one-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['1_month'] as $product)
                                                <th scope="col" class="text-center">
                                                    <div class="social_tablehead">
                                                        <p class="social_tabletitle">
                                                            @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                            @endphp
                                                        </p>
                                                        <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                        <p class="social_tablesubtitle">+VAT</p>
                                                        <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                    </div>
                                                </th>
                                            @endforeach
                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- 3 Months Tab -->
                        <div class="tab-pane fade service_contentmain" id="pills-three" role="tabpanel"
                            aria-labelledby="pills-three-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['3_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">
                                                        @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                        @endphp
                                                    </p>
                                                    <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- 6 Months Tab -->
                        <div class="tab-pane fade service_contentmain" id="pills-six" role="tabpanel"
                            aria-labelledby="pills-six-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['6_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">
                                                        @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                        @endphp
                                                    </p>
                                                    <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach

                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- 12 Months Tab -->
                        <div class="tab-pane fade service_contentmain" id="pills-twelve" role="tabpanel"
                            aria-labelledby="pills-twelve-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach($emProducts['12_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">
                                                        @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                        @endphp
                                                    </p>
                                                    <p class="social_tableamt">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor:pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                            {{-- <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Silver</p>
                                                    <p class="social_tableamt">£264</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">Gold</p>
                                                    <p class="social_tableamt">£547</p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn">Add To Cart</button>
                                                </div>
                                            </th> --}}
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly email send limit</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if($key == 0) 3000
                                                    @elseif($key == 1) 7000
                                                    @else Unlimited
                                                    @endif
                                                </p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Multiple users</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">Unlimited</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">User Roles & Permissions</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Two Factor Authentication</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Customizable template library</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Custom fields</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Drag-and-drop builder</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Signup forms</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Mobile optimization tools</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">A/B testing </p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Preference Center</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Design & spam testing</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Real-time reporting analytics</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Worldview reporting</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (straightforward syndication)</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Transactional emails</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Campaign Tags</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email section locking</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Dynamic content</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Countdown timer</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Optimal Time zone sending</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Send time optimization</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Advanced link tracking</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key < 2)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email support</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Phone support</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if($key == 0)
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                @else
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Deliverability support</p>
                                            </td>
                                            @foreach($emProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="sec7_s">
        <div class="insec7_s">
            <div>
                <h1 class="form_tt">Need a something <span class="span_form_tt">bespoke?</span> </h1>
                <p class="form_pp">Pick and choose what features you would like in your very own custom package
                    Simply upload a document of your brief and our team will get back to you.</p>
            </div>
            <form class="ser_s7_content_form" id="requestform1" action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                @csrf
                <input type="hidden" name="from_page" form="requestform1" value="service">
                <div class="form_section">
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Full Name</p>
                            <input type="text" id="fname" name="fname" class="input_tag"
                            id="fullname" name="fullname" form="requestform1" required>

                        </div>
                        <div class="one_section">
                            <p class="label_l">Email</p>
                            <input type="email" id="Email" name="Email" class="input_tag"
                            id="email" name="email" form="requestform1" required>
                        </div>
                    </div>
                    <div class="spacer2"></div>
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Phone</p>
                            <input type="tel" id="pno" name="pno" class="input_tag"
                            id="phone" name="phone" form="requestform1" required>
                        </div>

                        <div class="one_section">
                            <p class="label_l">Upload Brief</p>
                            {{-- <div class="upload_div" onclick="field_box_file()">
                                <p class="upload_placeholder" id="upload_placeholder">Upload brief here</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M5.89286 15.9289C4.29518 15.9289 3 14.9291 3 13.4631C3 11.9972 4.29518 10.8088 5.89286 10.8088C6.0015 10.8088 6.10875 10.8143 6.21429 10.825V10.8088H6.25407C6.22781 10.6155 6.21429 10.4187 6.21429 10.2189C6.21429 7.61272 8.51682 5.5 11.3571 5.5C13.2805 5.5 14.9573 6.46881 15.8395 7.90361C16.0551 7.87452 16.2756 7.85945 16.5 7.85945C18.9853 7.85945 21 9.70808 21 11.9885C21 13.8657 19.6348 15.2967 17.7656 15.7684M11.858 19.5V12.7258M11.858 12.7258L8.90625 15.5196M11.858 12.7258L14.8125 15.5196"
                                        stroke="#3C3C3C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <input type="file" class="form-control input_upload" style="display: contents;"
                                id="document" name="document" form="requestform1" required>
                            </div> --}}
                            <div class="upload_div" onclick="field_box_file()" type="button">
                                <p class="upload_placeholder" id="upload_placeholder">Upload brief</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M17 9.50195C19.175 9.51395 20.353 9.61095 21.121 10.379C22 11.258 22 12.672 22 15.5V16.5C22 19.329 22 20.743 21.121 21.622C20.243 22.5 18.828 22.5 16 22.5H8C5.172 22.5 3.757 22.5 2.879 21.622C2 20.742 2 19.329 2 16.5V15.5C2 12.672 2 11.258 2.879 10.379C3.647 9.61095 4.825 9.51395 7 9.50195" stroke="url(#paint0_linear_7573_6736)" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M12 15.5V2.5M12 2.5L15 6M12 2.5L9 6" stroke="url(#paint1_linear_7573_6736)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                  <linearGradient id="paint0_linear_7573_6736" x1="2" y1="9.50195" x2="13.8779" y2="27.7785" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#8482FF"/>
                                    <stop offset="1" stop-color="#7723FE"/>
                                  </linearGradient>
                                  <linearGradient id="paint1_linear_7573_6736" x1="9" y1="2.5" x2="18.8927" y2="7.06585" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#8482FF"/>
                                    <stop offset="1" stop-color="#7723FE"/>
                                  </linearGradient>
                                </defs>
                              </svg>
                              </div>
                              <input type="file" class="form-control input_upload" style="display: contents;" id="document" name="document" required>
                        </div>

                    </div>
                    <div class="spacer"></div>
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Additional Information</p>
                            <textarea class="textarea_t" id="message" name="message" form="requestform1" required>
                                </textarea>

                        </div>

                        <div class="for_robot_checkbox">
                            <div class="c-checkbox">
                                <div class="c-div">
                                    <label class="d-flex justify-content-center justify-content-lg-start">
                                        <input type="checkbox" id="terms" name="terms" form="requestform1">
                                        <label for="terms"></label>
                                    </label>
                                </div>
                                <div class="c-text">
                                    <p class="login_strong">By ticking this box, you agree to the<br> <span
                                            class="blue_text"><a href="{{ route('termsandconditions') }}">Terms & Conditions</span> & 
                                            <span class="blue_text"><a href="{{ route('privacypolicy') }}">Privacy Policy</span></p>
                                </div>
                            </div>
                            <div class="spacer2"></div>
                            {{-- <img class="notrobot_1" src="{{ asset('frontend/BrandSparkz/assets/img/not_a_robot.png') }}') }}"> --}}
                            <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                            <div class="h-captcha" form="requestform1" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn_global form_btn_wid" type="submit" form="requestform1">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}') }}') }}" alt="" class="img-fluid btn_global_pattern">
                    <div class="btn_global_inner w-100" type="submit" form="requestform1">
                        <p class="cart_text">Submit Request</p>
                    </div>
                </button>
            </form>
        </div>
    </section>
</section> --}}

{{--New Code Start--}}

<!-- Service Section 1 Start -->
<section class="service_s1 em_s1">
        <div class="container service_c1">
            <div class="seo_c1left w-100">
                <div class="seo_c1titlebar">
                    <h1 class="seo_s1title">Email marketing</h1>
                    <p class="seo_s1subtitle">Lorem ipsum dolor sit amet consectetur. Nisl vitae varius tempor
                        vestibulum at elit porta placerat nisl.</p>
                </div>
                <div class="seo_s1featuresbar">
                    <div class="seo_s1featuresitem">
                        <img src="{{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg') }}">
                        <p class="seo_s1featurestitle">Guaranteed Fixed Prices</p>
                    </div>
                    <div class="seo_s1featuresitem">
                        <img src="{{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg') }}">
                        <p class="seo_s1featurestitle">Zero Setup Fees</p>
                    </div>
                    <div class="seo_s1featuresitem">
                        <img src="{{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg') }}">
                        <p class="seo_s1featurestitle">No Hidden Costs</p>
                    </div>
                </div>
                <div class="seo_s1btnbar">
                    <a href="#pricing" class="btn custom-btn-img">Go To Packages And Pricing
                        <img src="{{ asset('frontend/Brandflaire/assest/images/seo_s1btnarrow.svg') }}" alt="arrow" class="arrow-img">
                    </a>
                </div>
            </div>
            <div class="seo_c1right w-100 d-none"></div>
        </div>
    </section>
    <!-- Service Section 1 End -->

    <!-- Service Section 2 Start -->
    <section class="service_s2">
        <div class="service_c2">
            <div class="seo_s2redimgbar">
                <img class="seo_s2redimg mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/service_s2particle.svg') }}">
                <img class="seo_s2redimg desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/service_s2particlemob.png') }}">
            </div>
            <img class="seo_s2img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/em_s2img.png') }}">
            <img class="seo_s2img desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/em_s2imgmob.png') }}">
            <div class="servic_c2contentbar">
                <div class="service_s2titlebar">
                    <h2 class="service_s2title">what is Email marketing?</h2>
                    <p class="service_s2subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus et
                        pulvinar feugiat lectus vulputate vitae nulla eros. Dapibus risus amet, in curabitur non morbi
                        purus, mi, sed. Sollicitudin elit ultricies elementum sit diam. Faucibus et, odio vel massa ut
                        nunc. Dictum quisque tincidunt dictumst ut lectus. Mauris dolor turpis ut mauris pharetra
                        elementum sit penatibus habitant. Placerat arcu nibh id commodo mattis</p>
                </div>
                <div class="service_s2titlebar">
                    <h5 class="service_s2titlesmall">Lorem ipsum dolor sit amet consectetur. Nibh amet non volutpat
                        justo vel eget vitae gravida.</h5>
                    <p class="service_s2subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus et
                        pulvinar feugiat lectus vulputate vitae nulla eros. Dapibus risus amet, in curabitur non morbi
                        purus, mi, sed. Sollicitudin elit ultricies elementum sit diam. Faucibus et, odio vel massa ut
                        nunc. Dictum quisque tincidunt dictumst ut.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section 2 End -->

    <!-- Service Section 3 Start -->
    <section class="service_s3">
        <div class="container service_c3">
            <h2 class="service_s3title">What’s Included in our Email marketing Packages?</h2>
            <div class="service_s3cardbar">
                <div class="service_s3card service_s3card1">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/em_s3card1.svg') }}">
                        <p class="service_s3cardtext">Advanced<br>Link Tracking</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card2">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/em_s3card2.svg') }}">
                        <p class="service_s3cardtext">Automated<br>Emails</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card3">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/em_s3card3.svg') }}">
                        <p class="service_s3cardtext">Customizable<br>Templates</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card4">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/em_s3card4.svg') }}">
                        <p class="service_s3cardtext">A/B<br>Testing</p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn service_s3btn">Explore More Features</button>
        </div>
    </section>
    <!-- Service Section 3 End -->

    <!-- Service Section 4 Start -->
    <section class="service_s4">
        <div class="container service_c4">
            <h2 class="service_s4title">The brand Flaire Process</h2>
            <div class="service_s4cardbar">
                <div class="service_s4card">
                    <img class="service_s4card1img img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_s4card1img.png') }}">
                    <div class="service_s4cardtitlebar">
                        <h3 class="service_s4cardtitle">We Discuss</h3>
                        <p class="service_s4subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                            varius eget integer.</p>
                    </div>
                </div>
                <div class="service_s4card">
                    <img class="service_s4card2img img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_s4card2img.png') }}">
                    <div class="service_s4cardtitlebar">
                        <h3 class="service_s4cardtitle">We Get To Work</h3>
                        <p class="service_s4subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                            varius eget integer.</p>
                    </div>
                </div>
                <div class="service_s4card">
                    <img class="service_s4card3img img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_s4card3img.png') }}">
                    <div class="service_s4cardtitlebar">
                        <h3 class="service_s4cardtitle">You See Results</h3>
                        <p class="service_s4subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                            varius eget integer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section 4 End -->

    <!-- Service Section 5 Start -->
    <section class="service_s5">
        <div class="service_c5">
            <div class="service_s5contentbar w-100">
                <div class="service_s2titlebar">
                    <h2 class="service_s2title">Why Email's Are Important</h2>
                    <p class="service_s2subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus et
                        pulvinar feugiat lectus vulputate vitae nulla eros. Dapibus risus amet, in curabitur non morbi
                        purus, mi, sed. Sollicitudin elit ultricies elementum sit diam. Faucibus et, odio vel massa ut
                        nunc. Dictum quisque tincidunt dictumst ut lectus. Mauris dolor turpis ut mauris pharetra
                        elementum sit penatibus habitant. Placerat arcu nibh id commodo mattis</p>
                </div>
                <div class="service_s2titlebar">
                    <h5 class="service_s2titlesmall">Lorem ipsum dolor sit amet consectetur. Nibh amet non volutpat
                        justo vel eget vitae gravida.</h5>
                    <p class="service_s2subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus et
                        pulvinar feugiat lectus vulputate vitae nulla eros. Dapibus risus amet, in curabitur non morbi
                        purus, mi, sed. Sollicitudin elit ultricies elementum sit diam. Faucibus et, odio vel massa ut
                        nunc. Dictum quisque tincidunt dictumst ut.</p>
                </div>
            </div>
            <img class="service_s5img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/em_s5img.png') }}">
            <img class="service_s5img desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/em_s5imgmob.png') }}">
            <div class="service_s5patternbar mobile_none">
                <img class="service_s5pattern" src="{{ asset('frontend/Brandflaire/assest/images/service_s5pattern.svg') }}">
            </div>
        </div>
    </section>
    <!-- Service Section 5 End -->

    <!-- Service Section 6 Start -->
    <section class="service_s6">
        <div class="service_s6topbar">
            <img class="mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/em_s6img.png') }}">
            <img class="desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/em_s6imgmob.png') }}">
            <div class="service_s6titlemain">
                <div class="service_s6titlebar">
                    <h2 class="service_s6title">Choose Your Email marketing Plan</h2>
                    <p class="service_s6subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor donec
                        sit suspendisse euismod imperdiet.</p>
                </div>
            </div>
        </div>
        <div class="service_s6bottombar">
            <div class="service_s6contentbar">
                <div class="service_s6tabbtnbar">
                    <p class="table_smallblack desktop_none">Duration of service:</p>
                    <div class="nav-tabs-container">
                        <ul class="nav nav-pills service_tabbar" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="active service_tabbtn month_1btn" id="pills-one-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab"
                                    aria-controls="pills-one" aria-selected="true">1&nbsp;Month</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="service_tabbtn" id="pills-three-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three"
                                    aria-selected="true">3&nbsp;Months</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="service_tabbtn" id="pills-six-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six"
                                    aria-selected="false">6&nbsp;Months</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="service_tabbtn month_12btn" id="pills-twelve-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-twelve" type="button" role="tab"
                                    aria-controls="pills-twelve" aria-selected="false">12&nbsp;Months</button>
                            </li>
                        </ul>
                    </div>
                    <p class="table_smallred desktop_none">Swipe left and right to view table</p>
                </div>
                <div class="service_s6tabcontentbar">
                    <div class="tab_contentbar tab-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active service_contentmain" id="pills-one" role="tabpanel"
                                aria-labelledby="pills-one-tab">
                                <div class="service_tabcontent table-responsive">
                                    <table class="table table-borderless mb-0 service_table table-striped">
                                        <thead class="service_table_header">
                                            <tr class="align-middle">
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle"></p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Bronze</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Silver</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Gold</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Diamond</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Master</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">free setup</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">audits</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">blogs / news site outreach</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">press release creation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">national / international SEO</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">your keyword / phrase</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">1</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">3</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">5</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">7</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">9</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">keyword analysis</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">link building</p>
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">content optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">monthly blog posting</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">blog optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">setup</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">competitor analysis</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">technical optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade service_contentmain" id="pills-three" role="tabpanel"
                                aria-labelledby="pills-three-tab">
                                <div class="service_tabcontent table-responsive">
                                    <table class="table table-borderless mb-0 service_table table-striped">
                                        <thead class="service_table_header">
                                            <tr class="align-middle">
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle"></p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Bronze</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Silver</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Gold</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Diamond</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Master</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">free setup</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">audits</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">blogs / news site outreach</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">press release creation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">national / international SEO</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">your keyword / phrase</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">1</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">3</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">5</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">7</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">9</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">keyword analysis</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">link building</p>
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">content optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">monthly blog posting</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">blog optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">setup</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">competitor analysis</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">technical optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade service_contentmain" id="pills-six" role="tabpanel"
                                aria-labelledby="pills-six-tab">
                                <table class="table table-borderless mb-0 service_table table-striped">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle"></p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Bronze</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Silver</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Gold</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Diamond</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Master</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">free setup</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">audits</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                            </td>
                                            <td class="text-center">
                                            </td>
                                            <td class="text-center">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">blogs / news site outreach</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">press release creation</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">national / international SEO</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">national</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">national</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">national</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">national</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">national</p>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">your keyword / phrase</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">1</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">3</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">5</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">7</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="service_table_bodytext">9</p>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">keyword analysis</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">link building</p>
                                            </td>
                                            <td class="text-center">
                                            </td>
                                            <td class="text-center">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">content optimisation</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">monthly blog posting</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">blog optimisation</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">setup</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">competitor analysis</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">technical optimisation</p>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                            <td class="text-center">
                                                <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start service_table_bodysecondlast">
                                                <p class="service_table_bodytext">Price</p>
                                            </td>
                                            <td class="text-center service_table_bodysecondlast">
                                                <p class="service_table_bodyprice">£100.00</p>
                                            </td>
                                            <td class="text-center service_table_bodysecondlast">
                                                <p class="service_table_bodyprice">£100.00</p>
                                            </td>
                                            <td class="text-center service_table_bodysecondlast">
                                                <p class="service_table_bodyprice">£100.00</p>
                                            </td>
                                            <td class="text-center service_table_bodysecondlast">
                                                <p class="service_table_bodyprice">£100.00</p>
                                            </td>
                                            <td class="text-center service_table_bodysecondlast">
                                                <p class="service_table_bodyprice">£100.00</p>
                                            </td>
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytext"></p>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade service_contentmain" id="pills-twelve" role="tabpanel"
                                aria-labelledby="pills-twelve-tab">
                                <div class="service_tabcontent table-responsive">
                                    <table class="table table-borderless mb-0 service_table table-striped">
                                        <thead class="service_table_header">
                                            <tr class="align-middle">
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle"></p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Bronze</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Silver</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Gold</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Diamond</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Master</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">free setup</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">audits</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">blogs / news site outreach</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">press release creation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">national / international SEO</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">national</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">your keyword / phrase</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">1</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">3</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">5</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">7</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">9</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">keyword analysis</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">link building</p>
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">content optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">monthly blog posting</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">blog optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">setup</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">competitor analysis</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">technical optimisation</p>
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">£100.00</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section 6 End -->

    <!-- Service Section 7 Start -->
    <section class="service_s7">
        <div class="service_c7">
            <img class="service_s7img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/service_s7img.png') }}">
            <img class="service_s7img desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/service_s7imgmob.png') }}">
            <div class="service_s7contentbar">
                <div class="service_s7formbar">
                    <div class="service_s7titlebar">
                        <h2 class="service_s7title">Need a Little Extra Flaire?</h2>
                        <p class="service_s7subtitle">Pick and choose what features you would like in your very own
                            custom package. Simply upload a document of your brief and our team will get back to you.
                        </p>
                    </div>
                    <form class="service_s7bottom">
                        <div class="service_s7textboxbar">
                            <div class="service_s7textboxline">
                                <input type="text" class="form-control service_s7textbox" id="" placeholder="Full Name">
                                <input type="text" class="form-control service_s7textbox" id=""
                                    placeholder="Email Address">
                            </div>
                            <div class="service_s7textboxline">
                                <div class="w-100">
                                    <input type="text" class="form-control service_s7textbox" id="" placeholder="Phone">
                                </div>
                                <div class="w-100">
                                    <input type="file" name="file" id="file" class="inputfile w-100"
                                        data-multiple-caption="{count} files selected" multiple />
                                    <label class="upload_label w-100" for="file"><span>Upload your brief</span><img
                                            src="{{ asset('frontend/Brandflaire/assest/images/upload_icon.svg') }}"></label>
                                </div>
                            </div>
                        </div>
                        <div class="supported_checkboxline">
                            <div class="form-check supported_check">
                                <input class="form-check-input supported_checkbox" type="checkbox">
                                <div class=" d-flex justify-content-between w-100">
                                    <label class="supported_checkboxtext" for="loginCheck">By ticking this box, you
                                        agree to the <a href="" class="supported_checklink">Terms & Conditions</a> & <a
                                            href="" class="supported_checklink">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/Brandflaire/assest/images/reCAPTCHA.png') }}">
                        <button type="button" class="bnt service_s7btn" data-bs-toggle="modal"
                            data-bs-target="#s7Modal">submit request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section 7 End -->

    <!-- Cart Modal -->
    <div class="modal" id="s6Modal">
        <div class="modal-dialog modal-dialog-centered seomodal_outline">
            <div class="modal-content seomodal_content">
                <!-- Modal body -->
                <div class="modal-body seomodal_body">
                    <div class="s7_modaltitlebar">
                        <h2 class="s7_modaltitle">Added to cart</h2>
                        <p class="s7_modalsubtitle">Your chosen service has successfully been added to the cart.</p>
                    </div>
                    <div class="cart_modalbtnbar">
                        <button type="button" class="bnt service_s7btnwhite">Continue Shopping</button>
                        <button type="button" class="bnt service_s7btn">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Conact Modal -->
    <div class="modal" id="s7Modal">
        <div class="modal-dialog modal-dialog-centered seomodal_outline">
            <div class="modal-content seomodal_content">
                <!-- Modal body -->
                <div class="modal-body seomodal_body">
                    <div class="s7_modaltitlebar">
                        <h2 class="s7_modaltitle">Bespoke package Query Submitted</h2>
                        <p class="s7_modalsubtitle">Please check your email to confirm your submission a custom package.
                            Please allow for XX days for us to respond. In the meantime, why not browse our other
                            services</p>
                    </div>
                    <button type="button" class="bnt service_s7btn">Close</button>
                </div>
            </div>
        </div>
    </div>

{{--New Code End--}}



<script> 
    function field_box_file() {
       console.log('me');
       document.getElementById('document').click();
       }
       $("#document").on("change", function(e){
       document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
       })
</script>

<script>
   document.querySelectorAll('.service_tabbtn').forEach((button, index) => {
   button.addEventListener('click', function () {
       document.querySelector('.progress-arrow').style.transform = `translateX(${index * 90}px)`;
   });
});
</script>

<script>
    $(document).ready(function () {
        const a = document.querySelectorAll(".service_table tbody tr td:nth-child(2)");
        const c = document.querySelectorAll(".service_table tbody tr td:last-child");
        const d = document.querySelectorAll(".service_table tbody tr:first-child td");
        const e = document.querySelectorAll(".service_table tbody tr:last-child td");
        const f = document.querySelectorAll(".service_table tbody tr td:last-child");
        a.forEach(x => {
            const b = document.createElement("div");
            b.className = "white_box";
            x.appendChild(b);
        })
        c.forEach(x => {
            const b = document.createElement("div");
            b.className = "white_box2";
            x.appendChild(b);
        })
        d.forEach(x => {
            const b = document.createElement("div");
            b.className = "image_box";
            x.appendChild(b);
        })
        e.forEach(x => {
            const b = document.createElement("div");
            b.className = "image_box2";
            x.appendChild(b);
        })
        f.forEach(x => {
            const b = document.createElement("div");
            b.className = "image_box3";
            const height = x.offsetHeight;
            b.style.height = height + "px";

            
            x.appendChild(b);
        })

    }
    )

</script>

<script>
    function check_agree(form) {
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




