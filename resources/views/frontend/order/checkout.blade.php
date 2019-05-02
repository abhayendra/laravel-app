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
                        <input type="text"  placeholder="Search destination, small group tours, hotel, cruise, deals" class="fld1"> <button class="btn1">Search</button>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Tour</a></li>
                    <li><a href="#">Niagara Falls Boat Tour: Voyage to the Falls</a></li>
                    <li class="active">Checkout</li>
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
              {!! Form::open(['url'=>'order/save-order']) !!}
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Checkout</h1>
                    @foreach($cartCollection->toArray() as $cart)
                     @php $tourdetail = \App\Helpers\Helper::tourDetails($cart['id']); @endphp
                    <h2>{{ $cart['name'] }}
                        <span>{!! date('l, d M Y ', strtotime($cart['attributes']['date_of_booking'])) !!} {!! $tourdetail->departure_time !!}</span>
                    </h2>

                    <input type="hidden" name="tour_id[]" value="{!! $tourdetail->id !!}">
                    <input type="hidden" name="booking_date[]" value="{!! $cart['attributes']['date_of_booking'] !!}" >

                    @endforeach

                    <ul class="breadcrumb_checkout">
                        <li class="active2">Traveler Info</li>
                        <li>Payment Info</li>
                        <li>Completed</li>
                    </ul>
                    <div class="checkout_fld_wra">
                        <h3>Traveler Details</h3>
                        <div class="row">
                            <div class="col-lg-12"><label for="lead">Lead Traveler (Adult)</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input name="traveler_first_name" id="lead" type="text" placeholder="First Name*" class="fld3"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input name="traveler_last_name" type="text" placeholder="Last Name*"  class="fld3"></div>
                        </div>
                    </div>
                    <div class="checkout_fld_wra">
                        <h3>Contact Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="mail">Contact Email</label>
                                <input name="email" id="lead" type="email" placeholder="Email Address*" class="fld3">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="text">Phone Number</label>
                                <input name="phone" type="text" placeholder="Mobile Number*"  class="fld3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="country">Country</label>
                                <select name="country_id" class="sel">
                                    <option value="1">Canada</option>
                                    <option value="2">USA</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="text">Receive our email offers and updates? *</label>
                                <select  name="newsletter"  class="sel">
                                    <option value="1">Yes, please!</option>
                                    <option value="0">No, I don't want deals and exclusives!</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="mail">Reservation Request</label>
                                <textarea name="additional_request" cols="" rows="4" placeholder="optional" class="txtarea"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn4">Proceed to Payment <i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="summary_wra">
                        <h3>Your Booking Summary </h3>
                        @php $i=1;  @endphp
                        @foreach($cartCollection->toArray() as $cart)
                        <h4>{!! $cart['name'] !!}</h4>
                         @php $tourdetail = \App\Helpers\Helper::tourDetails($cart['id']); @endphp

                         @php $travlers = array_except($cart[attributes],[date_of_booking]);  @endphp

                        @foreach($travlers as $type=>$count)
                        <div class="srart"><span>{!! $count !!}  {!! ucfirst($type) !!} X {!!  "200";  !!} </span> </div>
                        @endforeach

                        <div class="srart"><span>Tour Location:</span> {!! $tourdetail->tour_location !!} </div>
                        <div class="srart"><span>Meeting Point:</span> {!! $tourdetail->tour_from !!}</div>
                        <div class="srart"><span>Departure Time:</span> {!! $tourdetail->departure_time !!} Daily</div>
                        @php  $total[$i] = $cart['price']*$cart['quantity'];  $i++;  @endphp
                        @endforeach

                        <div class="total">Total Price <span>CA$ @php  echo array_sum($total);  @endphp </span>
                        <div class="clearfix"></div></div>
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
