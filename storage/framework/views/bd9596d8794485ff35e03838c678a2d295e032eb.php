<?php $__env->startSection('content'); ?>
    <?php
    $cartCollection = Cart::getContent();
    ?>
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
                        <?php echo Form::open(['url'=>'/tours/','method'=>'get']); ?>

                        <input type="text" name="search" value="" id="search-box" autocomplete="off" placeholder="Where Do You Want to Go?" class="fld1"> <button type="submit" class="btn1">Find Tours</button>
                        <div class="search_dd" id="suggesstion-box">
                        </div>
                        <?php echo Form::close(); ?>

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
                    <li><a href="<?php echo url('/'); ?>">Home</a></li>
                    <li><a href="<?php echo url('/tours'); ?>">Tour</a></li>
                    <li><a href="<?php echo url('/checkout'); ?>">Checkout</a></li>
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
                    <?php $__currentLoopData = $cartCollection->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $tourdetail = \App\Helpers\Helper::tourDetails($cart['id']); ?>
                        <?php $price = \App\Helpers\Helper::tourPrice($cart['id']);   ?>
                        <h2>
                            <?php echo e($cart['name']); ?>

                            <span><?php echo date('l, d M Y ', strtotime($cart['attributes']['date_of_booking'])); ?> <?php echo $tourdetail->departure_time; ?></span>
                        <span>
                            <?php
                            unset($cart['attributes']['date_of_booking']);
                            ?>
                            <?php $__currentLoopData = $cart['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $val."  ".$key ." "  ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </span>

                        </h2>
                        <input type="hidden" name="tour_id[]" value="<?php echo $tourdetail->id; ?>">
                        <input type="hidden" name="booking_date[]" value="<?php echo $cart['attributes']['date_of_booking']; ?>" >

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <ul class="breadcrumb_checkout">
                        <li class="active20">Traveler Info</li>
                        <li class="active2">Payment Info</li>
                        <li>Completed</li>
                    </ul>

                    <div class="checkout_fld_wra">
                        <h3>Payment Details</h3>
                        <div class="row1">
                            <?php if(Session::has('success')): ?>
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p><?php echo e(Session::get('success')); ?></p>
                                </div>
                            <?php endif; ?>
                            <form role="form" action="<?php echo e(route('stripe.post')); ?>" method="post" class="require-validation"
                                  data-cc-on-file="false"
                                  data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>"
                                  id="payment-form" autocomplete="off">
                                <?php echo csrf_field(); ?>

                                <div class='form-row row'>
                                    <div class='col-xs-12 required'>
                                        <label class='control-label'>Name on Card</label> <input
                                                class='fld3' size='4' type='text' autocomplete="off">
                                    </div>
                                </div>
                                <div class='form-row row'>
                                    <div class='col-xs-12 card required'>
                                        <label class='control-label'>Card Number</label> <input
                                                autocomplete='off' class='fld3 card-number' size='20'
                                                type='text' autocomplete="off">
                                    </div>
                                </div>
                                <div class='form-row form-group row'>
                                    <div class='col-xs-12 col-md-4 expiration required'>
                                        <label class='control-label'>Expiration Month</label> <!--<input
                                                class='fld3 card-expiry-month' placeholder='MM' size='2'
                                                type='text' autocomplete="off" maxlength="2">-->
                                                <select class='fld3 card-expiry-month'>
                                                  <option value="01">01 (Jan)</option>
                                                  <option value="02">02 (Feb)</option>
                                                  <option value="03">03 (Mar)</option>
                                                  <option value="04">04 (Apr)</option>
                                                  <option value="05">05 (May)</option>
                                                  <option value="06">06 (Jun)</option>
                                                  <option value="07">07 (Jul)</option>
                                                  <option value="08">08 (Aug)</option>
                                                  <option value="09">09 (Sep)</option>
                                                  <option value="10">10 (Oct)</option>
                                                  <option value="11">11 (Nov)</option>
                                                  <option value="12">12 (Dec)</option>
                                                </select>
                                    </div>
                                    <div class='col-xs-12 col-md-4 expiration required'>
                                        <label class='control-label'>Expiration Year</label> <!--<input
                                                class='fld3 card-expiry-year' placeholder='YYYY' size='4'
                                                type='text' autocomplete="off" maxlength="4">-->
                                                <select class='fld3 card-expiry-year'>
                                                  <option value="19">2019</option>
                                                  <option value="20">2020</option>
                                                  <option value="21">2021</option>
                                                  <option value="22">2022</option>
                                                  <option value="23">2023</option>
                                                  <option value="24">2024</option>
                                                </select>
                                    </div>
                                    <div class='col-xs-12 col-md-4 cvc required'>
                                        <label class='control-label'>CVC</label> <input autocomplete='off'
                                                class='fld3 card-cvc' placeholder='ex. 311' size='4'
                                                type='password' autocomplete="off" maxlength="4">
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
                                        <button type="submit" class="btn4">Pay Now <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="summary_wra">
                        <h3>Your Booking Summary </h3>
                        <?php $i=1;  ?>
                        <?php $__currentLoopData = $cartCollection->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $price = \App\Helpers\Helper::tourPriceTraveler($cart['id']);
                            ?>
                            <h4><?php echo $cart['name']; ?></h4>
                            <?php $tourdetail = \App\Helpers\Helper::tourDetails($cart['id']); ?>
                            <?php $travlers = array_except($cart['attributes'],['date_of_booking']);  ?>
                            <?php $i=1;  ?>
                            <?php $__currentLoopData = $travlers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type=>$count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="srart"><span><?php echo $count; ?>  <?php echo ucfirst($type); ?> X CA$ <?php echo $price[$type]; ?>  </span> </div>
                                <?php
                                $total[$i] = $count*$price[$type];  $i++;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="srart"><span>Tour Location:</span> <?php echo $tourdetail->location; ?> </div>
                            <div class="srart"><span>Meeting Point:</span> <?php echo $tourdetail->departure_point; ?></div>
                            <div class="srart"><span>Departure Time:</span> <?php echo $tourdetail->departure_time; ?> </div>
                            <?php $subtotal[$y] = array_sum($total); $y++;  ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="total">Total Price <span>CA$ <?php  echo array_sum($subtotal);  ?> </span>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>