@extends('frontend.layouts.app')
@section('content')
    {{-- brandsparkz code start here --}}

    <section>
        <section class="sec1_s">
            <video class="bg-image d-lg-block d-md-block d-none" loop="" muted="" autoplay=""
                style="object-fit: cover;">
                <source src="{{ asset('frontend/BrandSparkz/assets/img/wd.mp4') }}" type="video/mp4">
            </video>
            <video class="bg-image d-lg-none d-md-none d-block" loop="" muted="" autoplay=""
                style="object-fit: cover;">
                <source src="{{ asset('frontend/BrandSparkz/assets/img/wd_mob.mp4') }}" type="video/mp4">
            </video>

            <div class="sec1_video_wd">
                <h1 class="main_tt">
                    Web Design and<br>Development
                </h1>
                <p class="main_pp">Capture your audience's attention with a professionally designed and developed website.
                </p>
                <button class="btn btn_global"
                    onclick="document.getElementById('socialtable').scrollIntoView({ behavior: 'smooth' });">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39"
                        fill="none">
                        <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                        <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                    </svg>
                    <p class="prop_pp">Personalized Domain Name</p>
                </div>
            </div>

            <div class="mobile_none">
                <div class="prop2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39"
                        fill="none">
                        <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                        <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                    </svg>
                    <p class="prop_pp">SSL Certificate</p>
                </div>
            </div>

            <div class="mobile_none">
                <div class="prop3">
                    <p class="prop_pp">Search Engine Optimization</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39"
                        fill="none">
                        <circle cx="19.5" cy="19.5" r="19.5" fill="white" fill-opacity="0.56" />
                        <circle cx="19.5" cy="19.5" r="9.5" fill="white" />
                    </svg>
                </div>
            </div>
        </section>

        <section class="sec2_s">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/intersect_tt.png') }}" alt=""
                class="img-fluid intersect_tt mobile_none">
            <img src="{{ asset('frontend/BrandSparkz/assets/img/mobile_intersect.png') }}" alt=""
                class="img-fluid intersect_tt_mob desktop_none">
            <div class="container p-0">
                <div class="inner_sec2">
                    <div class="left_inner2">
                        <div class="inin_div">
                            <h1 class="div2_tt">
                                What is web design and web development?
                            </h1>
                            <p class="div2_pp">The Push Dynamics team of web design and development experts can build
                                websites which will highlight your unique propositions as a business. Our team have years of
                                experience in building websites for specific and niche markets. We will analyse your
                                industry to build professional and relevant websites with ongoing site maintenance to make
                                sure your brand always makes a positive first impression.</p>
                        </div>
                    </div>
                    <div class="right_inner2">
                        <div class="inin_div">
                            <h1 class="div2_tt">
                                SEO Focused web design and development
                            </h1>
                            <p class="div2_pp">It takes around 0.5 seconds to capture your audience's attention and for them
                                to form an opinion about your brand when they visit your website. With a professionally
                                designed website which acts as the backbone of your business, you can create a unique online
                                experience for your clients, and strengthen your brand's reputation in the highly
                                competitive and saturated digital landscape.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec3_s">
            <div class="sec3_1div">
                <h1 class="sec3_tt">How We <span class="sec3_spantt">Make<br class="desktop_none"> It Happen</span></h1>
                <p class="sec_pp">At Push Dynamics we take time to get to know you as a business to understand your
                    individual objectives and costs, from which we develop bespoke digital marketing packages.</p>
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
                            We specialise in creating winning campaigns for businesses of all sizes.
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
                            Communication and updating our clients is key to all our campaigns.
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
                            We take time to develop tailor made solutions which will work for you.
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
                            When you work with Push Dynamics, the results will speak for themselves.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec4_s">
            <div class="container custom_padding2">
                <div class="sec4_1">
                    <h1 class="sec4_tt">Powering Brands<br> <span class="sec4_tt_span">That Mean Business</span></h1>
                    <p class="sec4_pp">Your website will support all your other digital marketing efforts, as it acts as
                        your primary customer touchpoint. A responsive and custom website gives your clients a clear idea of
                        your products, services, and values as a business.</p>
                </div>

                <div class="sec4_2">
                    <div class="sec4_crd">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd_1.png') }}" alt=""
                            class="img-fluid crd_image2 mobile_none">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd1_mob.png') }}" alt=""
                            class="img-fluid crd_image2 desktop_none">
                        <div class="sec4_down">
                            <h1 class="crd4_tt">SSL Certificate</h1>
                            <p class="crd4_pp">Our advanced security measures keep your visitors safe.</p>
                        </div>
                    </div>

                    <div class="sec4_crd">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd_2.png') }}" alt=""
                            class="img-fluid crd_image2 mobile_none">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd2_mob.png') }}" alt=""
                            class="img-fluid crd_image2 desktop_none">
                        <div class="sec4_down">
                            <h1 class="crd4_tt">Personalised Email</h1>
                            <p class="crd4_pp">All our websites come with personalised web domains.</p>
                        </div>
                    </div>

                    <div class="sec4_crd">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd_3.png') }}" alt=""
                            class="img-fluid crd_image2 mobile_none">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd3_mob.png') }}" alt=""
                            class="img-fluid crd_image2 desktop_none">
                        <div class="sec4_down">
                            <h1 class="crd4_tt">Search Engine Optimization</h1>
                            <p class="crd4_pp">Combined with SEO your website will get more clicks.</p>
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
                            <h1 class="sec5_tt">Digital Marketing <br><span class="span_sec5_tt">That Hits
                                    Different!</span>
                            </h1>
                            <p class="sec5_pp">Ensure your clients can find and navigate your website with ease. It is
                                worth investing in a responsive and well-designed website which will improve your brand's
                                profitability and success rate.
                            </p>

                            <div class="pointer_p">
                                <div class="pointer_line">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt=""
                                        class="img-fluid">
                                    <p class="pointer_pp">Custom and bespoke design packages.</p>
                                </div>
                                <div class="pointer_line">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt=""
                                        class="img-fluid">
                                    <p class="pointer_pp">Enhanced user experience.</p>
                                </div>
                                <div class="pointer_line">
                                    <img src="{{ asset('frontend/BrandSparkz/assets/img/pointer.svg') }}" alt=""
                                        class="img-fluid">
                                    <p class="pointer_pp">Increased conversion rates.</p>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn_global2 on_phone" onclick="window.location.href='{{ route('aboutus') }}'">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern2.png') }}"
                                alt="" class="img-fluid btn_global_pattern2">
                            <div class="btn_global_inner2 on_phone">
                                <p class="cart_text">Learn more about us</p>
                                <img src="{{ asset('frontend/BrandSparkz/assets/img/up_right.svg') }}" alt=""
                                    class="img-fluid cart_logo">
                            </div>
                        </button>
                    </div>
                    <div class="right_sec5">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd_photo.png') }}" alt=""
                            class="img-fluid mobile_none">
                        <img src="{{ asset('frontend/BrandSparkz/assets/img/wd_mob_photo.png') }}" alt=""
                            class="img-fluid desktop_none">
                    </div>
                </div>
            </div>
        </section>

        <section class="sec8_s" id="socialtable">
            <h1 class="table_tt">
                Pricing That <br class="desktop_none">Makes Sense
            </h1>
            <p class="table_pp">No contracts. No Surprise fees.</p>
            <div class="for_below_table wd_width mx-auto">
                <div class="social_tablebar w-100">
                    <div class="tab_btnbar">
                        <div class="nav-tabs-container position-relative">
                            <ul class="nav nav-pills service_tabbar" id="pills-tab" role="tablist">
                                <li class="nav-item col mb-0" role="presentation">
                                    <button class="active service_tabbtn w-100" id="pills-one-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-one" type="button" role="tab"
                                        aria-controls="pills-one" aria-selected="true">1 Month</button>
                                </li>
                                {{-- <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-three-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three"
                                    aria-selected="false">3 Months</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-six-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six"
                                    aria-selected="false">6 Months</button>
                            </li>
                            <li class="nav-item col mb-0" role="presentation">
                                <button class="service_tabbtn w-100" id="pills-twelve-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-twelve" type="button" role="tab" aria-controls="pills-twelve"
                                    aria-selected="false">12 Months</button>
                            </li> --}}
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
                                                @foreach ($wddProducts['1_month'] as $product)
                                                    <th scope="col" class="text-center">
                                                        <div class="social_tablehead">
                                                            <p class="social_tabletitle">
                                                                @php
                                                                    $nameParts = explode(' - ', $product->name);
                                                                    echo count($nameParts) > 1
                                                                        ? $nameParts[1]
                                                                        : $product->name;
                                                                @endphp
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
                                                    <p class="service_bodytitle">Design and Build</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytitle">
                                                            {{ $key < 3 ? 'Wordpress' : 'Bespoke' }}</p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Number of Pages</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytitle">
                                                            @if ($key == 0)
                                                                5
                                                            @elseif ($key == 1)
                                                                10
                                                            @elseif ($key == 2)
                                                                15
                                                            @elseif ($key == 3)
                                                                6
                                                            @else
                                                                20
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Search Engine optimisation</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Personalised Domain name</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">personalised email address</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $key => $product)
                                                    <td class="text-center">
                                                        <p class="service_bodytitle">
                                                            @if ($key == 0)
                                                                1
                                                            @elseif ($key == 1)
                                                                3
                                                            @else
                                                                5
                                                            @endif
                                                        </p>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">SSL Certificate (secure sockets layer)</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytitle">Support, 7 days a week</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                    <td class="text-center">
                                                        <img class="img-fluid"
                                                            src="{{ asset('frontend/BrandSparkz/assets/img/service_tick.svg') }}">
                                                    </td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Other tabs would go here, similar to the original file -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec7_s">
            <div class="insec7_s">
                <div>
                    <h1 class="form_tt">Need a something <span class="span_form_tt">bespoke?</span> </h1>
                    <p class="form_pp">Pick and choose what features you would like in your very own custom package</p>
                    <p class="form_pp">Simply upload a document of your brief and our team will get back to you.</p>
                </div>

                <form class="form_section" id="requestform1" action="{{ route('contactus.store') }}" method="post"
                    enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                    @csrf
                    <input type="hidden" name="from_page" value="service">

                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Full Name</p>
                            <input type="text" id="fullname" name="fullname" class="input_tag" required>
                        </div>
                        <div class="one_section">
                            <p class="label_l">Email</p>
                            <input type="email" id="email" name="email" class="input_tag" required>
                        </div>
                    </div>
                    <div class="spacer2"></div>

                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Phone</p>
                            <input type="tel" id="phone" name="phone" class="input_tag" required>
                        </div>
                        <div class="one_section">
                            <p class="label_l">Upload Brief</p>
                            <div class="upload_div" id="upload_div_trigger">
                                <p class="upload_placeholder" id="upload_placeholder">Upload brief here</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <path
                                        d="M5.89286 15.9289C4.29518 15.9289 3 14.9291 3 13.4631C3 11.9972 4.29518 10.8088 5.89286 10.8088C6.0015 10.8088 6.10875 10.8143 6.21429 10.825V10.8088H6.25407C6.22781 10.6155 6.21429 10.4187 6.21429 10.2189C6.21429 7.61272 8.51682 5.5 11.3571 5.5C13.2805 5.5 14.9573 6.46881 15.8395 7.90361C16.0551 7.87452 16.2756 7.85945 16.5 7.85945C18.9853 7.85945 21 9.70808 21 11.9885C21 13.8657 19.6348 15.2967 17.7656 15.7684M11.858 19.5V12.7258M11.858 12.7258L8.90625 15.5196M11.858 12.7258L14.8125 15.5196"
                                        stroke="#3C3C3C" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="file" class="form-control input_upload" style="display: none;"
                                id="document" name="document">
                        </div>
                    </div>
                    <div class="spacer"></div>
                    <div class="hori_hor">
                        <div class="one_section">
                            <p class="label_l">Additional Information</p>
                            <textarea class="textarea_t" id="message" name="message" required></textarea>
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
                                    <p class="login_strong">By ticking this box, you agree to the<br> <span
                                            class="blue_text"><a href="{{ route('termsandconditions') }}">Terms &
                                                Conditions</a></span> & <span class="blue_text"><a
                                                href="{{ route('privacypolicy') }}">Privacy
                                                Policy</a></span></p>
                                </div>
                            </div>

                            <div class="spacer2"></div>

                            <div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        </div>
                    </div>

                    <div class="form_button_container">
                        <button type="submit" class="btn btn_global form_btn_wid">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}"
                                alt="" class="img-fluid btn_global_pattern">
                            <div class="btn_global_inner w-100">
                                <p class="cart_text">Submit Request</p>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </section>
@endsection

@section('scripts')
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
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

        $(document).ready(function() {
            // Add click event listener to the upload div
            $("#upload_div_trigger").on("click", function() {
                document.getElementById('document').click();
            });

            // Add change event listener to the file input
            $("#document").on("change", function(e) {
                if (e.target.files.length > 0) {
                    document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
                }
            });

            // Progress arrow for tabs
            document.querySelectorAll('.service_tabbtn').forEach((button, index) => {
                button.addEventListener('click', function() {
                    document.querySelector('.progress-arrow').style.transform =
                        `translateX(${index * 90}px)`;
                });
            });
        });
    </script>
    <script>
        document.querySelectorAll('.service_tabbtn').forEach((button, index) => {
            button.addEventListener('click', function() {
                document.querySelector('.progress-arrow').style.transform = `translateX(${index * 90}px)`;
            });
        });
    </script>
    <script>
        function field_box_file() {
            document.getElementById('document').click();
        }
        $("#document").on("change", function(e) {
            document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
        });
    </script>
    <script>
        $(document).ready(function() {
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
        });
    </script>
@endsection
