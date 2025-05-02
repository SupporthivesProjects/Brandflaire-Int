@extends('frontend.layouts.app')
@section('content')
    {{-- NEW CODE STARTS HERE --}}
    <section class="service_s1 social_s1">
        <div class="container service_c1">
            <div class="seo_c1left w-100">
                <div class="seo_c1titlebar">
                    <h1 class="seo_s1title">Social media<br>Management</h1>
                    <p class="seo_s1subtitle">Lorem ipsum dolor sit amet consectetur. Nisl vitae varius tempor
                        vestibulum at elit porta placerat nisl.</p>
                </div>
                <div class="seo_s1featuresbar">
                    <div class="seo_s1featuresitem">
                        <img src="{{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg')}}">
                        <p class="seo_s1featurestitle">Guaranteed Fixed Prices</p>
                    </div>
                    <div class="seo_s1featuresitem">
                        <img src="{{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg')}}">
                        <p class="seo_s1featurestitle">Zero Setup Fees</p>
                    </div>
                    <div class="seo_s1featuresitem">
                        <img src="{{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg')}}">
                        <p class="seo_s1featurestitle">No Hidden Costs</p>
                    </div>
                </div>
                <div class="seo_s1btnbar">
                    <a href="#pricing" class="btn custom-btn-img">Go To Packages And Pricing
                        <img src="{{ asset('frontend/Brandflaire/assest/images/seo_s1btnarrow.svg')}}" alt="arrow"
                            class="arrow-img">
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
                <img class="seo_s2redimg mobile_none"
                    src="{{ asset('frontend/Brandflaire/assest/images/service_s2particle.svg')}}">
                <img class="seo_s2redimg desktop_none"
                    src="{{ asset('frontend/Brandflaire/assest/images/service_s2particlemob.png')}}">
            </div>
            <img class="seo_s2img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/social_s2img.png')}}">
            <img class="seo_s2img desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/social_s2imgmob.png')}}">
            <div class="servic_c2contentbar">
                <div class="service_s2titlebar">
                    <h2 class="service_s2title">what is Social media?</h2>
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
            <h2 class="service_s3title">What’s Included in our Social media Packages?</h2>
            <div class="service_s3cardbar">
                <div class="service_s3card service_s3card1">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon"
                            src="{{ asset('frontend/Brandflaire/assest/images/social_s3card1.svg')}}">
                        <p class="service_s3cardtext">Monthly<br>Reports</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card2">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon"
                            src="{{ asset('frontend/Brandflaire/assest/images/social_s3card2.svg')}}">
                        <p class="service_s3cardtext">Weekly<br>Posts</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card3">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon"
                            src="{{ asset('frontend/Brandflaire/assest/images/social_s3card3.svg')}}">
                        <p class="service_s3cardtext">Data<br>Analytics</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card4">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon"
                            src="{{ asset('frontend/Brandflaire/assest/images/social_s3card4.svg')}}">
                        <p class="service_s3cardtext">Interaction &<br>Responses</p>
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
                    <img class="service_s4card1img img-fluid"
                        src="{{ asset('frontend/Brandflaire/assest/images/service_s4card1img.png')}}">
                    <div class="service_s4cardtitlebar">
                        <h3 class="service_s4cardtitle">We Discuss</h3>
                        <p class="service_s4subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                            varius eget integer.</p>
                    </div>
                </div>
                <div class="service_s4card">
                    <img class="service_s4card2img img-fluid"
                        src="{{ asset('frontend/Brandflaire/assest/images/service_s4card2img.png')}}">
                    <div class="service_s4cardtitlebar">
                        <h3 class="service_s4cardtitle">We Get To Work</h3>
                        <p class="service_s4subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                            varius eget integer.</p>
                    </div>
                </div>
                <div class="service_s4card">
                    <img class="service_s4card3img img-fluid"
                        src="{{ asset('frontend/Brandflaire/assest/images/service_s4card3img.png')}}">
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
                    <h2 class="service_s2title">why Socials Are Important</h2>
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
            <img class="service_s5img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/social_s5img.png')}}">
            <img class="service_s5img desktop_none"
                src="{{ asset('frontend/Brandflaire/assest/images/social_s5imgmob.png')}}">
            <div class="service_s5patternbar mobile_none">
                <img class="service_s5pattern" src="{{ asset('frontend/Brandflaire/assest/images/service_s5pattern.svg')}}">
            </div>
        </div>
    </section>
    <!-- Service Section 5 End -->

    <!-- Service Section 6 Start -->
    <section class="service_s6">
        <div class="service_s6topbar">
            <img class="mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/social_s6img.png')}}">
            <img class="desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/social_s6imgmob.png')}}">
            <div class="service_s6titlemain">
                <div class="service_s6titlebar">
                    <h2 class="service_s6title">Choose Your SEO Plan</h2>
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
                                <button class="active service_tabbtn month_1btn" id="pills-one-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one"
                                    aria-selected="true">1&nbsp;Month</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="service_tabbtn" id="pills-three-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three"
                                    aria-selected="false">3&nbsp;Months</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="service_tabbtn" id="pills-six-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six"
                                    aria-selected="false">6&nbsp;Months</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="service_tabbtn month_12btn" id="pills-twelve-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-twelve" type="button" role="tab" aria-controls="pills-twelve"
                                    aria-selected="false">12&nbsp;Months</button>
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
                                                    <p class="service_tabletitle">Basic</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Standard</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Advanced</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Platinum</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Ad Spend Included</p>
                                                </td>

                                                @foreach ($socialProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 2)
                                                            <img class="img-fluid" src="">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Social Media Profile/Channels</p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">
                                                            @if ($key == 0) 1
                                                            @elseif ($key == 1) 2
                                                            @elseif ($key == 2) 2
                                                                @else 3
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Posts Per Week</p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">
                                                            @if ($key < 2) {{ $key == 0 ? '2' : '3' }}
                                                                @else 5
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Written & Designed Posts</p>
                                                </td>

                                                @foreach ($socialProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Interaction & Responses</p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Monthly Statistics/Analytics</p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 2)
                                                            <img class="img-fluid">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                        @endif
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Support, 7 days a week</p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 3)
                                                            <img class="img-fluid">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                        @endif
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">No Contract - Cancel Anytime</p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $product)
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">
                                                            {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                        </p>
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                @foreach ($socialProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn"
                                                            onclick="addToCart1Step({{ $product->id }})">Add to
                                                            cart</button>
                                                    </td>
                                                @endforeach

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
                                                    <p class="service_tabletitle">Basic</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Standard</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Advanced</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Platinum</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Ad Spend Included</p>
                                                </td>

                                                @foreach ($socialProducts['3_months'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 2)
                                                            <img class="img-fluid" src="">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Social Media Profile/Channels</p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">
                                                            @if ($key == 0) 1
                                                            @elseif ($key == 1) 2
                                                            @elseif ($key == 2) 2
                                                                @else 3
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Posts Per Week</p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">
                                                            @if ($key < 2) {{ $key == 0 ? '2' : '3' }}
                                                                @else 5
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Written & Designed Posts</p>
                                                </td>

                                                @foreach ($socialProducts['3_months'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Interaction & Responses</p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Monthly Statistics/Analytics</p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 2)
                                                            <img class="img-fluid">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                        @endif
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Support, 7 days a week</p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 3)
                                                            <img class="img-fluid">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                        @endif
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">No Contract - Cancel Anytime</p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $product)
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">
                                                            {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                        </p>
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                @foreach ($socialProducts['3_months'] as $product)
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn"
                                                            onclick="addToCart1Step({{ $product->id }})">Add to
                                                            cart</button>
                                                    </td>
                                                @endforeach

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
                                                <p class="service_tabletitle">Basic</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Standard</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Advanced</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Platinum</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Ad Spend Included</p>
                                            </td>

                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                                <td class="text-center">
                                                    @if ($key < 2)
                                                        <img class="img-fluid" src="">
                                                    @else
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Social Media Profile/Channels</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">
                                                        @if ($key == 0) 1
                                                        @elseif ($key == 1) 2
                                                        @elseif ($key == 2) 2
                                                            @else 3
                                                        @endif
                                                    </p>
                                                </td>
                                            @endforeach
                                        </tr>

                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">
                                                        @if ($key < 2) {{ $key == 0 ? '2' : '3' }}
                                                            @else 5
                                                        @endif
                                                    </p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Written & Designed Posts</p>
                                            </td>

                                            @foreach ($socialProducts['6_months'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                                <td class="text-center">
                                                    @if ($key < 2)
                                                        <img class="img-fluid">
                                                    @else
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    @endif
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                                <td class="text-center">
                                                    @if ($key < 3)
                                                        <img class="img-fluid">
                                                    @else
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    @endif
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start service_table_bodysecondlast">
                                                <p class="service_table_bodytext">Price</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                </td>
                                            @endforeach

                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytext"></p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})">Add to
                                                        cart</button>
                                                </td>
                                            @endforeach

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
                                                    <p class="service_tabletitle">Basic</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Standard</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Advanced</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Platinum</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Ad Spend Included</p>
                                                </td>

                                                @foreach ($socialProducts['12_months'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 2)
                                                            <img class="img-fluid" src="">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Social Media Profile/Channels</p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">
                                                            @if ($key == 0) 1
                                                            @elseif ($key == 1) 2
                                                            @elseif ($key == 2) 2
                                                                @else 3
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Posts Per Week</p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">
                                                            @if ($key < 2) {{ $key == 0 ? '2' : '3' }}
                                                                @else 5
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Written & Designed Posts</p>
                                                </td>

                                                @foreach ($socialProducts['12_months'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Interaction & Responses</p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Monthly Statistics/Analytics</p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 2)
                                                            <img class="img-fluid">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                        @endif
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Support, 7 days a week</p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key < 3)
                                                            <img class="img-fluid">
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                        @endif
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">No Contract - Cancel Anytime</p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $product)
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">
                                                            {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                        </p>
                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                @foreach ($socialProducts['12_months'] as $product)
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn"
                                                            onclick="addToCart1Step({{ $product->id }})">Add to
                                                            cart</button>
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
        </div>
    </section>
    <!-- Service Section 6 End -->

    <!-- Service Section 7 Start -->

    <section class="service_s7">
        <div class="service_c7">
            <img class="service_s7img mobile_none"
                src="{{ asset('frontend/Brandflaire/assest/images/service_s7img.png')  }}">
            <img class="service_s7img desktop_none"
                src="{{ asset('frontend/Brandflaire/assest/images/service_s7imgmob.png')  }}">
            <div class="service_s7contentbar">
                <div class="service_s7formbar">
                    <div class="service_s7titlebar">
                        <h2 class="service_s7title">Need a Little Extra Flaire?</h2>
                        <p class="service_s7subtitle">Pick and choose what features you would like in your very own
                            custom package. Simply upload a document of your brief and our team will get back to you.
                        </p>
                    </div>
                    <form class="service_s7bottom" id="requestform1" action="{{ route('contactus.store') }}" method="post"
                        enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                        @csrf
                        <input type="hidden" name="from_page" value="service">
                        <div class="service_s7textboxbar">
                            <div class="service_s7textboxline">
                                <input type="text" class="form-control service_s7textbox" id="fullname"
                                    placeholder="Full Name" required>
                                <input type="email" class="form-control service_s7textbox" id="email"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="service_s7textboxline">
                                <div class="w-100">
                                    <input type="tel" class="form-control service_s7textbox" id="phone" name="phone"
                                        placeholder="Phone" required>
                                </div>
                                <div class="w-100">
                                    <input type="file" name="document" id="document" class="inputfile w-100"
                                        data-multiple-caption="{count} files selected" multiple />
                                    <label class="upload_label w-100" for="document"><span>Upload your brief</span><img
                                            src="{{ asset('frontend/Brandflaire/assest/images/upload_icon.svg')  }}"></label>
                                </div>
                            </div>
                        </div>
                        <div class="w-100">
                            <textarea class="form-control service_s7textbox" name="message" id="message"
                                placeholder="Additional Information" required style="height:auto;"></textarea>
                        </div>
                        <div class="supported_checkboxline">
                            <div class="form-check supported_check">
                                <input class="form-check-input supported_checkbox" type="checkbox" id="terms">
                                <div class=" d-flex justify-content-between w-100">
                                    <label class="supported_checkboxtext" for="loginCheck">By ticking this box, you
                                        agree to the <a href="{{ route('termsandconditions') }}"
                                            class="supported_checklink">Terms & Conditions</a> & <a
                                            href="{{ route('privacypolicy') }}" class="supported_checklink">Privacy
                                            Policy.</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                        <div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        <button type="submit" class="bnt service_s7btn">submit request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Service Section 7 End -->


@endsection

@section('scripts')
    <script>
        function check_agree1(form) {
            if (!form.fullname.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Fullname'
                });
                return false;
            }

            if (!form.email.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Email'
                });
                return false;
            }

            if (!form.phone.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Phone'
                });
                return false;
            }

            if (!form.document.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Upload a Document'
                });
                return false;
            }

            if (!form.message.value) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Enter Additional Information'
                });
                return false;
            }

            if (!form.terms.checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please Accept Terms & Conditions'
                });
                return false;
            }

            return true;
        }

    </script>
    <script>
        const inputs = document.querySelectorAll('.inputfile');

        for (let input of inputs) {
            const label = input.nextElementSibling;
            const labelVal = label.innerHTML;

            input.addEventListener('change', (e) => {
                let fileName = '';
                if (input.files && input.files.length > 1) {
                    fileName = (input.getAttribute('data-multiple-caption') || '').replace('{count}', input
                        .files.length);
                } else {
                    fileName = e.target.value.split('\\').pop();
                }

                if (fileName) {
                    label.querySelector('span').innerHTML = fileName;
                } else {
                    label.innerHTML = labelVal;
                }
            })
        }
    </script>
@endsection