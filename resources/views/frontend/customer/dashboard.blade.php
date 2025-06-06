@extends('frontend.layouts.app')

@if (Auth::check())
    @php
        $user = Auth::user();
        $user_id = Auth::user()->id;
        $u2 = DB::table('last_billing_address')->where('user_id', $user_id)->orderBy('id', 'desc')->first();
        if ($u2) {
            $user = $u2;
        }
    @endphp
@endif
@section('content')
    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
            role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <div id="order-details-modal-body" style="background: #F6F7FB;">

                </div>
            </div>
        </div>
    </div>


    <!-- Dashboard Section 1 Start -->
    <section class="dashboard_sec1">
        <div class="container dashboard_con1">
            <div class="dashboard_tabbar">
                <div class="nav-tabs-container">
                    <ul class="nav nav-pills tab_btnbar" id="pills-tab" role="tablist">
                        <li class="nav-item col" role="presentation">
                            <button class="tab_btn active w-100" id="pills-account-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account"
                                aria-selected="true">My&nbsp;Account</button>
                        </li>
                        <li class="tab_btnline"></li>
                        <li class="nav-item col" role="presentation">
                            <button class="tab_btn w-100" id="pills-history-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-history"
                                aria-selected="false">Order&nbsp;History</button>
                        </li>
                        <li class="tab_btnline"></li>
                        <li class="nav-item col" role="presentation">
                            <button class="tab_btn w-100" type="button" onclick="window.location.href='{{ route('logout') }}'">Logout</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section 1 End -->

    <!-- Dashboard Section 2 Start -->
    <section class="dashboard_sec2">
        <div class="container dashboard_con2">
            <div class="tab_contentbar tab-content">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                        aria-labelledby="pills-account-tab">
                        <form class="account_form" id="form-profile-update"
                            action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data"
                            onsubmit="return check_agree(this);">
                            @csrf
                            <div class="account_tabcontent account_main">
                                <div class="account_titlebar">
                                    <h2 class="account_title">My Account</h2>
                                    <div class="account_subtitlebar">
                                        <p class="logout_text">Hello <b>{{ Auth::user()->name }}</b> (Not {{ Auth::user()->name }}? <a
                                                class="dashboard_logoutbtn" href="{{route('logout')}}">Logout</a>)</p>
                                        <p class="account_subtitle">From your account dashboard you can vier your recent
                                            orders, manage your billing addressed and edit your password and account
                                            details.</p>
                                    </div>
                                </div>
                                <div class="dashboard_line"></div>
                                <div class="dashboard_mid">
                                    <h5 class="acc_infotitle">Personal Details</h5>
                                    <div class="dashboard_textboxbar">
                                        <div class="dashboard_textboxline">
                                            <input type="text" class="form-control dashboard_textbox" form="form-profile-update" name="name"
                                                value="{{ Auth::user()->name }}"
                                                placeholder="Full Name">
                                            <input type="email" class="form-control dashboard_textbox" name="email" form="form-profile-update"
                                                value="{{ Auth::user()->email }}"
                                                placeholder="Email Address">
                                        </div>
                                        {{-- <div class="dashboard_textboxline">
                                            <input type="text" class="form-control dashboard_textbox" id=""
                                                placeholder="Email Address">
                                            <input type="text" class="form-control dashboard_textbox" id=""
                                                placeholder="Phone Number">
                                        </div> --}}
                                        <div class="dashboard_textboxline">
                                            <input type="password" class="form-control dashboard_textbox" form="form-profile-update" id="new_password" name="new_password"
                                                placeholder="Password">
                                            <input type="password" class="form-control dashboard_textbox" form="form-profile-update" id="confirm_password" name="confirm_password"
                                            required
                                                placeholder="New Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard_line"></div>
                                <div class="dashboard_mid">
                                    <h5 class="acc_infotitle">Billing address</h5>
                                    <div class="dashboard_textboxbar">
                                        <div class="dashboard_textboxline">
                                            <input type="text" class="form-control dashboard_textbox" readonly
                                                value="{{ $user->address }}"
                                                placeholder="Address line 1">
                                            <input type="text" class="form-control dashboard_textbox" readonly
                                                value="{{ $user->addressL2 }}"
                                                placeholder="Address line 2">
                                        </div>
                                        <div class="dashboard_textboxline">
                                            <div class="inp_div w-100">
                                                <input type="text" class="form-control dashboard_textbox w-100" value="{{ $user->postal_code }}" readonly
                                                    placeholder="City">
                                            </div>
                                            <div class="drop_div w-100">
                                                <div class="dropdown w-100">
                                                    {{-- <button class="btn account_dropdown w-100" type="button" id="country-select"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        France<img class="drop_arrrow" src="{{ asset('frontend/Brandflaire/assest/images/drop_arrow.svg') }}">
                                                    </button>
                                                    <ul class="dropdown-menu w-100">
                                                        <li><a class="dropdown-item" href="#">India</a></li>
                                                        <li><a class="dropdown-item" href="#">America</a></li>
                                                        <li><a class="dropdown-item" href="#">Japan</a></li>
                                                    </ul> --}}
                                                    <select class="form-select btn account_dropdown w-100 " id="country-select"
                                                    aria-label="Default select example"><img class="drop_arrrow" src="{{ asset('frontend/Brandflaire/assest/images/drop_arrow.svg') }}">
                                                    @foreach (\App\Models\Country::all() as $key => $country)
                                                        <option value="{{ $country->code }}"
                                                            @if ($country->code == $user->country || $country->code == $user->country) selected @endif>
                                                            {{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dashboard_textboxline">
                                            <input type="text" class="form-control dashboard_textbox" id=""
                                                placeholder="County" readonly value="{{ $user->country }}">
                                            <input type="text" class="form-control dashboard_textbox" value="{{ $user->postal_code }}" readonly
                                                placeholder="Zip / Postal code">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn dashboard_savebtn" form="form-profile-update"> Save Changes</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade history_main" id="pills-history" role="tabpanel"
                        aria-labelledby="pills-history-tab">
                        <div class="order_tabcontent order_main">
                            <div class="order_titlebar">
                                <h2 class="account_title">My Orders</h2>
                                <p class="account_subtitle order_subtitle">From your account dashboard you can vier your recent
                                    orders, manage your billing addressed and edit your password and account
                                    details.</p>
                                    <p class="order_swipetext desktop_none">Swipe left and right to view the table.</p>
                            </div>
                            <div class="table-responsive main_tablediv">
                                <table class="table table-borderless mb-0 history_table">
                                    <thead class="history_table_header">
                                        <tr class="align-middle">
                                            <th scope="col">
                                                <p class="history_tabletitle">Order #</p>
                                            </th>
                                            <th scope="col">
                                                <p class="history_tabletitle">Date</p>
                                            </th>
                                            <th scope="col">
                                                <p class="history_tabletitle">QTY</p>
                                            </th>
                                            <th scope="col">
                                                <p class="history_tabletitle">Total</p>
                                            </th>
                                            <th scope="col">
                                                <p class="history_tabletitle"></p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="history_table_body">
                                        @forelse ($orders as $key => $order)
                                            <tr class="align-middle">
                                                <td>
                                                    <p class="hisroty_orderid">#{{ $order->code }}</p>
                                                </td>
                                                <td>
                                                    <p class="history_bodytext">{{ date('d-m-Y', $order->date) }}</p>
                                                </td>
                                                <td>
                                                    <p class="history_bodytext">{{ $order->quantity }}</p>
                                                </td>
                                                <td>
                                                    <p class="history_bodytext">{{ single_price($order->grand_total) }}</p>
                                                </td>
                                                <td><button class="order_detailbtn" 
                                                    onclick="show_purchase_history_details({{ $order->id }}) data-bs-toggle="modal" data-bs-target="#myModal">View Details</button>
                                                </td>
                                            </tr>
                                            
                                            @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section 2 End -->

@endsection
@section('script')
@endsection
