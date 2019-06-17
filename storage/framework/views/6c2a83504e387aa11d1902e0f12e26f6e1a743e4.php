<?php $__env->startSection('content'); ?>
    <!--mobile search-->
    <?php
    $cartCollection = Cart::getContent();
    ?>
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
           <?php if(count($cartCollection->toArray())>0): ?>
            <div class="row">
              <?php echo Form::open(['url'=>'order/save-order']); ?>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h1>Checkout</h1>
                    <?php $__currentLoopData = $cartCollection->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php $tourdetail = \App\Helpers\Helper::tourDetails($cart['id']); ?>
                     <?php $price = \App\Helpers\Helper::tourPrice($cart['id']);   ?>
                    <h2>
                        <?php echo e($cart['name']); ?> <a href="<?php echo url('order/cartRemove/'.$cart['id']); ?>"><abc class="pull_right">X</abc></a>
                        <span><?php echo date('l, d M Y ', strtotime($cart['attributes']['date_of_booking'])); ?> <?php echo $tourdetail->departure_time; ?></span>
                        <span>
                            <input type="hidden" name="tour_id[]" value="<?php echo $tourdetail->id; ?>">
                            <input type="hidden" name="booking_date[]" value="<?php echo $cart['attributes']['date_of_booking']; ?>" >
                            <?php
                            unset($cart['attributes']['date_of_booking']);
                            ?>
                            <?php $__currentLoopData = $cart['attributes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $val."  ".$key ." "  ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </span>
                    </h2>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <ul class="breadcrumb_checkout">
                        <li class="active2">Traveler Info</li>
                        <li>Payment Info</li>
                        <li>Completed</li>
                    </ul>
                    <div class="checkout_fld_wra">
                        <h3>Traveler Details</h3>
                        <div class="row">
                            <div class="col-lg-12"><label for="lead">Lead Traveler (Adult) <span style="color: red">*</span> </label></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input name="traveler_first_name" id="lead" type="text" placeholder="First Name*" class="fld3" value="<?php echo Auth::user()->name; ?>" required></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input name="traveler_last_name" type="text" placeholder="Last Name*"  class="fld3" required></div>
                        </div>
                    </div>
                    <div class="checkout_fld_wra">
                        <h3>Contact Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="mail">Contact Email <span style="color: red">*</span></label>
                                <input name="email" id="lead" type="email" placeholder="Email Address*" value="<?php echo Auth::user()->email; ?>" class="fld3" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="text">Phone Number <span style="color: red">*</span></label>
                                <input name="phone" type="text" placeholder="Mobile Number*" value="<?php echo Auth::user()->phone; ?>"  class="fld3" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="country">Country <span style="color: red">*</span></label>
                                <select name="country_id" class="sel" required>
                                    <option value="">Please Select Country </option>
                                    <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cid=>$cname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo $cid; ?>"><?php echo $cname; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label for="text">Receive our email offers and updates? <span style="color: red">*</span></label>
                                <select  name="newsletter"  class="sel" required>
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
                          <input type="hidden" name="total_amount[]" value="<?php echo array_sum($total); ?>">
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
                            Call <?php echo $settings->phone; ?></div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
            <?php else: ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h3 style="text-align:center; color:red;">This Cart is empty </h3>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!--end Popular Destinations-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>