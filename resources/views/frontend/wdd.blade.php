@extends('frontend.layouts.app')
@section('content')
    {{-- brandsparkz code start here --}}

    <section>
        <!-- Service Section 1 Start -->
    <section class="service_s1 wd_s1">
        <div class="container service_c1">
            <div class="seo_c1left w-100">
                <div class="seo_c1titlebar">
                    <h1 class="seo_s1title">Web Design &<br>Web Dev (UX/UI)</h1>
                    <p class="seo_s1subtitle">Lorem ipsum dolor sit amet consectetur. Nisl vitae varius tempor
                        vestibulum at elit porta placerat nisl.</p>
                </div>
                <div class="seo_s1featuresbar">
                    <div class="seo_s1featuresitem">
                        <img src=" {{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg')}}">
                        <p class="seo_s1featurestitle">Guaranteed Fixed Prices</p>
                    </div>
                    <div class="seo_s1featuresitem">
                        <img src=" {{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg')}}">
                        <p class="seo_s1featurestitle">Zero Setup Fees</p>
                    </div>
                    <div class="seo_s1featuresitem">
                        <img src=" {{ asset('frontend/Brandflaire/assest/images/s1_featuresicon.svg')}}">
                        <p class="seo_s1featurestitle">No Hidden Costs</p>
                    </div>
                </div>
                <div class="seo_s1btnbar">
                    <a href="#pills-tabContent" class="btn custom-btn-img">Go To Packages And Pricing
                        <img src=" {{ asset('frontend/Brandflaire/assest/images/seo_s1btnarrow.svg')}}" alt="arrow" class="arrow-img">
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
                <img class="seo_s2redimg mobile_none" src=" {{ asset('frontend/Brandflaire/assest/images/service_s2particle.svg')}}">
                <img class="seo_s2redimg desktop_none" src=" {{ asset('frontend/Brandflaire/assest/images/service_s2particlemob.png')}}">
            </div>
            <img class="seo_s2img mobile_none" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s2img.png')}}">
            <img class="seo_s2img desktop_none" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s2imgmob.png')}}">
            <div class="servic_c2contentbar">
                <div class="service_s2titlebar">
                    <h2 class="service_s2title">what is uX/uI?</h2>
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
            <h2 class="service_s3title">What's Included in our uX/uI Packages?</h2>
            <div class="service_s3cardbar">
                <div class="service_s3card service_s3card1">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s3card1.svg')}}">
                        <p class="service_s3cardtext">SSL<br>Certificate</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card2">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s3card2.svg')}}">
                        <p class="service_s3cardtext">Personalized<br>Domain Name</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card3">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s3card3.svg')}}">
                        <p class="service_s3cardtext">Search Engine<br>Optimization</p>
                    </div>
                </div>
                <div class="service_s3card service_s3card4">
                    <div class="service_s3cardinner">
                        <img class="service_s3cardicon" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s3card4.svg')}}">
                        <p class="service_s3cardtext">Personalized<br>Email Address</p>
                    </div>
                </div>
            </div>
            <button type="button" onclick="window.location.href='{{ route('contactus') }}'" class="btn service_s3btn">Explore More Features</button>
        </div>
    </section>
    <!-- Service Section 3 End -->

    <!-- Service Section 4 Start -->
    <section class="service_s4">
        <div class="container service_c4">
            <h2 class="service_s4title">The brand Flaire Process</h2>
            <div class="service_s4cardbar">
                <div class="service_s4card">
                    <img class="service_s4card1img img-fluid" src=" {{ asset('frontend/Brandflaire/assest/images/service_s4card1img.png')}}">
                    <div class="service_s4cardtitlebar">
                        <h3 class="service_s4cardtitle">We Discuss</h3>
                        <p class="service_s4subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                            varius eget integer.</p>
                    </div>
                </div>
                <div class="service_s4card">
                    <img class="service_s4card2img img-fluid" src=" {{ asset('frontend/Brandflaire/assest/images/service_s4card2img.png')}}">
                    <div class="service_s4cardtitlebar">
                        <h3 class="service_s4cardtitle">We Get To Work</h3>
                        <p class="service_s4subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet
                            varius eget integer.</p>
                    </div>
                </div>
                <div class="service_s4card">
                    <img class="service_s4card3img img-fluid" src=" {{ asset('frontend/Brandflaire/assest/images/service_s4card3img.png')}}">
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
                    <h2 class="service_s2title">why UX/UI Is Important</h2>
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
            <img class="service_s5img mobile_none" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s5img.png')}}">
            <img class="service_s5img desktop_none" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s5imgmob.png')}}">
            <div class="service_s5patternbar mobile_none">
                <img class="service_s5pattern" src=" {{ asset('frontend/Brandflaire/assest/images/service_s5pattern.svg')}}">
            </div>
        </div>
    </section>
    <!-- Service Section 5 End -->

    <!-- Service Section 6 Start -->
    <section class="service_s6">
        <div class="service_s6topbar">
            <img class="mobile_none" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s6img.png')}}">
            <img class="desktop_none w-100" src=" {{ asset('frontend/Brandflaire/assest/images/wd_s6imgmob.png')}}'">
            <div class="service_s6titlemain">
                <div class="service_s6titlebar">
                    <h2 class="service_s6title">Choose Your UX/UI Plan</h2>
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
                                                @foreach ($wddProducts['1_month'] as $product)
                                                <th scope="col" class="text-center">
                                                    <p class="service_tabletitle">
                                                        @php
                                                            $nameParts = explode(' - ', $product->name);
                                                            echo count($nameParts) > 1 ? $nameParts[1] : $product->name;
                                                        @endphp
                                                    </p>
                                                </th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody class="service_table_body">
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Design and Build</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">{{ $key < 3 ? 'Wordpress' : 'Bespoke' }}</p>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Number of Pages</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">
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
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Search Engine Optimization</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Personalized Domain Name</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Personalized Email Address</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $key => $product)
                                                <td class="text-center">
                                                    <p class="service_table_bodytext">
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
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">SSL Certificate</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start">
                                                    <p class="service_table_bodytext">Support, 7 days a week</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <img class="img-fluid" src="{{ asset('frontend/Brandflaire/assest/images/service_tabletick.svg')}}">
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-start service_table_bodysecondlast">
                                                    <p class="service_table_bodytext">Price</p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                <td class="text-center service_table_bodysecondlast">
                                                    <p class="service_table_bodyprice">{{ currency_symbol() }}{{ round(convert_price($product->unit_price), 2) }}</p>
                                                </td>
                                                @endforeach
                                            </tr>
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="service_bodytext"></p>
                                                </td>
                                                @foreach ($wddProducts['1_month'] as $product)
                                                <td class="text-center">
                                                    <button type="button" class="btn service_tablebtn" onclick="addToCart1Step({{ $product->id }})" style="cursor: pointer;">Add to cart</button>
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
            <img class="service_s7img mobile_none" src=" {{ asset('frontend/Brandflaire/assest/images/service_s7img.png')}} ">
            <img class="service_s7img desktop_none" src=" {{ asset('frontend/Brandflaire/assest/images/service_s7imgmob.png')}}">
            <div class="service_s7contentbar">
                <div class="service_s7formbar">
                    <div class="service_s7titlebar">
                        <h2 class="service_s7title">Need a Little Extra Flaire?</h2>
                        <p class="service_s7subtitle">Pick and choose what features you would like in your very own
                            custom package. Simply upload a document of your brief and our team will get back to you.
                        </p>
                    </div>
                    <form class="service_s7bottom" id="requestform1" action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data" onsubmit="return check_agree1(this);">
                        @csrf
                        <input type="hidden" name="from_page" value="service">
                        <div class="service_s7textboxbar">
                            <div class="service_s7textboxline">
                                <input type="text" class="form-control service_s7textbox" id="fullname" name="fullname" class="input_tag" placeholder="Full Name" required>
                                <input type="mail" class="form-control service_s7textbox" id="email" name="email" class="input_tag" placeholder="Email Address" required>
                            </div>
                            <div class="service_s7textboxline">
                                <div class="w-100">
                                    <input type="tel" class="form-control service_s7textbox" id="phone" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="w-100">
                                    <input type="file" style="display: none;" id="document" name="document" class="inputfile w-100" data-multiple-caption="{count} files selected" multiple />
                                    <label class="upload_label w-100" for="document"><span>Upload your brief</span><img src="{{ asset('frontend/Brandflaire/assest/images/upload_icon.svg')}}"></label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="service_s7textboxbar" style="margin-top: 15px;">
                            <div class="w-100">
                                <textarea class="form-control service_s7textbox" id="message" name="message" placeholder="Additional Information" rows="6" style="width: 100%; min-height: 120px; padding: 15px; resize: vertical;"></textarea>
                            </div>
                        </div>
                        
                        <div class="supported_checkboxline">
                            <div class="form-check supported_check">
                                <input class="form-check-input supported_checkbox" type="checkbox" id="terms" name="terms">
                                <div class="d-flex justify-content-between w-100">
                                    <label class="supported_checkboxtext" for="loginCheck">By ticking this box, you agree to the <a href="{{route('termsandconditions')}}" class="supported_checklink">Terms & Conditions</a> & <a href="{{route('privacypolicy')}}" class="supported_checklink">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="h-captcha" data-sitekey="{{ env('H_CAPTCHA_SITE_KEY') }}"></div>
                        <button class="bnt service_s7btn" type="submit" id="submit-btn">submit request</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section 7 End -->
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
            var fileName = e.target.files[0].name;
            $(this).siblings('.upload_label').find('span').text(fileName);
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
            })
            c.forEach(x => {
                const b = document.createElement("div");
                b.className = "white_box2";
            })
            d.forEach(x => {
                const b = document.createElement("div");
                b.className = "image_box";
            })
            e.forEach(x => {
                const b = document.createElement("div");
                b.className = "image_box2";
            })
            f.forEach(x => {
                const b = document.createElement("div");
                b.className = "image_box3";
                const height = x.offsetHeight;
                b.style.height = height + "px";
            })
        });
    </script>
@endsection
