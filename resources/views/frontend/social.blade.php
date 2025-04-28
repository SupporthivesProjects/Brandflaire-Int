@extends('frontend.layouts.app')

<style>
    .ser_s1_inner {
        background: url("{{ asset ('frontend/PushDynamics/image/sm_s1.png') }}");
        background-size: cover;
        background-position: right top;
        background-repeat: no-repeat;
    }

    @media only screen and (max-width: 600px) {
        .ser_s1_inner {
            background: url("{{ asset ('frontend/PushDynamics/image/sm_s1_mobo.png') }}");
            background-size: cover;
            background-position: right top;
            background-repeat: no-repeat;
        }
    }

</style>
@section('content')
{{-- NEW CODE STARTS HERE --}}
{{-- <section class="service_section">
        <div class="ser_s1">
            <div class="ser_s1_inner">
                <div class="ser_s1_content">
                    <h6 class="ser_s1_pre_title">PACKAGE AND PRICING</h6>
                    <h1 class="ser_s1_title" data-aos="fade-up">Social Media</h1>
                    <p class="ser_s1_subtitle" data-aos="fade-up">
                        We build social media campaigns to grow your business and engage your followers. 
                    </p>
                    <button class="btn btn_global_m mo_mx_auto" onclick="window.location='#target-element'">View Pricing</button>
                </div>
            </div>
        </div>
        <div class="ser_s2">
            <div class="container">
                <div class="ser_s2_frame">
                    <div class="ser_s2_left">
                        <h6 class="ser_s2_pre_title" data-aos="fade-up">What is Social Media?</h6>
                        <h1 class="ser_s2_title" data-aos="fade-up">
                            The key to brand awareness
                        </h1>
                        <div class="ser_s2_bar"></div>
                        <p class="ser_s2_subtitle" data-aos="fade-up">
                            Are you a business looking to expand and market your services to your audiences on social media to build brand awareness? Push Dynamics builds social media campaigns for businesses to help grow and engage your followers. We work with you to identify your social media goals, analyse your competitors, and evaluate your customer's online behaviour to make bespoke social media strategies. 
                        </p>
                    </div>
                    <div class="ser_s2_right">
                        <h6 class="ser_s2_pre_title" data-aos="fade-up">Why is Social Media Important?</h6>
                        <h1 class="ser_s2_title">  
                            Bespoke social strategies 
                        </h1>
                        <div class="ser_s2_bar"></div>
                        <p class="ser_s2_subtitle" data-aos="fade-up">
                            Using advanced data and analytics, we will develop bespoke social media brand management strategies alongside paid influencer campaigns which will be tailored to your specific audience. Our dynamic and data-driven social media marketing campaigns will deliver remarkable results for your business, and turn your clients into brand advocates. Get in touch with Push Dynamics to see how our social media marketing can bolster your brand engagement. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="background_socio">
            <div class="sec2_socio">
                <div>
                    <h1 class="title_tt" data-aos="fade-up">How Does it work ?</h1>
                    <p class="title_pp" data-aos="fade-up">At Push Dynamics we take time to get to know you as a business to understand your individual objectives and costs, from which we develop bespoke digital marketing packages. 
                    </p>
                </div>

                <div class="container custom_padding">
                    <div class="socio_crd_div">
                        <div class="socio_crd">
                            <img src="{{ asset('frontend/PushDynamics/image/crd_image.png') }}" alt=""
class="img-fluid crd_image">
<div class="crd_content">
    <h1 class="crd_tt">CREATION</h1>
    <p class="crd_pp" data-aos="fade-up">We specialise in creating winning campaigns for businesses of all sizes.
    </p>
</div>
</div>

<div class="socio_crd">
    <img src="{{ asset('frontend/PushDynamics/image/crd_image2.png') }}" alt="" class="img-fluid crd_image">
    <div class="crd_content">
        <h1 class="crd_tt">Communication
        </h1>
        <p class="crd_pp" data-aos="fade-up">Communication and updating our clients is key to all our campaigns.
        </p>
    </div>
</div>

<div class="socio_crd">
    <img src="{{ asset('frontend/PushDynamics/image/crd_image3.png') }}" alt="" class="img-fluid crd_image">
    <div class="crd_content">
        <h1 class="crd_tt">Development
        </h1>
        <p class="crd_pp" data-aos="fade-up">We take time to develop tailor made solutions which will work for you.
        </p>
    </div>
</div>

<div class="socio_crd">
    <img src="{{ asset('frontend/PushDynamics/image/crd_image4.png') }}" alt="" class="img-fluid crd_image">
    <div class="crd_content">
        <h1 class="crd_tt">Results
        </h1>
        <p class="crd_pp" data-aos="fade-up">When you work with Push Dynamics, the results will speak for themselves.
        </p>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="background_socio3">
    <div class="socio_sec3">
        <div class="container custom_padding2">
            <div class="main_sec3_socio">
                <div class="first_div_sec3">
                    <div class="leftsec3">
                        <p class="left_socio_pp" data-aos="fade-up">Included Features</p>
                        <h1 class="left_socio_tt" data-aos="fade-up">How social media helps you succeed
                        </h1>
                    </div>
                    <p class="socio_sec3_pp" data-aos="fade-up">
                        In addition to increasing overall brand awareness, an added bonus of our social media campaigns
                        is that they simultaneously positively influence your SEO and other digital marketing efforts,
                        creating increased leads and revenue streams for your business.
                    </p>
                </div>

                <div class="second_div_sec3">
                    <div class="green_crd">
                        <img src="{{ asset('frontend/PushDynamics/image/greencrd_icon.svg') }}" alt=""
                            class="img-fluid">
                        <div>
                            <h1 class="green_crd_tt" data-aos="fade-up">Monthly Statistics</h1>
                            <p class="green_crd_pp" data-aos="fade-up">We provide monthly statistics to track your
                                social campaigns.
                            </p>
                        </div>
                    </div>
                    <div class="green_crd">
                        <img src="{{ asset('frontend/PushDynamics/image/greencrd_icon2.svg') }}" alt=""
                            class="img-fluid">
                        <div>
                            <h1 class="green_crd_tt" data-aos="fade-up">Weekly Posts</h1>
                            <p class="green_crd_pp" data-aos="fade-up">Weekly posts will keep your audiences updated
                                with your brand.
                            </p>
                        </div>
                    </div>
                    <div class="green_crd">
                        <img src="{{ asset('frontend/PushDynamics/image/greencrd_icon3.svg') }}" alt=""
                            class="img-fluid">
                        <div>
                            <h1 class="green_crd_tt" data-aos="fade-up">Included Ad Spend</h1>
                            <p class="green_crd_pp" data-aos="fade-up">Ad spend for influencer campaigns is included in
                                all packages.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ser_s5">
    <div class="container">
        <div class="ser_s5_frame">
            <div class="ser_s5_left">
                <img src="{{ asset('frontend/PushDynamics/image/sm_s5.png') }}" alt=""
                    class="img-fluid ser_s5_left_mobo">
            </div>
            <div class="ser_s5_right">
                <div class="ser_s5_content">
                    <div class="for_pad">
                        <h5 class="ser_s5_pre_title">Why Push Dynamics?</h5>
                        <h1 class="ser_s5_title" data-aos="fade-up">
                            Social marketing with flair
                        </h1>
                        <p class="ser_s5_subtitle" data-aos="fade-up">
                            Social media marketing can provide quick campaign results. However, we always recommend
                            exploring additional tactics to complement your social media strategies for maximum results.
                        </p>
                    </div>
                    <div class="ser_s5_inner_content">
                        <div class="ser_s5_inner_row">
                            <img src="{{ asset('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid"
                                style="height: 24px;width: 24px;">
                            <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Overall increased brand
                                awareness
                            </p>
                        </div>
                        <div class="ser_s5_inner_row">
                            <img src="{{ asset('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid"
                                style="height: 24px;width: 24px;">
                            <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Instant visibility boost for
                                your business
                            </p>
                        </div>
                        <div class="ser_s5_inner_row">
                            <img src="{{ asset('frontend/PushDynamics/image/green_tic.svg') }}" alt="" class="img-fluid"
                                style="height: 24px;width: 24px;">
                            <p class="ser_s5_inner_content_subtitle" data-aos="fade-up">Gain trust from your customer
                                base
                            </p>
                        </div>
                    </div>
                    <button class="btn btn_global_m" onclick="location.href='{{route('aboutus') }}'">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blk" id="target-element">
    <div class="social_s6">
        <div class="social_c6 s_c6 container">
            <div class="social_s6titlebar">
                <h2 class="social_s6title">Simple, transparent Pricing</h2>
                <p class="social_s6subtitle">No contracts. No Surprise fees.</p>
            </div>
            <div class="social_s6line mobile_none"></div>
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
                        <div class="tab-pane fade show active service_contentmain" id="pills-one" role="tabpanel"
                            aria-labelledby="pills-one-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})"
                                                        style="cursor: pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
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
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})"
                                                        style="cursor: pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade service_contentmain" id="pills-six" role="tabpanel"
                            aria-labelledby="pills-six-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})"
                                                        style="cursor: pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade service_contentmain" id="pills-twelve" role="tabpanel"
                            aria-labelledby="pills-twelve-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})"
                                                        style="cursor: pointer;">Add To Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/PushDynamics/image/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/PushDynamics/image/service_cross.svg') }}">
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
</div>
<div class="for_white">
    <div class="ser_s7">
        <div class="container">
            <h1 class="ser_s7_title" data-aos="fade-up">Need a custom package?</h1>
            <p class="ser_s7_subtitle" data-aos="fade-up">
                Pick and choose what features you would like in your very own custom package <br>
                Simply upload a document of your brief and our team will get back to you.
            </p>

            <form class="ser_s7_content_form" id="requestform1" action="{{ route('contactus.store') }}" method="post"
                enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                @csrf
                <input type="hidden" name="from_page" form="requestform1" value="service">
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Username</p>
                    <input type="text" class="form-control input_global_m" id="fullname" name="fullname"
                        form="requestform1" required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Email</p>
                    <input type="email" class="form-control input_global_m" id="email" name="email" form="requestform1"
                        required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Phone</p>
                    <input type="tel" class="form-control input_global_m" id="phone" name="phone" form="requestform1"
                        required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Upload Brief</p>
                    <input type="file" class="form-control input_global_m" id="document" name="document"
                        form="requestform1" required>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">Additional Information</p>
                    <textarea class="form-control textarea_global_m" id="message" name="message" form="requestform1"
                        required></textarea>
                </div>
                <div class="ser_s7_form_elememt">
                    <p class="ser_s7_form_label">&nbsp;</p>
                    <div class="c-checkbox">
                        <div class="c-div">
                            <label class="d-flex justify-content-center justify-content-lg-start">
                                <input type="checkbox" id="terms" name="terms" form="requestform1">
                                <label for="terms"></label>
                            </label>
                        </div>
                        <div class="c-text">
                            <p class="login_strong">By ticking this box, you agree to the <a
                                    href="{{ route('termsandconditions') }}">Terms & Conditions</a> & <a
                                    href="{{ route('privacypolicy') }}">Privacy Policy.</a></p>
                        </div>
                    </div>
                    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                    <div class="h-captcha" form="requestform1" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                </div>
            </form>
            <button class="btn btn_global_m" type="submit" form="requestform1">Submit Request</button>
        </div>
    </div>
</div>
</section> --}}

{{-- new code starts here --}}
<section>

    <section class="sec1_s">
        <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay="" style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/1.mp4') }}" type="video/mp4">
        </video>
        <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay="" style="object-fit: cover;">
            <source src="{{ asset('frontend/BrandSparkz/assets/img/1_mob.mp4') }}" type="video/mp4">
        </video>

        <div class="sec1_video">
            <h1 class="main_tt">
                Social Media
            </h1>
            <p class="main_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictum nunc eget molestie
                duis nunc iaculis morbi vestibulum. Massa volutpat nisi, ultrices aenean pellentesque ornare.</p>
            <button class="btn btn_global" onclick="scrollToDiv()">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt=""
                    class="img-fluid btn_global_pattern">
                <div class="btn_global_inner w-100">

                    <p class="cart_text">Explore our pricing</p>
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/down_arrow.svg') }}" alt=""
                        class="img-fluid cart_logo">
                </div>
            </button>
        </div>

        <div class="mobile_none">
            <div class="prop1">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>
                <p class="prop_pp ">Post Creation</p>
            </div>
        </div>

        <div class="mobile_none">
            <div class="prop2 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>
                <p class="prop_pp ">Interaction & Responses</p>
            </div>
        </div>

        <div class="mobile_none">
            <div class="prop3">
                <p class="prop_pp ">Analytic Report</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                    <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                    <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                </svg>

            </div>
        </div>


    </section>

    <section class="sec2_s">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect_tt.png')  }}" alt=""
            class="img-fluid intersect_tt mobile_none">
        <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_intersect.png') }}" alt=""
            class="img-fluid intersect_tt_mob desktop_none">
        <div class="container p-0">
            <div class="inner_sec2">
                <div class="left_inner2">

                    <div class="inin_div">
                        <h1 class="div2_tt">
                            What is social media management?
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
                            build business relations through social media
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

        <!-- <img class="img-fluid inter mobile_none" src="./assets/img/Intersect_t.png"> -->

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

                <img src="{{ asset('frontend/BrandSparkz/assets/img/1.png') }}" alt=""
                    class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd.png') }}" alt=""
                    class="img-fluid crd_image desktop_none">
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

                <img src="{{ asset('frontend/BrandSparkz/assets/img/2.png') }}" alt=""
                    class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd2.png') }}" alt=""
                    class="img-fluid crd_image desktop_none">
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

                <img src="{{ asset('frontend/BrandSparkz/assets/img/3.png') }}" alt=""
                    class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd3.png') }}" alt=""
                    class="img-fluid crd_image desktop_none">
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

                <img src="{{ asset('frontend/BrandSparkz/assets/img/4.png') }}" alt=""
                    class="img-fluid crd_image mobile_none">
                <img src="{{ asset('frontend/BrandSparkz/assets/img/mob_crd4.png') }}" alt=""
                    class="img-fluid crd_image desktop_none">
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
                <p class="sec4_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper nunc hendrerit
                    eget sed iaculis felis, quis viverra. Quisque donec purus ac amet fusce duis tellus facilisis
                    pharetra. Imperdiet pellentesque nisl in tellus. Consectetur magnis at aliquet sed. </p>

            </div>

            <div class="sec4_2">
                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/sec4_1.png') }}" alt=""
                        class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/crd_img_mob.png') }}" alt=""
                        class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt">Included Ad Spend</h1>
                        <p class="crd4_pp">Lorem ipsum dolor sit amet <br class="desktop_none"> consectetur. Neque
                            integer faucibus imperdiet turpis.</p>

                    </div>
                </div>

                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/sec4_2.png') }}" alt=""
                        class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/crd_img_mob2.png') }}" alt=""
                        class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt">Monthly Statistics</h1>
                        <p class="crd4_pp">Lorem ipsum dolor sit amet <br class="desktop_none"> consectetur. Neque
                            integer faucibus imperdiet turpis.</p>

                    </div>
                </div>

                <div class="sec4_crd">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/sec4_3.png') }}" alt=""
                        class="img-fluid crd_image2 mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/crd_img_mob3.png') }}" alt=""
                        class="img-fluid crd_image2 desktop_none">
                    <div class="sec4_down">
                        <h1 class="crd4_tt">Weekly Posts</h1>
                        <p class="crd4_pp">Lorem ipsum dolor sit amet <br class="desktop_none"> consectetur. Neque
                            integer faucibus imperdiet turpis.</p>

                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="sec5_s">

        <div class="container custom_padding5">

            <div class="inner_sec5">
                <div class="left_sec5">
                    <div class="inin_sec5">
                        <h1 class="sec5_tt">Digital Marketing <br><span class="span_sec5_tt">That Hits Different!</span>
                        </h1>
                        <p class="sec5_pp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper nunc
                            hendrerit eget sed iaculis felis, quis viverra. Quisque donec purus ac amet fusce duis
                            tellus
                            facilisis pharetra..
                        </p>

                        <div class="pointer_p">
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt=""
                                    class="img-fluid">
                                <p class="pointer_pp">Strategy experience and analytical expertise combine.</p>
                            </div>
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt=""
                                    class="img-fluid">
                                <p class="pointer_pp">Strategy experience and analytical expertise combine.</p>
                            </div>
                            <div class="pointer_line">
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt=""
                                    class="img-fluid">
                                <p class="pointer_pp">Strategy experience and analytical expertise combine.</p>
                            </div>

                        </div>
                    </div>

                    <button class="btn btn_global2 on_phone" onclick="window.location.href='{{ route('aboutus') }}'">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}" alt=""
                            class="img-fluid btn_global_pattern2">
                        <div class="btn_global_inner2 on_phone">
                            <p class="cart_text">Learn more about us</p>
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/up_right.svg')  }}" alt=""
                                class="img-fluid cart_logo">
                        </div>
                    </button>

                </div>
                <div class="right_sec5">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/sec5_img.png') }}" alt=""
                        class="img-fluid mobile_none">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/sec5_mob_img.png') }}" alt=""
                        class="img-fluid desktop_none">
                </div>
            </div>

        </div>


    </section>


    <section class="sec8_s" id="targetDiv">


        <h1 class="table_tt">
            Pricing That <br class="desktop_none">Makes Sense
        </h1>
        <p class="table_pp">No contracts. No Surprise fees.</p>
        <div class="for_below_table social_width mx-auto">
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
                        <div class="tab-pane fade show active service_contentmain" id="pills-one" role="tabpanel"
                            aria-labelledby="pills-one-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})">Add To
                                                        Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['1_month'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        {{-- 3 Months --}}
                        <div class="tab-pane fade service_contentmain" id="pills-three" role="tabpanel"
                            aria-labelledby="pills-three-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})">Add To
                                                        Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['3_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- 6 months --}}
                        <div class="tab-pane fade service_contentmain" id="pills-six" role="tabpanel"
                            aria-labelledby="pills-six-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})">Add To
                                                        Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>

                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['6_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        {{-- 12 MONTHS --}}
                        <div class="tab-pane fade service_contentmain" id="pills-twelve" role="tabpanel"
                            aria-labelledby="pills-twelve-tab">
                            <div class="service_tabcontent table-responsive">
                                <table class="table table-borderless mb-0 service_table">
                                    <thead class="service_table_header">
                                        <tr class="align-middle">
                                            <th scope="col" class="text-center">
                                            </th>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <th scope="col" class="text-center">
                                                <div class="social_tablehead">
                                                    <p class="social_tabletitle">{{ explode(' - ', $product->name)[1] }}
                                                    </p>
                                                    <p class="social_tableamt">
                                                        {{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}
                                                    </p>
                                                    <p class="social_tablesubtitle">+VAT</p>
                                                    <button type="button" class="btn social_tablebtn"
                                                        onclick="addToCart1Step({{ $product->id }})">Add To
                                                        Cart</button>
                                                </div>
                                            </th>
                                            @endforeach
                                        </tr>
                                    </thead>

                                    <tbody class="service_table_body">
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Ad Spend Included</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Social Media Profile/Channels</p>
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
                                            <td>
                                                <p class="service_bodytitle">Posts Per Week</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                <p class="service_bodytext">
                                                    @if ($key < 2) {{ $key == 0 ? '2' : '3' }} @else 5 @endif </p> </td>
                                                        @endforeach </tr> <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Written & Designed Posts</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Interaction & Responses</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Monthly Statistics/Analytics</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 2) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">Support, 7 days a week</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $key => $product)
                                            <td class="text-center">
                                                @if ($key < 3) <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
                                                    @else
                                                    <img class="img-fluid"
                                                        src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr class="align-middle">
                                            <td>
                                                <p class="service_bodytitle">No Contract - Cancel Anytime</p>
                                            </td>
                                            @foreach ($socialProducts['12_months'] as $product)
                                            <td class="text-center">
                                                <img class="img-fluid"
                                                    src="{{ asset('frontend/BrandSparkz/assets/img/service_wrong.svg') }}">
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

                


                <form class="form_section" id="requestform1" action="{{ route('contactus.store') }}" method="post"
                enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                    @csrf
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Full Name</p>
                            <input type="text" id="fullname" name="fullname" class="input_tag"required>

                        </div>
                        <div class="one_section">
                            <p class="label_l">Email</p>
                            <input type="text" id="email" name="email" class="input_tag" required>

                        </div>

                    </div>
                    <div class="spacer2"></div>

                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Phone</p>
                            <input type="text" id="phone" name="phone" class="input_tag" required>

                        </div>
                        <div class="one_section">
                            <p class="label_l">Upload Brief</p>
                            <div class="upload_div" onclick="field_box_file()">
                                <p class="upload_placeholder" id="upload_placeholder">Upload brief here</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <path
                                        d="M5.89286 15.9289C4.29518 15.9289 3 14.9291 3 13.4631C3 11.9972 4.29518 10.8088 5.89286 10.8088C6.0015 10.8088 6.10875 10.8143 6.21429 10.825V10.8088H6.25407C6.22781 10.6155 6.21429 10.4187 6.21429 10.2189C6.21429 7.61272 8.51682 5.5 11.3571 5.5C13.2805 5.5 14.9573 6.46881 15.8395 7.90361C16.0551 7.87452 16.2756 7.85945 16.5 7.85945C18.9853 7.85945 21 9.70808 21 11.9885C21 13.8657 19.6348 15.2967 17.7656 15.7684M11.858 19.5V12.7258M11.858 12.7258L8.90625 15.5196M11.858 12.7258L14.8125 15.5196"
                                        stroke="#3C3C3C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <input type="file" class="form-control input_upload" style="display: contents;"
                                id="document" name="document" >
                        </div>

                    </div>
                    <div class="spacer"></div>
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Additional Information</p>
                            <textarea class="textarea_t" id="message" name="message">
                                </textarea>

                        </div>

                        <div class="for_robot_checkbox">
                            <div class="c-checkbox">
                                <div class="c-div">
                                    <label class="d-flex justify-content-center justify-content-lg-start">
                                        <input type="checkbox" id="terms" name="terms">
                                        <label for="terms"></label>
                                    </label>
                                </div>
                                <div class="c-text">
                                    <p class="login_strong">By ticking this box, you agree to the<br> <a href="{{ route('termsandconditions') }}"

                                            class="blue_text">Terms & Conditions</a> & <a href="{{ route('privacypolicy') }}" class="blue_text">Privacy
                                            Policy</a></p>
                                </div>
                            </div>
    
                            <div class="spacer2"></div>
    
                            <!--<img class="notrobot_1" src="./assets/img/not_a_robot.png">-->
                            <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
                            <div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        </div>

                    </div>
                </form>


                <button class="btn btn_global form_btn_wid" type="submit" form="requestform1">
                    <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}" alt="" class="img-fluid btn_global_pattern">
                    <div class="btn_global_inner w-100">
                        
                        <p class="cart_text">Submit Request</p>
                    </div>
            </button>

           

            </div>

    </section>






</section>




@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('scripts')
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

    })

</script>

<script>
    function field_box_file() {
        console.log('me');
        document.getElementById('document').click();
    }
    $("#document").on("change", function (e) {
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
    function check_agree(form) {
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
                text: 'Please Enter Comments'
            });
            return false;
        }

        if (!form.terms.checked) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please Accept T&C'
            });
            return false;
        }

        return true;
    }

</script>
<script>
    function scrollToDiv() {
        document.getElementById('targetDiv').scrollIntoView({
            behavior: 'smooth'
        });
    }

</script>
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
    function scrollToDiv() {
        document.getElementById('target-element').scrollIntoView({
            behavior: 'smooth'
        });
    }

</script>
<script>
    document.querySelectorAll('.service_tabbtn').forEach((button, index) => {
        button.addEventListener('click', function () {
            document.querySelector('.progress-arrow').style.transform = `translateX(${index * 90}px)`;
        });
    });

</script>
@endsection
