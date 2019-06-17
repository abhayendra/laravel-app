@extends('frontend.layout.app')
@section('content')
    @php
    $cartCollection = Cart::getContent();
    @endphp
            <!--mobile search-->
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
                    <li><a href="{!! url('/checkout') !!}">Checkout</a></li>
                    <li class="active">Payment</li>
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
                    @foreach($cartCollection->toArray() as $cart)
                        @php $tourdetail = \App\Helpers\Helper::tourDetails($cart['id']); @endphp
                        @php $price = \App\Helpers\Helper::tourPrice($cart['id']);   @endphp
                        <h2>
                            {{ $cart['name'] }}
                            <span>{!! date('l, d M Y ', strtotime($cart['attributes']['date_of_booking'])) !!} {!! $tourdetail->departure_time !!}</span>
                        <span>
                            @php
                            unset($cart['attributes']['date_of_booking']);
                            @endphp
                            @foreach($cart['attributes'] as $key=>$val)
                                @php echo $val."  ".$key ." "  @endphp
                            @endforeach
                        </span>

                        </h2>
                        <input type="hidden" name="tour_id[]" value="{!! $tourdetail->id !!}">
                        <input type="hidden" name="booking_date[]" value="{!! $cart['attributes']['date_of_booking'] !!}" >

                    @endforeach
                    <ul class="breadcrumb_checkout">
                        <li>Traveler Info</li>
                        <li class="active2">Payment Info</li>
                        <li>Completed</li>
                    </ul>

                    <div class="checkout_fld_wra">
                        <h3>Payment Details</h3>
                        <div class="row">
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                                  data-cc-on-file="false"
                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                  id="payment-form">
                                {!! csrf_field() !!}
                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group required'>
                                        <label class='control-label'>Name on Card</label> <input
                                                class='fld3' size='4' type='text'>
                                    </div>
                                </div>
                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group card required'>
                                        <label class='control-label'>Card Number</label> <input
                                                autocomplete='off' class='fld3 card-number' size='20'
                                                type='text'>
                                    </div>
                                </div>
                                <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                        <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                        class='fld3 card-cvc' placeholder='ex. 311' size='4'
                                                                                        type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Month</label> <input
                                                class='fld3 card-expiry-month' placeholder='MM' size='2'
                                                type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                        <label class='control-label'>Expiration Year</label> <input
                                                class='fld3 card-expiry-year' placeholder='YYYY' size='4'
                                                type='text'>
                                    </div>
                                </div>

                                <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                        <div class='alert-danger alert'>Please correct the errors and try
                                            again.</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn4">Pay Now<i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="summary_wra">
                        <h3>Your Booking Summary </h3>
                        @php $i=1;  @endphp
                        @foreach($cartCollection->toArray() as $cart)
                            @php
                            $price = \App\Helpers\Helper::tourPriceTraveler($cart['id']);
                            @endphp
                            <h4>{!! $cart['name'] !!}</h4>
                            @php $tourdetail = \App\Helpers\Helper::tourDetails($cart['id']); @endphp
                            @php $travlers = array_except($cart['attributes'],['date_of_booking']);  @endphp
                            @php $i=1;  @endphp
                            @foreach($travlers as $type=>$count)
                                <div class="srart"><span>{!! $count !!}  {!! ucfirst($type) !!} X CA$ {!! $price[$type]  !!}  </span> </div>
                                @php
                                $total[$i] = $count*$price[$type];  $i++;
                                @endphp
                            @endforeach
                            <div class="srart"><span>Tour Location:</span> {!! $tourdetail->location !!} </div>
                            <div class="srart"><span>Meeting Point:</span> {!! $tourdetail->departure_point !!}</div>
                            <div class="srart"><span>Departure Time:</span> {!! $tourdetail->departure_time !!} </div>
                            @php $subtotal[$y] = array_sum($total); $y++;  @endphp
                        @endforeach
                        <div class="total">Total Price <span>CA$ @php  echo array_sum($subtotal);  @endphp </span>
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
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {
            var $form         = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form         = $(".require-validation"),
                        inputSelector = ['input[type=email]', 'input[type=password]',
                            'input[type=text]', 'input[type=file]',
                            'textarea'].join(', '),
                        $inputs       = $form.find('.required').find(inputSelector),
                        $errorMessage = $form.find('div.error'),
                        valid         = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                            .removeClass('hide')
                            .find('.alert')
                            .text(response.error.message);
                } else {
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>
@endsection