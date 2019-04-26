<?php $__env->startSection('content'); ?>
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
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Checkout</h1>
                    <h2>Niagara Falls Boat Tour: Voyage to the Falls
                        <span>Friday, 29 May 2015 05:50 Departures</span>
                    </h2>
                    <ul class="breadcrumb_checkout">
                        <li>Traveler Info</li>
                        <li class="active2">Payment Info</li>
                        <li>Completed</li>
                    </ul>

                    <div class="checkout_fld_wra">
                        <h3>Payment Details</h3>
                        <div class="row">
                            <div class="col-lg-12"><label for="cardholder">Cardholder Name*</label></div>
                            <div class="col-lg-12"><input name="" id="cardholder" type="text" placeholder="" class="fld4"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"><label for="traveler2">Credit Card Number*</label>
                                <div class="pay_icon"><img src="images/visa_icon.png" alt=""> <img src="images/mastercard_icon.png" alt=""> <img src="images/discover_icon.png" alt=""> <img src="images/american_icon.png" alt="">
                                </div></div>
                            <div class="col-lg-12"><input name="" id="traveler2" type="text" placeholder="" class="fld4"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                        <label for="mail">Expiration Date*</label>
                                        <select class="sel">
                                            <option>MM</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                            <option>06</option>
                                            <option>07</option>
                                            <option>08</option>
                                            <option>09</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                                        <label for="mail">Expiration Date*</label>
                                        <select class="sel">
                                            <option>YY</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label for="text">CVV Number*</label>
                                <input name="" type="text" placeholder=""  class="fld3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="country">Country</label>
                                <select class="sel">
                                    <option>USA</option>
                                    <option>CANADA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn4">Book Now</button>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="summary_wra">
                        <h3>Your Booking Summary</h3>
                        <h4>Niagara Falls Boat Tour: Voyage to the Falls</h4>
                        <div class="srart"><span>Start Date:</span> 2018-10-24(Wed)</div>
                        <div class="srart"><span>End Date:</span> 2018-10-25(Thu)</div>
                        <div class="srart"><span>Meeting Point:</span> 7:00am In front of the Voi Salon & Spa
                            253 NJ-18, East Brunswick, NJ 08816</div>
                        <div class="total">Total Price <span>US$79.89</span><div class="clearfix"></div></div>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>