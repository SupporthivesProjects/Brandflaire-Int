@extends('frontend.layouts.app')

@section('content')
    <style>
        header {
            background: transparent;
        }
    </style>

    <section class="secure">
        <div class="container px-0">
            <div class="upper_text">
                <h1>Secure checkout</h1>
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            </div>
            <div class="white_box">
                <div class="left_box">
                    <form id="shippingAddress" data-toggle="validator"  action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST" onsubmit="return check_agree(this);">
                        @csrf
                        @if (Auth::check())
                            @php
                                $user = Auth::user();
                                $lastBillingAddress = \App\Models\LastBillingAddress::getLastBillingAddress($user->id);
                            @endphp
                        <div class="input_box">
                            <input type="hidden" form="shippingAddress" class="form-control" name="user_id"
                                value="{{ $user->id }}" required />
                            <input type="hidden" class="form-control" form="shippingAddress" name="email"
                                value="{{ $user->email }}" required />
                            <input type="hidden" form="shippingAddress" name="checkout_type" value="logged">
                            <input type="text" form="shippingAddress" class="form-control inpi_boxx" name="name"
                            id="name" value="{{ $lastBillingAddress->name ?? '' }}" required placeholder="First Name">
                            <input type="text" form="shippingAddress" class="form-control inpi_boxx" name="lname"
                            id="lname" value="{{ $lastBillingAddress->lname ?? '' }}" required placeholder="Last Name">
                            <input type="tel" form="shippingAddress" class="form-control inpi_boxx" name="phone"
                            id="phone" value="{{ $lastBillingAddress->phone ?? '' }}" required placeholder="Phone">
                            <input type="date" form="shippingAddress" class="form-control inpi_boxx" value="{{ $lastBillingAddress->dob ?? '' }}" 
                            id="dob" name="dob" 
                             max="{{ date('Y-m-d', strtotime('18 years ago')) }}" required placeholder="Date Of Birth">
                            <input type="text" form="shippingAddress" class="form-control inpi_boxx" name="address"
                            id="address" value="{{ $lastBillingAddress->address ?? '' }}" required placeholder="Address Line 1">
                            <input type="text" form="shippingAddress" class="form-control inpi_boxx" name="addressL2"
                            id="addressL2" value="{{ $lastBillingAddress->addressL2 ?? '' }}" placeholder="Address Line 2">
                            <input type="text" form="shippingAddress" class="form-control inpi_boxx" name="city"
                            id="city" value="{{ $lastBillingAddress->city ?? '' }}" required placeholder="City">
                            <input type="text" form="shippingAddress" class="form-control inpi_boxx" name="postal_code"
                            id="postal_code" value="{{ $lastBillingAddress->postal_code ?? '' }}" required placeholder="Postcode">
                            <div class="spilt_imput">
                                <select class="form-select inpi_boxx" aria-label="Default select example" id="country" name="country" form="shippingAddress" required>
                                    @foreach (\App\Models\Country::all() as $key => $country)
                                        <option value="{{ $country->code ?? '' }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                
                                <input type="text" form="shippingAddress" class="form-control inpi_boxx" name="StateProvince"
                                id="StateProvince" required placeholder="StateProvince">
                            </div>
                            <div class="custom-control custom_checkbox">
                                <input type="checkbox" class="form-check-input tick_box" id="terms" name="terms" form="shippingAddress">
                                <label class="custom-control-label terms_lline" for="terms">
                                    By ticking this box, you are agree to the <a href="{{ route('termsandconditions') }}" class="odd">Terms and
                                        Conditions</a> &
                                    <a href="{{ route('privacypolicy') }}" class="odd">Privacy Policy.</a>
                                </label>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LcSKScrAAAAAFTPINNesDgJDwJdGKL3VShi-QvA" form="shippingAddress"></div>
                        </div>
                        @endif
                    </form>
                </div>
                <div class="rgt_box">
                    <div class="orfer_text">
                        <h4>Order Summary</h4>
                    </div>
                    <div class="box_db">
                        @php
                            $subtotal = 0;
                            $tax = 0;
                            $shipping = 0;
                        @endphp
                        @foreach (Session::get('cart') as $key => $cartItem)
                            @php
                                $product = \App\Models\Product::find($cartItem['id']);
                                $subtotal = $subtotal + round(convert_price($cartItem['price']*$cartItem['quantity']), 2);
                            @endphp
                        <div class="cart_inner">
                            <div class="cart_inner_top">
                                <div class="cart_inner_left">
                                    <p class="cart_prod_title">{{ $product->name }}</p>
                                </div>
                                <div class="cart_inner_right">
                                    <p class="cart_prod_price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</p>
                                    <img src="{{ asset('frontend/Brandflaire/assest/images/del.svg') }}" alt="" class="img-fluid" onclick="removeFromCartView(event, '{{ $key }}')">
                                </div>
                            </div>
                            <div class="cart_inner_bottom">
                                <p class="cart_duration">{{ $product->subscription }}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="cart_stroke"></div>
                        
                    </div>
                    <div class="cart_total">
                        <h3 class="total_label">Total:</h3>
                        <h3 class="total_price"> {{ currency_symbol() . number_format($subtotal, 2) }}</h3>
                    </div>
                    @php
                        $coupon_system = \App\Models\BusinessSetting::where('type', 'coupon_system')->first(); 
                    @endphp
                    @if (Auth::check() && $coupon_system && $coupon_system->value == 1)
                        @if (Session::has('coupon_discount'))
                        
                            <div class="coupoun_box">
                                <p>Applied Coupon: {{ \App\Models\Coupon::find(Session::get('coupon_id'))->code }}</p>
                                <p>Discount:{{ single_price(Session::get('coupon_discount')) }}</p>
                                <button class="nav-link btn btn_black" form="Couponremove" type="submit">Remove cupon</button>
                            </div>
                            <form action="{{ route('checkout.remove_coupon_code') }}" id="Couponremove" method="POST">
                                @csrf
                            </form>    
                    @else
                    <form action="{{ route('checkout.apply_coupon_code') }}" id="applyCoupon" method="POST">
                        @csrf
                        <div class="coupoun_box">
                            <input type="text" class="form-control coupou_input" form="applyCoupon" placeholder="Enter your code here" required name="code">
                            <button class="nav-link btn btn_black" type="submit" form="applyCoupon">Apply</button>
                        </div>
                    </form>
                    @endif
                    @endif
                    <button class="nav-link btn botto_black" form="shippingAddress" type="submit">Apply</button>
                    <img src="{{ asset('frontend/Brandflaire/assest/images/Mastercard.svg') }}" alt="" class="img-fluid master">
                </div>
            </div>

    </section>
@endsection

@section('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
        function removeFromCart1(key) {
            $.post('{{ route('cart.removeFromCart') }}', {
                _token: '{{ csrf_token() }}',
                key: key
            }, function(data) {
                //updateNavCart();
                $('#cart-summary').html(data);
                Swal.fire({
                    icon: 'success',
                    title: 'Item Removed',
                    text: 'Item has been removed from cart'
                })

                location.reload();
            });
        }

        function removeFromCartView(e, key) {
            e.preventDefault();
            removeFromCart(key);
            //location.reload();
        }

        function updateQuantity(key, element) {
            $.post('{{ route('cart.updateQuantity') }}', {
                _token: '{{ csrf_token() }}',
                key: key,
                quantity: element.value
            }, function(data) {
                updateNavCart();
                $('#cart-summary').html(data);
            });
        }

        function showCheckoutModal() {
            $('#GuestCheckout').modal();
        }
    </script>

    <script>
        function field_box_file() {
            console.log('me');
            document.getElementById('document').click();
        }
        $("#document").on("change", function(e) {
            document.getElementById('upload_placeholder').innerHTML = e.target.files[0].name;
        })

        function removeFromCartView(e, key) {
            e.preventDefault();
            removeFromCart(key);
        }

        function showCheckoutModal() {
            $('#GuestCheckout').modal();
        }
    </script>

<script>
    function check_agree(form) {
        var response = grecaptcha.getResponse(); 

        if (form.terms.checked && response.length > 0) {
            
            return true;
        } else {
           
            if (!form.terms.checked) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please accept terms and conditions.'
                });
            } else if (response.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please complete the reCAPTCHA.'
                });
            }
            return false;  
        }
    }
</script>
@endsection
