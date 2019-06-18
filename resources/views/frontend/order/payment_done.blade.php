@extends('frontend.layout.app')
@section('content')
        <!--mobile search-->
@php
$cartCollection = Cart::getContent();
@endphp

<div class="mobile_search">
    <input name="" type="text" placeholder="Search Niagara Falls"> <span id="search_hide"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>
<!--end mobile search-->
<!--search-->
<div class="search_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="fld_wra">
                    {!! Form::open(['url'=>'/tours/','method'=>'get']) !!}
                    <input type="text" name="search" value="" id="search-box" autocomplete="off" placeholder="Where Do You Want to Go?" class="fld1"> <button type="submit" class="btn1">Find Tours</button>
                    <div class="search_dd" id="suggesstion-box">
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!--end search-->
<!--breadcrumb-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb-my">
                <li><a href="{!! url('/') !!}">Home</a></li>
                <li><a href="{!! url('/tours') !!}">Tour</a></li>
                <li class="active">Payment Done </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<!--Popular Destinations-->
<div class="checkout_wra">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h1>Checkout</h1>
                <ul class="breadcrumb_checkout">
                    <li class="active20">Traveler Info</li>
                    <li class="active20">Payment Info</li>
                    <li class="active20">Completed</li>
                </ul>

                <div class="checkout_fld_wra">
                    <div class="thank">
                        THANK YOU<span>YOUR BOOKING IS COMPLETE</span>
                    </div>
                     @foreach($orders as $order)
                     @php $cartInfo = json_decode($order->cart_information,true) ;
                     $cartInfo = $cartInfo[$order->tour_id];
                     @endphp
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="booking_tbl">
                        <tbody>
                        <tr><h2>{!! $order->title !!}</h2></tr>
                        <tr>
                            <td width="50%">
                                <h3>Customer Details</h3>
                                <ul>
                                    <li><i class="fa fa-users"></i> {!! $cartInfo['quantity'] !!} Reserved</li>
                                    <li><i class="fa fa-envelope"></i> {!! $order->email !!}</li>
                                    <li><i class="fa fa-phone"></i> {!! $order->phone !!}</li>
                                </ul>
                            </td>

                            @php
                                $price = \App\Helpers\Helper::tourPriceTraveler($order->tour_id);
                            @endphp

                            <td width="50%">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    @foreach($price as $key=>$val)
                                        @if($cartInfo['attributes'][$key]>0)
                                    <tr>
                                        <td>{!! $key !!} ({!! $cartInfo['attributes'][$key]  !!} × CA$ {!! $val !!})</td>
                                        <td>CA${!! $cartInfo['attributes'][$key]*$val !!}</td>
                                    </tr>
                                     @endif
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>CA${!! $order->total_amount !!}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h3>Tour Detail</h3>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="booking_detail_tbl">
                                    <tbody><tr>
                                        <td>Start Date Time: </td>
                                        <td>{!! $order->departure_time !!}{!! date('d M Y',strtotime($order->booking_date)) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>End Date Time:</td>
                                        <td>{!! $order->return_time !!} {!! date('d M Y',strtotime($order->booking_date)) !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Meeting Point:</td>
                                        <td>{!! $order->departure_time !!} , {!! $order->departure_point !!} </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    @endforeach
                    <div class="instruction">
                        <h4>Customer Instructions</h4>
                        <ul>
                            <li><i class="fa fa-check"></i> Customer must confirm their booking and pickup address.</li>
                            <li><i class="fa fa-check"></i> Wear comfortable shoes.</li>
                            <li><i class="fa fa-check"></i> This product operates rain or shine, except in the case of extreme weather events like hurricanes.</li>
                            <li><i class="fa fa-check"></i> There is a moderate amount of walking. Niagara-on-the-Lake is an older town and is not wheelchair accessible.</li>
                            <li><i class="fa fa-check"></i> Dress weather appropriate.</li>
                            <li><i class="fa fa-check"></i> Confirmation email will be sent within 24 hours of booking this tour or activity</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="summary_wra">
                    <h3>Why booking with us?</h3>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="completed_right_tbl">
                        <tr>
                            <td><i class="fa fa-thumbs-up"></i></td>
                            <td>
                                <h5>NO BOOKING CHARGES</h5>
                                <p>We don't charge you an extra fee for booking a hotel room with us</p>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-credit-card"></i></td>
                            <td>
                                <h5>NO CANCELLATION SEES</h5>
                                <p>We don't charge you a cancellation or modification fee in case plans change</p>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-inbox"></i></td>
                            <td>
                                <h5>INSTANT CONFIRMATION</h5>
                                <p>Instant booking confirmation whether booking online or via the telephone</p>
                            </td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-calendar"></i></td>
                            <td>
                                <h5>FLEXIBLE BOOKING</h5>
                                <p>You can book up to a whole year in advance or right up until the moment of your stay</p>
                            </td>
                        </tr>
                    </table>


                    <div class="risk_free">Risk free: You can cancel later, so lock in this great price today.</div>
                    <div class="demand"><span>In high demand!</span> Booked 7 times in the last 24 hours</div>
                    <div class="booking_help">Having trouble booking online?<br>
                        Call +1 (123) 456-7890</div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end Popular Destinations-->
@endsection
