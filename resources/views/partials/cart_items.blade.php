@if (Session::has('cart') && count(Session::get('cart')) > 0)
    @foreach (Session::get('cart') as $key => $cartItem)
        @php
            $product = \App\Models\Product::find($cartItem['id']);
        @endphp
        <div class="cart-item">
            <div class="cart-item-img">
                <img src="{{ asset($product->thumbnail_img) }}" alt="{{ $product->name }}">
            </div>
            <div class="cart-item-details">
                <h4>{{ $product->name }}</h4>
                <p>Quantity: {{ $cartItem['quantity'] }}</p>
                <p>Price: {{ single_price($cartItem['price']) }}</p>
            </div>
            <button class="remove-cart-item" onclick="removeFromCart({{ $key }})">
                <i class="fa fa-trash"></i>
            </button>
        </div>
    @endforeach
    <div class="cart-footer">
        <div class="total">
            Total:
            {{ single_price(array_sum(array_column(Session::get('cart')->toArray(), 'price'))) }}
        </div>
        <a href="{{ route('cart') }}" class="btn btn_redd">View Cart</a>
    </div>
@else
    <div class="empty-cart">
        <p>Your cart is empty</p>
    </div>
@endif
