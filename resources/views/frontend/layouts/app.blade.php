<?php
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BrandFlaire</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="#">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Essential CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/dhirajstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/dhirajresponsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/rstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Brandflaire/assest/css/s_style.css') }}">



    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body>
    @php
        if (Session::has('currency_code')) {
            $currency_code = Session::get('currency_code');
        } else {
            $currency_code = $currency_code = \App\Models\Currency::getDefaultCurrency();
        }
        Session::put('currency_code', $currency_code);
    @endphp
    

    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('frontend/Brandflaire/assest/images/brand.svg') }}" alt="" class="branlogo img-fluid">
              </a>
              <button class="navbar-toggler p-0"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ asset('frontend/Brandflaire/assest/images/Menu-Button.svg') }}" class="img-fluid" id="changetoggle">
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Solutions
                        </a>
                        <ul class="dropdown-menu dropdown-menu-servies">
                            <li><a class="dropdown-item {{ request()->routeIs('seo') ? 'select-item' : '' }}" href="{{ route('seo') }}">SEO</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('ppc') ? 'select-item' : '' }}" href="{{ route('ppc') }}">PPC</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('orm') ? 'select-item' : '' }}" href="{{ route('orm') }}">ORM</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('wdd') ? 'select-item' : '' }}" href="{{ route('wdd') }}">UI/UX</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('social') ? 'select-item' : '' }}" href="{{ route('social') }}">Social Media</a></li>
                            <li><a class="dropdown-item {{ request()->routeIs('em') ? 'select-item' : '' }}" href="{{ route('em') }}">Email Marketing</a></li>
                        </ul>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('aboutus') ? 'active' : '' }}" aria-current="page" href="{{ route('aboutus') }}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('faqs') ? 'active' : '' }}" href="{{ route('faqs') }}">FAQ’s</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contactus') ? 'active' : '' }}" href="{{ route('contactus') }}">Contact</a>
                  </li>
                  <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $currency_code }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-cuurency" id="currency_drop">
                        @foreach (\App\Models\Currency::getActiveCurrencies() as $key => $currency)
                           <li><a class="dropdown-item {{ $currency_code == $currency->code ? 'select-item' : '' }}" href="#" data-currency="{{ $currency->code }}">{{ $currency->code }} ({{ $currency->symbol }})</a></li>
                         @endforeach
                    </ul>
                </li>
                  <li class="nav-item">
                    <a class="nav-link cart-toggle" href="javascript:void(0);">My Cart <span>({{ Session::has('cart') ? count(Session::get('cart')) : '0' }})</span></a>
                    <div class="cart-body" id="card-show">
                      <div class="cartitem-box" id="cart_drop">
                                               
                            <div class="cartbox">
                                @if (Session::has('cart') && count(Session::get('cart')) > 0)   
                                @php
                                    $total = 0;
                                @endphp
                                @foreach (Session::get('cart') as $key => $cartItem)
                                    @php
                                        $product = \App\Models\Product::find($cartItem['id']);
                                        $total = $total + round(convert_price($cartItem['price']*$cartItem['quantity']), 2);
                                    @endphp
                                <div class="cart-item-details">
                                    <div class="cart-item-ine">
                                    <h5>{{ $product->name }}</h5> 
                                    <h5>{{ single_price($cartItem['price']*$cartItem['quantity']) }}</h5>
                                    <img src="{{ asset('frontend/Brandflaire/assest/images/delete-icon.svg') }}" class="img-fluid deleteicon" onclick="removeFromCart({{ $key }})">
                                    </div>
                                    <p>{{ $product->subscription }}</p>
                                </div>
                                @endforeach
                            
                                <div class="cart-subtotal">
                                <h5>Total:</h4>
                                <h4>{{ currency_symbol() }}{{ number_format($total,2) }}</h4>
                                </div>
                                <div class="cart-btn"> 
                                <a href="{{ route( 'home') }}" class="btn btn-black-border">continue shopping</a>
                                <a href="{{ route( 'checkout.shipping_info') }}" class="btn btn-black">checkout</a>
                                </div>
                                @else
                                    <div class="empty-cart">
                                        <p>Your cart is empty</p>
                                    </div>
                                @endif
                            </div>
                       
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="navbar-nav navbar-nav-mo">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route( 'dashboard') }}">My Account</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route( 'user.login') }}">Sign In</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link btn btn-red" href="{{ route( 'user.registration') }}">Sign Up</a>
                    </li>
                    @endauth
                </ul>
              </div>
            </div>
          </nav>
    </header>

   <!-- Cart Modal -->
   <div class="modal" id="customModal">
    <div class="modal-dialog modal-dialog-centered seomodal_outline">
        <div class="modal-content seomodal_content">
            <!-- Modal body -->
            <div class="modal-body seomodal_body">
                <div class="s7_modaltitlebar">
                    <h2 class="s7_modaltitle">Added to cart</h2>
                    <p class="s7_modalsubtitle">Your chosen service has successfully been added to the cart.</p>
                </div>
                <div class="cart_modalbtnbar">
                    <button type="button" class="bnt service_s7btnwhite" onClick="window.location.reload();">Continue Shopping</button>
                    <button type="button" class="bnt service_s7btn" onclick="window.location.href='{{ route( 'checkout.shipping_info') }}'">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>



  
  

    <main>
        @yield('content')
    </main>
    @include('frontend.inc.footer')
    <!-- Essential JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="{{ asset('frontend/Brandflaire/assest/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/Brandflaire/assest/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/Brandflaire/assest/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/Brandflaire/assest/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/Brandflaire/assest/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/Brandflaire/assest/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/Brandflaire/assest/js/main.js') }}"></script>

   
    

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>


    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

    <!-- Custom Scripts -->
    <script>
        $(function() {
            // Header scroll effect
            $(document).scroll(function() {
                var $nav = $(".fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".hamburger_menu").click(function() {
                $(".header_mobo_main_slide").fadeIn("slow");
                $(".hamburger_menu").fadeOut("slow");
                $(".hamburger_menu_close").fadeIn("slow");
                $(".header_cart_mobo_main_slide").fadeOut("slow");
            });
            $(".hamburger_menu_close").click(function() {
                $(".header_mobo_main_slide").fadeOut("slow");
                $(".hamburger_menu").fadeIn("slow");
                $(".hamburger_menu_close").fadeOut("slow");
            });
            $(".cart_menu").click(function() {
                $(".header_cart_mobo_main_slide").fadeIn("slow");
                $(".cart_menu").fadeOut("slow");
                $(".cart_menu_close").fadeIn("slow");
                $(".header_mobo_main_slide").fadeOut("slow");
            });
            $(".cart_menu_close").click(function() {
                $(".header_cart_mobo_main_slide").fadeOut("slow");
                $(".cart_menu").fadeIn("slow");
                $(".cart_menu_close").fadeOut("slow");
            });
        });

        function justDrop(droperId, roterId) {
            const theId = document.getElementById(droperId);
            const theId2 = document.getElementById(roterId);
            if (theId.classList.contains('d-none')) {
                theId.classList.remove('d-none');
                theId2.style.rotate = '180deg';
            } else {
                theId.classList.add('d-none');
                theId2.style.rotate = '0deg';
            }
        }

        function counterMinus(indexPosition) {
            const myId = 'cart_product_units' + indexPosition;
            const inputElement = document.getElementById(myId);
            let currentValue = parseInt(inputElement.value, 10);

            if (isNaN(currentValue)) {
                currentValue = 0;
            }

            if (currentValue > 1) {
                const newValue = currentValue - 1;
                inputElement.value = newValue;
            } else {
                inputElement.value = currentValue;
            }
        }


        function counterPlus(indexPosition) {
            const myId = 'cart_product_units' + indexPosition;
            const inputElement = document.getElementById(myId);
            let currentValue = parseInt(inputElement.value, 10);

            if (isNaN(currentValue)) {
                currentValue = 0;
            }

            if (currentValue < 10) {
                const newValue = currentValue + 1;
                inputElement.value = newValue;
            } else {
                inputElement.value = currentValue;
            }
        }


        //Change Currency
        $(document).ready(function() {
            $('#currency_drop a').on('click', function() {
                let currency_code = $(this).data('currency');

                $.ajax({
                    url: '/currency',
                    type: 'POST',
                    data: {
                        currency_code: currency_code,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status) {
                            location.reload();
                        }
                    }
                });
            });
        });

        // mobile currency change 
        $(document).ready(function() {
            $('#currency_drop_mobo button').on('click', function() {
                let currency_code = $(this).data('currency');

                $.ajax({
                    url: '/currency',
                    type: 'POST',
                    data: {
                        currency_code: currency_code,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status) {
                            location.reload();
                        }
                    }
                });
            });
        });
    </script>

    <script>
        function showFrontendAlert(type, message) {
            let icon = type;
            if (type == 'danger') {
                icon = 'error';
            }

            Swal.fire({
                position: 'center',
                icon: icon,
                title: '<h1 class="text-blue">' + message + '</h1>',
                html: '<p class="body-large text-grey">Please wait while page refreshes</p>',
                showConfirmButton: true,
                confirmButtonText: 'Ok',
                width: 'auto'
            });
        }
    </script>
    @foreach (session('flash_notification', collect())->toArray() as $message)
        <script>
            showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
        </script>
    @endforeach

    {{-- cart section --}}
    <script>
        function updateNavCart() {
            $.post('{{ route('cart.nav_cart') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#cart_items_sidenav').html(data.count);
                $('#cart_drop1').html(data.cart_view);
            });
        }

        function updateCartSummary(data) {
            $('#cart-summary').html(data);
            showFrontendAlert('success', 'Cart updated successfully');
        }

        function removeFromCart(key) {
            $.post('{{ route('cart.removeFromCart') }}', {
                _token: '{{ csrf_token() }}',
                key: key
            }, function(data) {
                updateNavCart();
                updateCartSummary(data);
                if (data.success) {
                    location.reload();
                }
            });
        }

        function updateQuantity(key, element) {
            $.post('{{ route('cart.updateQuantity') }}', {
                _token: '{{ csrf_token() }}',
                key: key,
                quantity: element.value
            }, function(data) {
                updateNavCart();
                updateCartSummary(data);
            });
        }

        function addToCart1Step(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('cart.addToCart1Step') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function(response) {
                    if (response.status == 1) {
                        // Update cart count in navbar
                        updateNavCart();

                        // Show success message
                        // Swal.fire({
                        //     position: 'top-end',

                        //     icon: 'success',
                        //     title: 'Item added to cart!',
                        //     showConfirmButton: false,
                        //     timer: 1500
                            
                        // });
                        $('#customModal').modal('show');
                        
                    } else {
                        // Show error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message || 'Something went wrong!'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Check for authentication error
                    if (xhr.status === 401) {
                        // Redirect to login page or show login modal
                        Swal.fire({
                            icon: 'error',
                            title: 'Authentication Required',
                            text: 'Please log in to add items to your cart',
                            showCancelButton: true,
                            confirmButtonText: 'Login',
                            cancelButtonText: 'Cancel'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '{{ route('user.login') }}';
                            }
                        });
                    } else {
                        // Show general error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        });
                    }
                }
            });
        }


    </script>

    <script>
        function show_purchase_history_details(order_id)
    {
        $('#order-details-modal-body').html(null);

        if(!$('#modal-size').hasClass('modal-lg')){
            $('#modal-size').addClass('modal-lg');
        }

        $.post('{{ route('purchase_history.details') }}', { _token : '{{ @csrf_token() }}', order_id : order_id}, function(data){
            $('#order-details-modal-body').html(data);
            $('#order_details').modal("show");
            $('.c-preloader').hide();
        });
    }
    </script>

   
    
   


    @yield('scripts')
</body>

</html>
