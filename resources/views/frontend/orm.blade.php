@extends('frontend.layouts.app')

@section('content')

    <!-- Service Section 1 Start -->
    <section class="service_s1 orm_s1">
        <div class="container service_c1">
            <div class="seo_c1left w-100">
                <div class="seo_c1titlebar">
                    <h1 class="seo_s1title">online reputation management (ORM)</h1>
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
            <img class="seo_s2img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/orm_s2img.png') }}">
            <img class="seo_s2img desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/orm_s2imgmob.png') }}">
            <div class="servic_c2contentbar">
                <div class="service_s2titlebar">
                    <h2 class="service_s2title">what is ORM?</h2>
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
            <h2 class="service_s3title">What’s Included in our ORM Packages?</h2>
            <div class="service_s3cardbar">
                <div class="service_s3card service_s3card1">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/orm_s3card1.svg') }}">
                        <p class="service_s3cardtext">Article<br>Writing</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card2">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/orm_s3card2.svg') }}">
                        <p class="service_s3cardtext">Email<br>Creation</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card3">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/orm_s3card3.svg') }}">
                        <p class="service_s3cardtext">Monthly<br>Reports</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card4">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src="{{ asset('frontend/Brandflaire/assest/images/orm_s3card4.svg') }}">
                        <p class="service_s3cardtext">Blog Website<br>Profiles</p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn service_s3btn" onclick="location.href='{{route('aboutus') }}'">Explore More Features</button>
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
                    <h2 class="service_s2title">why ORM is important</h2>
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
            <img class="service_s5img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/orm_s5img.png') }}">
            <img class="service_s5img desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/orm_s5imgmob.png') }}">
            <div class="service_s5patternbar mobile_none">
                <img class="service_s5pattern" src="{{ asset('frontend/Brandflaire/assest/images/service_s5pattern.svg') }}">
            </div>
        </div>
    </section>
    <!-- Service Section 5 End -->

    <!-- Service Section 6 Start -->
    <section class="service_s6" id="pricing">
        <div class="service_s6topbar">
            <img class="mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/orm_s6img.png') }}">
            <img class="desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/orm_s6imgmob.png') }}">
            <div class="service_s6titlemain">
                <div class="service_s6titlebar">
                    <h2 class="service_s6title">Choose Your ORM Plan</h2>
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
                                    aria-selected="false">3&nbsp;Months</button>
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
                            {{-- 1st Month --}}
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
                                                {{-- <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Diamond</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Master</p>
                                                </th> --}}
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Phrases Protected And Monitored</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '1' : ($key == 1 ? '3' : '7') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Web Search Position</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? 'Top 150' : 'Top 250' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Article Writing</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 1 ? '3 Article 15x' : '1 Article 15x' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Number Of Directories Appeared On</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">100</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Social Media Account Creation (Instagram, Twitter, TikTok, FB)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '2' : ($key == 1 ? '3' : '4') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Blog Website Profiles (Wordpress, Blogspot, Tumbler Etc)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key < 2 ? '1' : '3' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Blog Posts</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '3' : ($key == 1 ? '5' : '9') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">RSS (Straightforward Syndication)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '10' : ($key == 1 ? '15' : '20') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Business Listings & Reviews (TrustPilot, ResellerRatings)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Monthly Accomplishment Report</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Email Creation</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key == 0)
                                                            {{-- <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Telephone Setup</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key == 0)
                                                            {{-- <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            
                                                <tr class="align-middle">
                                                    <td class="text-start service_table_bodysecondlast">
                                                        <p class="service_table_bodytext">Price</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(254.4), 2) }}</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(486.03), 2) }}</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(684.67), 2) }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytext"></p>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- 3rd Month --}}
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
                                                {{-- <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Diamond</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Master</p>
                                                </th> --}}
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Phrases Protected And Monitored</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '1' : ($key == 1 ? '3' : '7') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Web Search Position</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? 'Top 150' : 'Top 250' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Article Writing</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 1 ? '3 Article 15x' : '1 Article 15x' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Number Of Directories Appeared On</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">100</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Social Media Account Creation (Instagram, Twitter, TikTok, FB)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '2' : ($key == 1 ? '3' : '4') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Blog Website Profiles (Wordpress, Blogspot, Tumbler Etc)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key < 2 ? '1' : '3' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Blog Posts</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '3' : ($key == 1 ? '5' : '9') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">RSS (Straightforward Syndication)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '10' : ($key == 1 ? '15' : '20') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Business Listings & Reviews (TrustPilot, ResellerRatings)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Monthly Accomplishment Report</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Email Creation</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key == 0)
                                                            {{-- <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Telephone Setup</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key == 0)
                                                            {{-- <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            
                                                <tr class="align-middle">
                                                    <td class="text-start service_table_bodysecondlast">
                                                        <p class="service_table_bodytext">Price</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(749.06), 2) }}</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(1443.94), 2) }}</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(2039.89), 2) }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytext"></p>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- 6th Month --}}
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
                                            {{-- <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Diamond</p>
                                            </th>
                                            <th scope="col" class="text-center">
                                                <p class="service_tabletitle">Master</p>
                                            </th> --}}
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Phrases Protected And Monitored</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">{{ $key == 0 ? '1' : ($key == 1 ? '3' : '7') }}</p>
                                                </td>
                                            @endforeach
                                        </tr>

                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Web Search Position</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">{{ $key == 0 ? 'Top 150' : 'Top 250' }}</p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td class="text-start">
                                                <p class="service_table_bodytext">Article Writing</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">{{ $key == 1 ? '3 Article 15x' : '1 Article 15x' }}</p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Number Of Directories Appeared On</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">100</p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Account Creation (Instagram, Twitter, TikTok, FB)</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">{{ $key == 0 ? '2' : ($key == 1 ? '3' : '4') }}</p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Blog Website Profiles (Wordpress, Blogspot, Tumbler Etc)</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">{{ $key < 2 ? '1' : '3' }}</p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Blog Posts</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">{{ $key == 0 ? '3' : ($key == 1 ? '5' : '9') }}</p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">RSS (Straightforward Syndication)</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_bodytext">{{ $key == 0 ? '10' : ($key == 1 ? '15' : '20') }}</p>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Business Listings & Reviews (TrustPilot, ResellerRatings)</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Accomplishment Report</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Email Creation</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    @if ($key == 0)
                                                        {{-- <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                    @else
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Telephone Setup</p>
                                            </td>
                                            @foreach ($ormProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    @if ($key == 0)
                                                        {{-- <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                    @else
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(1483.99), 2) }}</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(2873.75), 2) }}</p>
                                                </td>
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(4065.66), 2) }}</p>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            {{-- 12th Month --}}
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
                                                {{-- <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Diamond</p>
                                                </th>
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">Master</p>
                                                </th> --}}
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Phrases Protected And Monitored</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '1' : ($key == 1 ? '3' : '7') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>

                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Web Search Position</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? 'Top 150' : 'Top 250' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Article Writing</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 1 ? '3 Article 15x' : '1 Article 15x' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Number Of Directories Appeared On</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">100</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Social Media Account Creation (Instagram, Twitter, TikTok, FB)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '2' : ($key == 1 ? '3' : '4') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Blog Website Profiles (Wordpress, Blogspot, Tumbler Etc)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key < 2 ? '1' : '3' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Blog Posts</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '3' : ($key == 1 ? '5' : '9') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">RSS (Straightforward Syndication)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytext">{{ $key == 0 ? '10' : ($key == 1 ? '15' : '20') }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Business Listings & Reviews (TrustPilot, ResellerRatings)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Monthly Accomplishment Report</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Email Creation</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Online Chat Profiles Set Up (Yahoo, Skype, Teams)</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key == 0)
                                                            {{-- <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Telephone Setup</p>
                                                </td>
                                                @foreach ($ormProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        @if ($key == 0)
                                                            {{-- <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_wrong.svg') }}"> --}}
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg') }}">
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            
                                                <tr class="align-middle">
                                                    <td class="text-start service_table_bodysecondlast">
                                                        <p class="service_table_bodytext">Price</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(2953.85), 2) }}</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(5733.38), 2) }}</p>
                                                    </td>
                                                    <td class="text-center service_table_bodysecondlast">
                                                        <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price(8117.18), 2) }}</p>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p class="service_bodytext"></p>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
                                                    </td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#s6Modal">Add to cart</button>
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
            <img class="service_s7img mobile_none" src="{{ asset('frontend/Brandflaire/assest/images/service_s7img.png')  }}">
            <img class="service_s7img desktop_none" src="{{ asset('frontend/Brandflaire/assest/images/service_s7imgmob.png')  }}">
            <div class="service_s7contentbar">
                <div class="service_s7formbar">
                    <div class="service_s7titlebar">
                        <h2 class="service_s7title">Need a Little Extra Flaire?</h2>
                        <p class="service_s7subtitle">Pick and choose what features you would like in your very own
                            custom package. Simply upload a document of your brief and our team will get back to you.
                        </p>
                    </div>
                    <form class="service_s7bottom"id="requestform1" action="{{ route('contactus.store') }}" method="post"
                        enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                        @csrf
                        <input type="hidden" name="from_page" value="service">
                        <div class="service_s7textboxbar">
                            <div class="service_s7textboxline">
                                <input type="text" class="form-control service_s7textbox" id="fullname" placeholder="Full Name" required>
                                <input type="email" class="form-control service_s7textbox" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="service_s7textboxline">
                                <div class="w-100">
                                    <input type="tel" class="form-control service_s7textbox" id="phone" name="phone" placeholder="Phone" required>
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
                                <textarea class="form-control service_s7textbox" name="message" id="message" placeholder="Additional Information" required style="height:auto;"></textarea>
                        </div>
                        <div class="supported_checkboxline">
                            <div class="form-check supported_check">
                                <input class="form-check-input supported_checkbox" type="checkbox" id="terms">
                                <div class=" d-flex justify-content-between w-100">
                                    <label class="supported_checkboxtext" for="loginCheck">By ticking this box, you
                                        agree to the <a href="{{ route('termsandconditions') }}" class="supported_checklink">Terms & Conditions</a> & <a
                                            href="{{ route('privacypolicy') }}" class="supported_checklink">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--<img src="{{ asset('frontend/Brandflaire/assest/images/reCAPTCHA.png')  }}">-->
                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                        <div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        <button type="submit" class="bnt service_s7btn" >submit request</button>
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

        
    <script>
            function check_agree1(form) {
                var response = grecaptcha.getResponse();
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

                                            