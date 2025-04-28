@php
    $order = $emailData['order'];
    $shipping_address = json_decode($order->shipping_address);
@endphp

<!DOCTYPE html>
<html>
<head>
    <title>Your Email Title</title>
</head>
<body>
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center" bgcolor="#f2f2f2" style="padding: 20px 0;">
                <table width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="border-collapse: collapse; box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 0px;">
                            <img src="{{ asset('frontend/BrandSparkz/assets/img/email-header.png') }}" alt="" style="margin: auto; display: block;height:87px;">
                        </td>
                    </tr>
                    <!-- Header End -->

                    <!-- Content -->
                    <tr>
                        <td style="padding: 20px 60px;">
                            <div>
                            <h1 style="font-size:24px; font-weight: 700; text-align: center;color:#3C3C3C;font-family:Arial;text-transform:capitalise;">Transaction Confirmation</h1>
                            <p style="font-size: 16px; font-weight: 500px; color:#656565;text-align: center;line-height: 150%;font-family:Arial;">Dear {{ $shipping_address->name }},<br><br>
                                We appreciate your order. <br>
                                Here's a summary of your recent purchase.
                               </p>
                               <table width="100%" cellspacing="0" cellpadding="10" border="0" style="border-collapse: collapse;margin-top:24px;">
                                <td align="center">
                                     <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="margin-bottom:25px;margin-top:10px;height:50px; v-text-anchor:middle; width:190px;" arcsize="0%"  stroke="f" fillcolor="#D4B88E"><w:anchorlock/><center style="padding-top:20px;padding-bottom:20px;color:#000000;font-size:20px"><![endif]-->
                                     <a href="#" style="color:#FFFFFF;background:#EE5921;padding:16px 40px;font-size: 14px;font-weight:600;text-decoration:none;font-family:Arial;line-height:22px;border-radius:2px;text-transform:capitalize;">Browse services</a>
                                      <!--[if mso]></center></v:roundrect><![endif]-->
                                </td>   
                               </table>
                             </div>

                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 40px;padding-bottom:40px;">
                            <p style="font-size: 16px; font-weight:700;text-transform:capitalize;font-family:Arial;color:#0E0E0E;text-align:center;">Billing Details:</p>
                            <table>
                                <tr style="font-size: 16px; font-weight: 400; color:#656565;  padding: 5px;line-height:26px;">
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->name }}</td>
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->email }}</td>
                                </tr>
                                <tr style="font-size: 16px; font-weight: 400; color:#656565;  padding: 5px;line-height:26px;">
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->address }}</td>
                                    <td style="width:242px;text-align:center;">{{ $shipping_address->phone }}</td>
                                </tr>
                            </table>
                            <table style="margin-top:40px;padding:24px;">
                                @php
                                    $total = 0; 
                                @endphp
                                @foreach($order->orderDetails as $key => $orderDetail)
                                    @if($orderDetail->product != null)
                                        @php
                                            $product = \App\Models\Product::find($orderDetail->product->id);
                                            $total = $total + round(convert_price($orderDetail->price), 2);
                                        @endphp
                                <tr>
                                   <td style="width:236px;">
                                        <p style="font-family: Arial;font-weight:400;font-size: 16px;line-height: 27px;letter-spacing: 0px;vertical-align: middle;color: #1C1F26;margin: 0px;">
                                           <b>{{ $orderDetail->product->name }}</b>
                                        </p>
                                   </td>
                                   <td style="width:100px;">
                                    <p style="font-family: Arial;font-weight:400;font-size: 16px;line-height: 27px;letter-spacing: 0px;vertical-align: middle;color: #1C1F26;margin: 0px;text-align: center;">
                                        {{ $orderDetail->product->subscription }}<
                                    </p>
                               </td> 
                                   <td style="width:50px;">
                                <p style="font-family: Arial;font-weight:400;font-size: 16px;line-height: 27px;letter-spacing: 0px;vertical-align: middle;color: #1C1F26;margin: 0px;text-align: center;">
                                    {{ $orderDetail->quantity }}
                                </p>
                           </td> 
                                   <td style="width:150px;">
                                        <p style="font-family: Arial;font-weight:400;font-size: 16px;line-height: 27px;letter-spacing: 0px;vertical-align: middle;color: #1C1F26;margin: 0px;text-align: center;">
                                            {{ single_price($orderDetail->price) }}
                                        </p>
                                   </td> 
                                </tr>
                                @endif
                                @endforeach
                                <tr>
                                    <td colspan="4">
                                          <p style="height: 2px;border-top: 1px solid #F3F3F1"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                         <p style="font-family: Arial;font-weight:700;font-size:16px;line-height: 27px;letter-spacing: 0px;vertical-align: middle;color:black;margin: 0px;text-align: right;">
                                            Total
                                         </p>
                                    </td>
                                    <td>
                                         <p style="font-family: Arial;font-weight:700;font-size:16px;line-height: 27px;letter-spacing: 0px;vertical-align: middle;color: #EE5921;margin: 0px;text-align: center;">
                                            {{ currency_symbol() }}{{ $total }}
                                         </p>
                                    </td> 
                                 </tr>
                            </table>  
                        </td>
                    </tr>     
                   <!-----------Footer----------->
                   <tr>
                    <td>
                         <!--[if mso]><style>.outlook-back {background: #1F3436 !important;height: 160px;}</style><![endif]-->  
                        <table width="100%" cellspacing="0" cellpadding="" border="0px" style="border-collapse: collapse;"> 
                            <tr style="background: url('{{ asset('frontend/BrandSparkz/assets/img/footer-bg.png') }}'); height:157px; padding:50px; background-size:cover;">
                                <td style="text-align:center;"><img src="img/Logo.png" alt="">
                               
                                </td> 
                                <td style="text-align:right;">
                                    <p style="font-size: 16px; font-weight:400; color:#3C3C3C;font-style: normal;font-family:Arial;line-height:24px;padding-right:40px;">
                                    info@Companyname.com<br>
                                    123 Main Street, <br>
                                    New York, 10030 
                                    </p>
                                </td>           
                            </tr>
                            <tr>              
                        </table>
                    </td>
                </tr> 
                <!-----------Footer End-----------> 
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

