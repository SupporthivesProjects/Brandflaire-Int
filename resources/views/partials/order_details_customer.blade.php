

<div class="modal-header">
    <h5 class="modal-title strong-600 heading-5">{{__('Order id')}}: {{ $order->code }}</h5>
    
    <button type="button" class="close absolute-close-btn" style="background: transparent;border: 0;font-size: 20px;"
                data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
</div>

@php
    //dump($order);
    $status = $order->orderDetails->first()->delivery_status;
    $refund_request_addon = \App\Models\Addon::where('unique_identifier', 'refund_request')->first();
@endphp



    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal_outline">
            <div class="modal-content modal_content">
                <!-- Modal body -->
                <div class="modal-body modal_body">
                    <div class="modal_titlebar">
                        <h5 class="modal_id">{{__('Order id')}}: {{ $order->code }}</h5>
                        <img src="{{ asset('frontend/Brandflaire/assest/images/modal_close.svg') }}" class="modal_close">
                    </div>
                    <div class="modal_contentbar">
                        <div class="modal_contenttop">
                            <div class="modal_statusbar">
                                <img src="{{ asset('frontend/Brandflaire/assest/images/modal_progresscheck.svg') }}">
                                <p class="modal_progresstitle">Order Placed</p>
                            </div>
                            <img src="{{ asset('frontend/Brandflaire/assest/images/modal_progressarrow.svg') }}">
                            <div class="modal_statusbar">
                                <img src="{{ asset('frontend/Brandflaire/assest/images/modal_progresscheck.svg') }}">
                                <p class="modal_progresstitle">On Review</p>
                            </div>
                            <img src="{{ asset('frontend/Brandflaire/assest/images/modal_progressarrow.svg') }}">
                            <div class="modal_statusbar">
                                <img src="{{ asset('frontend/Brandflaire/assest/images/modal_progresspending.svg') }}">
                                <p class="modal_pendingtitle">Delivery Pending</p>
                            </div>
                            <img src="{{ asset('frontend/Brandflaire/assest/images/modal_progressarrow.svg') }}">
                            <div class="modal_statusbar">
                                <img src="{{ asset('frontend/Brandflaire/assest/images/modal_progresspending.svg') }}">
                                <p class="modal_pendingtitle">Order Delivered</p>
                            </div>
                        </div>
                        <p class="order_swipetext desktop_none mx-auto">Swipe left and right to view the table.</p>
                        <div class="modal_contentmid">
                            <div class="modal_table1main">
                                <div class="modal_tablebar1">
                                    <div class="modal_table1titlebar">
                                        <p class="modal_table1title">Order Overview</p>
                                    </div>
                                    <div class="table-responsive modal_tablemain w-100">
                                        <table class="table table-borderless mb-0 modal_table">
                                            <thead class="modal_table href">
                                                <tr class="align-middle">
                                                    <th scope="col">
                                                        <p class="modal_tabletitle">#</p>
                                                    </th>
                                                    <th scope="col">
                                                        <p class="modal_tabletitle">Product</p>
                                                    </th>
                                                    <th scope="col">
                                                        <p class="modal_tabletitle">Qty</p>
                                                    </th>
                                                    <th scope="col">
                                                        <p class="modal_tabletitle">Price</p>
                                                         @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                                                            <th>{{__('Refund')}}</th>
                                                        @endif
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->orderDetails as $key => $orderDetail)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>
                                                            @if ($orderDetail->product != null)
                                                                <a href="{{ route('product', $orderDetail->product->slug) }}" target="_blank">{{ $orderDetail->product->name }}</a>
                                                            @else
                                                                <strong>{{ __('Product Unavailable') }}</strong>
                                                            @endif
                                                        </td>
                                                        
                                                        <td>
                                                            {{ $orderDetail->quantity }}
                                                        </td>
                                                        <td>{{ single_price($orderDetail->price) }}</td>
                                                        @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                                                            @php
                                                                $no_of_max_day = \App\Models\BusinessSetting::where('type', 'refund_request_time')->first()->value;
                                                                $last_refund_date = $orderDetail->created_at->addDays($no_of_max_day);
                                                                $today_date = Carbon\Carbon::now();
                                                            @endphp
                                                            <td>
                                                                @if ($orderDetail->product != null && $orderDetail->product->refundable != 0 && $orderDetail->refund_request == null && $today_date <= $last_refund_date && $orderDetail->delivery_status == 'delivered')
                                                                    <a href="{{route('refund_request_send_page', $orderDetail->id)}}" class="btn btn-styled btn-sm btn-base-1">{{ __('Send') }}</a>
                                                                @elseif ($orderDetail->refund_request != null && $orderDetail->refund_request->refund_status == 0)
                                                                    <span class="strong-600">{{ __('Pending') }}</span>
                                                                @elseif ($orderDetail->refund_request != null && $orderDetail->refund_request->refund_status == 1)
                                                                    <span class="strong-600">{{ __('Approved') }}</span>
                                                                @elseif ($orderDetail->product->refundable != 0)
                                                                    <span class="strong-600">{{ __('N/A') }}</span>
                                                                @else
                                                                    <span class="strong-600">{{ __('Non-refundable') }}</span>
                                                                @endif
                                                            </td>
                                                        @endif
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal_table2main">
                                <div class="modal_tablebar2">
                                    <div class="modal_table2titlebar">
                                        <p class="modal_table2title">Order Amount</p>
                                    </div>
                                    <div class="modal_table2contentbar">
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">{{__('Subtotal')}}</p>
                                            <p class="modal_table2contentsubtitle">{{ single_price($order->orderDetails->sum('price')) }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">{{__('Tax')}}</p>
                                            <p class="modal_table2contentsubtitle">{{ single_price($order->orderDetails->sum('tax')) }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">{{__('Coupon Discount')}}</p>
                                            <p class="modal_table2contentsubtitle">{{ single_price($order->coupon_discount) }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">{{__('Total')}}</p>
                                            <p class="modal_table2contentsubtitle">{{ currency_symbol().''.number_format($order->grand_total,2) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal_contentmid">
                            <div class="modal_table2main w-100">
                                <div class="modal_tablebar2 w-100">
                                    <div class="modal_table2titlebar">
                                        <p class="modal_table2title">Order Details</p>
                                    </div>
                                    <div class="modal_table2contentbar">
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Order #:</p>
                                            <p class="modal_table2contentsubtitle">{{ $order->code }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Order Date:</p>
                                            <p class="modal_table2contentsubtitle">{{ date('d-m-Y H:m A', $order->date) }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Status:</p>
                                            <p class="modal_table2contentsubtitle">{{ ($order->payment_status == 'paid') ? 'Paid' : 'Failed' }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Total:</p>
                                            <p class="modal_table2contentsubtitle">{{ single_price($order->orderDetails->sum('price') + $order->orderDetails->sum('tax')) }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Payment Method:</p>
                                            <p class="modal_table2contentsubtitle">Debit/Credit Card</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal_table2main w-100">
                                <div class="modal_tablebar2 w-100">
                                    <div class="modal_table2titlebar">
                                        <p class="modal_table2title">Order Amount</p>
                                    </div>
                                    <div class="modal_table2contentbar">
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Name:</p>
                                            <p class="modal_table2contentsubtitle">{{ ($order->shipping_address)->name }}</p>
                                        </div>
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Email:</p>
                                            @if ($order->user_id != null)
                                                <p class="modal_table2contentsubtitle">{{ $order->user->email }}</p>
                                            @endif
                                            
                                        </div>
                                         <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Phone:</p>
                                            <p class="modal_table2contentsubtitle">{{ $order->user->phone }}</p>
                                        </div> 
                                        <div class="modal_table2contentline">
                                            <p class="modal_table2contenttitle">Billing Address:</p>
                                            <p class="modal_table2contentsubtitle" style="max-width: 120px;">
                                                {{ json_decode($order->shipping_address)->address }}, {{ json_decode($order->shipping_address)->city }}, {{ json_decode($order->shipping_address)->country }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


