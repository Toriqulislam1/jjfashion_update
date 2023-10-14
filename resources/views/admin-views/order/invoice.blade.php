<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{\App\CPU\translate('invoice')}}</title>
    <meta http-equiv="Content-Type" content="text/html;"/>
    <meta charset="UTF-8">
    <style media="all">
        * {
            margin: 0;
            padding: 0;
            line-height: 1.3;
            font-family: sans-serif;
            color: #333542;
        }

        body{
            font-family: 'Montserrat', sans-serif;
        }

        /* IE 6 */
        * html .footer {
            position: absolute;
            top: expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
        }

        body {
            font-size: .875rem;
        }

        .gry-color *,
        .gry-color {
            color: #333542;
        }

        table {
            width: 100%;
        }

        table th {
            font-weight: normal;
        }

        table.padding th {
            padding: .5rem .7rem;
        }

        table.padding td {
            padding: .7rem;
        }

        table.sm-padding td {
            padding: .2rem .7rem;
        }

        .border-bottom td,
        .border-bottom th {
            border-bottom: 0px solid{{$web_config['primary_color']}};;
        }

        .col-12 {
            width: 100%;
        }

        [class*='col-'] {
            float: left;
            /*border: 1px solid #F3F3F3;*/
        }

        .row:after {
            content: ' ';
            clear: both;
            display: block;
        }

        .wrapper {
            width: 100%;
            height: auto;
            margin: 0 auto;
        }

        .header-height {
            height: 15px;
            border: 1px{{$web_config['primary_color']}};
            background: {{$web_config['primary_color']}};
        }

        .content-height {
            display: flex;
        }

        .customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table.customers {
            background-color: #FFFFFF;
        }

        table.customers > tr {
            background-color: #FFFFFF;
        }

        table.customers tr > td {
            border-top: 5px solid #FFF;
            border-bottom: 5px solid #FFF;
        }

        .header {
            border: 1px solid #ecebeb;
        }

        .customers th {
            /*border: 1px solid #A1CEFF;*/
            padding: 8px;
        }

        .customers td {
            /*border: 1px solid #F3F3F3;*/
            padding: 14px;
        }

        .customers th {
            color: white;
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
        }

        .bg-primary {
            /*font-weight: bold !important;*/
            font-size: 0.95rem !important;
            text-align: left;
            color: white;
            {{--background-color:  {{$web_config['primary_color']}};--}}
              background-color: {{$web_config['primary_color']}};
        }

        .bg-secondary {
            /*font-weight: bold !important;*/
            font-size: 0.95rem !important;
            text-align: left;
            color: #333542 !important;
            background-color: #E6E6E6;
        }

        .big-footer-height {
            height: 250px;
            display: block;
        }

        .table-total {
            font-family: Arial, Helvetica, sans-serif;
        }

        .table-total th, td {
            text-align: left;
            padding: 10px;
        }

        .footer-height {
            height: 75px;
        }

        .for-th {
            color: white;
        {{--border: 1px solid  {{$web_config['primary_color']}};--}}


        }

        .for-th-font-bold {
            /*font-weight: bold !important;*/
            font-size: 0.95rem !important;
            text-align: left !important;
            color: #333542 !important;
            background-color: #E6E6E6;
        }

        .for-tb {
            margin: 10px;
        }

        .for-tb td {
            /*margin: 10px;*/
            border-style: hidden;
        }


        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .small {
            font-size: .85rem;
        }

        .currency {

        }

        .strong {
            font-size: 0.95rem;
        }

        .bold {
            font-weight: bold;
        }

        .for-footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(214, 214, 214);
            height: auto;
            margin: auto;
            text-align: center;
        }

        .flex-start {
            display: flex;
            justify-content: flex-start;
        }

        .flex-end {
            display: flex;
            justify-content: flex-end;
        }

        .flex-between {
            display: flex;
            justify-content: space-between;
        }

        .inline {
            display: inline;
        }

        .content-position {
            padding: 15px 40px;
        }

        .content-position-y {
            padding: 0px 40px;
        }

        .triangle {
            width: 0;
            height: 0;

            border: 22px solid{{$web_config['primary_color']}};;

            border-top-color: transparent;
            border-bottom-color: transparent;
            border-right-color: transparent;
        }

        .triangle2 {
            width: 0;
            height: 0;
            border: 22px solid white;
            border-top-color: white;
            border-bottom-color: white;
            border-right-color: white;
            border-left-color: transparent;
        }

        .h1 {
            font-size: 2em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .h2 {
            font-size: 1.5em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .h4 {
            margin-block-start: 1.33em;
            margin-block-end: 1.33em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        .montserrat-normal-600 {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 6px;
            /* or 150% */


            color: #363B45;
        }

        .montserrat-bold-700 {
            font-family: Montserrat;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 6px;
            /* or 150% */


            color: #363B45;
        }

        .text-white {
            color: white !important;
        }

        .text-white {
            color: rgb(14, 14, 14) !important;
        }

        .bs-0 {
            border-spacing: 0;
        }
    </style>
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">  --}}
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

@php
    use App\Model\BusinessSetting;
    $company_phone =BusinessSetting::where('type', 'company_phone')->first()->value;
    $company_email =BusinessSetting::where('type', 'company_email')->first()->value;
    $company_name =BusinessSetting::where('type', 'company_name')->first()->value;
    $company_web_logo =BusinessSetting::where('type', 'company_web_logo')->first()->value;
    $company_mobile_logo =BusinessSetting::where('type', 'company_mobile_logo')->first()->value;
@endphp

    <table>
        <tr>
            <th style="text-align: left; width: 40%">
                <div><img src="https://jjfashion4u.com/storage/app/public/company/2023-02-01-63da69b248a48.png" alt="" width="100"></div>
                <br>
                <p>Police Plaza Concord Shopping Mall 4th Floor, Lift-3, Shop No. 406, Gulshan.</p>
            </th>
            <th style="width: 60%; text-align:right">
                <h2 style="font-size: 24px">{{\App\CPU\translate('INVOICE')}}</h2>
                <div style="font-size: 17px;letter-spacing: 1px;text-transform:uppercase;color:rgba(46, 45, 45, 0.4)">#{{ $order->id }}</div>
                <br>
                <div style="font-weight: bold">{{\App\CPU\translate('Date:')}} {{date('d-m-Y h:i:s a',strtotime($order['created_at']))}}</div>
            </th>
        </tr>
        <tr>
            <td style="padding: 0;margin-left:0;">
                <br>
                <div style="font-weight: bold">{{\App\CPU\translate('Shipping to:')}}</div>
                <div style="text-align: left">
                    <p>&nbsp;</p>
                    <div>Name: {{$order->customer !=null? $order->customer['f_name'].' '.$order->customer['l_name']:\App\CPU\translate('name_not_found')}}</div>
                    <div>Email: {{$order->customer !=null? $order->customer['email']:\App\CPU\translate('email_not_found')}}</div>
                    <!--<p>{{$order->customer !=null? $order->customer['phone']:\App\CPU\translate('phone_not_found')}}</p>-->
                    <div>Phone: {{$order->customer['phone'] !=null? $order->customer['phone']: $order->shippingAddress['phone']}}</div>

                    <div>Address: {{$order->shippingAddress ? $order->shippingAddress['address'] : ""}}</div>
                    <div>City: {{$order->shippingAddress ? $order->shippingAddress['city'] : ""}} {{$order->shippingAddress ? $order->shippingAddress['zip'] : ""}}</div>
                </div>
            </td>
        </tr>
    </table>

    {{--  Product Information Table  --}}
    <br><br><br>
    <table>
        <thead>
            <tr>
                <th colspan="6"><hr/>
            </tr>
            <tr>
                <th style="font-weight: bold;text-align:center">#</th>
                <th style="font-weight: bold;text-align:center">&nbsp;</th>
                <th style="font-weight: bold;text-align:center">Item & Description</th>
                <th style="font-weight: bold;text-align:center">Rate</th>
                <th style="font-weight: bold;text-align:center">QTY</th>
                <th style="font-weight: bold;text-align:center">Amount</th>
            </tr>
            <tr>
                <th colspan="6"><hr/>
            </tr>
        </thead>
        @php
            $subtotal=0;
            $total=0;
            $sub_total=0;
            $total_tax=0;
            $total_shipping_cost=0;
            $total_discount_on_product=0;
            $ext_discount=0;
        @endphp

        <tbody>
            @foreach($order->details as $key=>$details)
                @php
                $subtotal=($details['price'])*$details->qty;
                $product =  App\Model\Product::findOrFail($details->product_id);
            @endphp
            <tr>
                <td style="text-align: center;font-weight:bold">{{$key+1}}</td>
                <td>
                    <img style="height:79px; width:79px" class="img-fluid"
                    onerror="this.src='{{asset('public/assets/back-end/img/160x160/img2.jpg')}}'"
                    src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product->thumbnail}}"
                    alt="Image Description">
                </td>
                <td>
                    <div style="text-align: center;padding-top:10px;padding-bottom:10px">
                        <span style="font-weight: bold;color:#1f1f1f">{{$details['product']?$details['product']->name:''}}</span>
                        <br>
                        {{\App\CPU\translate('variation')}} : {{$details['variant']}}
                    </div>
                </td>
                <td>
                    <div style="font-family: 'Montserrat' ">
                       TK. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($details['price']))}}
                    </div>
                </td>
                <td>
                    <div>{{$details->qty}}</div>
                </td>
                <td>
                    <div>
                       TK. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($subtotal))}}
                    </div>
                </td>
            </tr>
                @php
                    $sub_total+=$details['price']*$details['qty'];
                    $total_tax+=$details['tax'];
                    $total_shipping_cost+=$details->shipping ? $details->shipping->cost :0;
                    $total_discount_on_product+=$details['discount'];
                    $total+=$subtotal;
                @endphp
            @endforeach
        </tbody>
    </table>

    <?php
        if ($order['extra_discount_type'] == 'percent') {
            $ext_discount = ($sub_total / 100) * $order['extra_discount'];
        } else {
            $ext_discount = $order['extra_discount'];
        }
    ?>

<br> <br>

 {{--  custom design end  --}}

@php($shipping=$order['shipping_cost'])

<table>
    <thead>
        <tr>
            <th colspan="2"><hr/>
        </tr>
        <tr>
            <th style="width: 40%;text-align:left;background:right">
                <div><b>{{\App\CPU\translate('payment_details')}}</b></div>
                <p>{{$order->payment_status}}
                    , {{date('y-m-d',strtotime($order['created_at']))}}</p>
            </th>
            <th>
                <table>
                    <tr>
                        <th style="text-align: right"><b>{{\App\CPU\translate('sub_total')}}</b></th>
                        <th style="text-align:right">Tk. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($sub_total))}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: right"><b>{{\App\CPU\translate('tax')}}: </b></th>
                        <th style="text-align:right">Tk. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($total_tax))}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: right"><b>{{\App\CPU\translate('shipping')}}</b></th>
                        <th style="text-align:right">Tk. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($shipping))}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: right"><b>{{\App\CPU\translate('coupon_discount')}}</b></th>
                        <th style="text-align:right">Tk. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($order->discount_amount))}}</th>
                    </tr>
                    <tr>
                        <th style="text-align: right"><b>{{\App\CPU\translate('discount_on_product')}}</b></th>
                        <th style="text-align:right">Tk. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($total_discount_on_product))}}</th>
                    </tr>
                    <tr>
                        <th colspan="2"><hr/></th>
                    </tr>
                    <tr style="border-top:2px solid #000;background: rgb(241, 239, 239);padding:10px">
                        <th style="text-align: right;font-size:18px"><b>{{\App\CPU\translate('total')}}: </b></th>
                        <th style="text-align:right;font-size: 16px; color: #121111"><b>Tk. {{\App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($order->order_amount))}}</b></th>
                    </tr>
                </table>
            </th>
        </tr>
    </thead>
</table>



</body>
</html>
