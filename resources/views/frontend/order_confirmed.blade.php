@extends('frontend.layouts.app')
@section('content')
    @if (Session::has('order_code'))
        @php
            $order_code = Session::get('order_code');
        @endphp
    @else
        @php
            $order_code = 'Session expired';
        @endphp
    @endif

    @if (Session::has('order_date'))
        @php
            $order_date = Session::get('order_date');
        @endphp
    @else
        @php
            $order_date = 'Session expired';
        @endphp
    @endif

    

    <section class="sucess_secure">
    <div class="container px-0">
      <div class="upper_box">
        <h5 class="succes_full">Payment was successful</h5>
<p>Your payment was successful! Thank you for your purchase.</p>
      </div>
      <div class="lower_box">
          <div class="orfer_text">
            <h4>Order Summary</h4>
          </div>
          <div class="box_db">
            @php
                $total=0;
            @endphp
            @foreach ($order as $key => $orderDetail)
            @php
               $product = \App\Models\Product::find($orderDetail->product->id);
               $total = $total + round(convert_price($orderDetail->price),2);                           
            @endphp
            <div class="cart_inner">
              <div class="cart_inner_top">
                <div class="cart_inner_left">
                  <p class="cart_prod_title"><b>{{ $product->name }}</b></p>
                </div>
                <div class="cart_inner_right">
                  <p class="cart_prod_price">{{ single_price($orderDetail->price) }}</p>
                  <!--<img src="{{ asset('frontend/Brandflaire/assest/images/del.svg') }}" alt="" class="img-fluid">-->
                </div>
              </div>
              <div class="cart_inner_bottom">
                <p class="cart_duration">{{ $product->subscription }}</p>
              </div>
            </div>
            <div class="cart_stroke"></div>
            @endforeach
          </div>
          <div class="cart_total">
            <h3 class="total_label">Total:</h3>
            <h3 class="total_price">{{ currency_symbol() }}{{ number_format($total,2) }}</h3>
          </div>
          <a class="nav-link btn botto_black" href="{{ route('home') }}">Return Home</a>
      </div>
  </section>

@endsection
@section('script')
   
@endsection
