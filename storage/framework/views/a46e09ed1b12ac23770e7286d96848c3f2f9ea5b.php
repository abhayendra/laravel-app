<?php $__env->startSection('content'); ?>
     <?php
        $price = \App\Helpers\Helper::tourPrice($tour->id);
     ?>
    
    <!--mobile search-->
    <div class="mobile_search">
        <input name="" type="text" placeholder="Search Niagara Falls"> <span id="search_hide"><i class="fa fa-times" aria-hidden="true"></i></span>
    </div>
    <!--end mobile search-->
    <!--banner-->
    <div class="banner_detail">
        <?php echo Html::image('resources/assets/images/banner.jpg','',['class'=>'img-res']); ?>

    </div>
    <!--end banner-->
    <!--breadcrumb-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb-my">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo url('/tours'); ?>">Tours</a></li>
                    <?php $tourName = str_replace('-',' ',Request::segment(2)) ?>
                    <li class="active"><?php echo ucfirst(urldecode($tourName)); ?></li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <!--listing-->
    <div class="listing_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div id="detail"></div>
                    <div class="result_heading"><?php echo $tour->title; ?></div>
                    <div class="rating_row">
                           <span class="rating">
                                <?php $rating =  \App\Helpers\Helper::review($tour->id); ?>
                                <?php echo $rating; ?>

                           </span>
                        <span><i class="fa fa-suitcase" aria-hidden="true"></i> Tour Code: <?php echo $tour->tour_code; ?></span>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Location: <a href="<?php echo url('location/'.urldecode($tour->location)); ?>"><?php echo $tour->location; ?></a></span>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> Duration: <?php echo $tour->tour_duration; ?></span>
                    </div>

                    <div class="heading2" data-spy="affix" data-offset-top="497">
                        <ul class="tab_detail">
                            <li><a href="#detail">Detail</a></li>
                            <li><a href="#expand-2">Itinerary</a></li>
                            <li><a href="#expand-3">Photos</a></li>
                            <li><a href="#expand-4">Reviews</a></li>
                            <li><a href="#expand-5">Map</a></li>
                            <li></li>
                        </ul>
                        <div class="share">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> Save</a></li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> twitter</a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i> pinterest</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class=""></div>
                    <div class="price3"><span>From </span> CA$ <?php echo $price['0']->price; ?></div>
                    <div class="check_ava_wra">
                        <div class="check_ava"><a href="#" id="show1">Check Availability</a></div>
                        <div class="share2">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="heading3">Overview <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    <div class="detail_box2">

       <div class="txt">
           <?php echo $tour->overview; ?>

       </div>
       <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl2">
          <tr>
            <td><strong>Departure Location</strong></td>
            <td><?php echo $tour->departure_point; ?></td>
          </tr>
          <tr>
            <td><strong>Departure Time</strong></td>
            <td><?php echo $tour->departure_time; ?></td>
          </tr>
           <tr>
               <td><strong>Return Location</strong></td>
               <td><?php echo $tour->return_point; ?></td>
           </tr>
           <tr>
               <td><strong>Return Time</strong></td>
               <td><?php echo $tour->return_time; ?></td>
           </tr>
          <tr>
            <td valign="top"><strong>Price Include</strong>s</td>
            <td>
            <?php $price_include = explode(',',$tour->price_includes) ?>
                <ul class="inc">
            <?php $__currentLoopData = $price_include; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo $include; ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            </td>
          </tr>
          <tr>
            <td valign="top"><strong>Price Excludes</strong></td>
            <td>
            <?php $price_excludes = explode(',',$tour->price_excludes) ?>
                <ul class="inc2">
            <?php $__currentLoopData = $price_excludes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo $include; ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</td>
          </tr>
          <tr>
            <td valign="top"><strong>Complementaries</strong></td>
            <td>
            <?php $complementaries = explode(',',$tour->complementaries) ?>
                <ul class="inc">
            <?php $__currentLoopData = $complementaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo $include; ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
          </tr>
        </table>

                    </div>
                    <div class="heading3" id="expand-2">Itinerary <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    <div class="detail_box" id="expandable-2">
                        <div class="txt">
                            <?php echo $tour->itinerary; ?>

                        </div>
                    </div>
                    <div class="heading3" id="expand-3">Photos <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    <div class="detail_box" id="expandable-3">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <?php echo Html::image('resources/assets/images/photo1.jpg'); ?>

                                    <div class="carousel-caption">
                                        Hornblower Cruise  Tour
                                    </div>
                                </div>
                                <div class="item">
                                    <?php echo Html::image('resources/assets/images/photo2.jpg'); ?>

                                    <div class="carousel-caption">
                                        Niagara Falls History Museum
                                    </div>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <?php if(1>0): ?>
                        <div class="heading3" id="expand-4">Customer Reviews <i class="fa fa-angle-down" aria-hidden="true"></i> <span><a href="#">See all reviews</a></span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="detail_box" id="expandable-4">
                            <div class="review_txt">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl3">
                                    <?php $__currentLoopData = $tour->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td width="55" valign="top"><div class="custome_img"></div></td>
                                            <td>
                                                <div class="review_txt">
                                                    <div class="customer_name">Abraralvi <span class="review_time">September 2017</span></div>
                                                    <div class="rating_right">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p>
                                                        <?php echo $review->review; ?>

                                                    </p>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="heading3" id="expand-5">Location <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    <div class="detail_box" id="expandable-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186586.22995069515!2d-79.22811823021638!3d43.05384707400628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d3445eec824db9%3A0x46d2c56156bda288!2sNiagara+Falls%2C+ON%2C+Canada!5e0!3m2!1sen!2sin!4v1510668358698" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
               
                <?php echo Form::open(['url'=>'order/checkout']); ?>

                <input type="hidden" name="tour_id" value="<?php echo $tour->id; ?>">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <?php if($errors->any()): ?>
                        <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo "<pre>";  print_r($error) ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <div class="book_right_wra" data-spy="affix" data-offset-top="497">
                        <div class="price_box">
                            From
                            <span><small>CA$</small><?php echo $price[0]->price; ?></span>
                        </div>
                        <div class="booking_box">
                            <h3>Book the tour</h3>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl">
                                <tr>
                                    <td colspan="2">
                                        <div class='input-group date date2' id='datetimepicker1'>
                                            <input type='text' name="date_of_booking" autocomplete="off" class="fo rm-control" placeholder="Date Of Booking " id="datepicker2"  required/>
                                            <span class="input-group-addon">
                                              <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <label><?php echo $price->name; ?> <?php echo $price->age_group; ?> ( CA$ <?php echo $price->price; ?> )</label>
                                            <div class="input-group">
                                          <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="travelers[<?php echo $price->name; ?>]">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                              </button>
                                          </span>

                                                <input type="text" name="travelers[<?php echo $price->name; ?>]" class="form-control input-number" value="<?php echo $price->min; ?>" min="<?php echo $price->min; ?>" max="<?php echo $price->max; ?>">

                                                <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="travelers[<?php echo $price->name; ?>]">
                                                  <span class="glyphicon glyphicon-plus"></span>
                                              </button>
                                          </span>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="2"><button type="submit" class="btn3">Proceed Booking</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
    <!--end listing-->
    <div class="available_mob">
        <h2>Book the tour <span id="close1">x</span></h2>
        <?php echo Form::open(['url'=>'order/checkout']); ?>

        <input type="hidden" name="tour_id" value="<?php echo $tour->id; ?>">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if($errors->any()): ?>
                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo "<pre>";  print_r($error) ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl">
                        <tr>
                            <td colspan="2">
                                <div class='input-group date date2' id='datetimepicker1'>
                                    <input type='text' name="date_of_booking" autocomplete="off" class="fo rm-control" placeholder="Date Of Booking " id="datepicker2"  required/>
                                    <span class="input-group-addon">
                                              <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                </div>
                            </td>
                        </tr>
                        <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <label><?php echo $price->name; ?> <?php echo $price->age_group; ?> ( CA$ <?php echo $price->price; ?> )</label>
                                            <div class="input-group">
                                          <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="travelers[<?php echo $price->name; ?>]">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                              </button>
                                          </span>

                                                <input type="text" name="travelers[<?php echo $price->name; ?>]" class="form-control input-number" value="<?php echo $price->min; ?>" min="<?php echo $price->min; ?>" max="<?php echo $price->max; ?>">

                                                <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="travelers[<?php echo $price->name; ?>]">
                                                  <span class="glyphicon glyphicon-plus"></span>
                                              </button>
                                          </span>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="2"><button type="submit" class="btn3">Proceed Booking</button></td>
                        </tr>
                    </table>
            
        </div>
        <?php echo Form::close(); ?>

    </div>

    <script>
        $(document).ready(function(){
            $("#close1").click(function(){
                $(".available_mob").hide();
            });
            $("#show1").click(function(){
                $(".available_mob").show();
            });
        });
    </script>

    <script>
        $(window).load(function() {
            var dt = new Date();
            $.ajax({
                type: "GET",
                url: "<?php echo url('tour-visit') ?>",
                data: { tourId: "<?php echo $tour->id ?>" },
            });
        });
    </script>
    <script>
        $('.btn-number').click(function(e){
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {

                    if(currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if(type == 'plus') {

                    if(currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function(){
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {

            minValue =  parseInt($(this).attr('min'));
            maxValue =  parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if(valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>