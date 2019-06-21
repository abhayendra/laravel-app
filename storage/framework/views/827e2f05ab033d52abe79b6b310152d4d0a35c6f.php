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
                            <?php if(count($tour->tourImages)>0): ?>
                            <li><a href="#expand-3">Photos</a></li>
                            <?php endif; ?>
                            <?php if(count($tour->reviews)>0): ?>
                            <li><a href="#expand-4">Reviews</a></li>
                            <?php endif; ?>
                            <li><a href="#expand-5">Map</a></li>
                            <li></li>
                        </ul>
                        <div class="share">
                            <ul>
                                 <?php $wish = \App\Helpers\Helper::showWishlist($tour->id) ?>
                                 <?php if($wish): ?>
                                 <li><a href="<?php echo url('wishlist'); ?>"><i class="fa fa-heart" style="color:red" aria-hidden="true"></i> Save</a></li>
                                <?php else: ?>
                                 <li><a href="<?php echo url('saveWishlist/'.$tour->id); ?>"><i class="fa fa-heart" aria-hidden="true"></i> Save</a></li>
                                <?php endif; ?>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</a>
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer.php?u=<?php echo url()->current();; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
                                        <li><a href="https://twitter.com/share?url=<?php echo url()->current();; ?>&text=<?php echo $tour->title; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> twitter</a></li>
                                        <li><a href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo url('/').$tour->images; ?>&url=<?php echo url()->current();; ?>&description=<?php echo $tour->title; ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i> pinterest</a></li>
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

                          <?php if($wish): ?>
                          <a href="<?php echo url('wishlist'); ?>"><i class="fa fa-heart" style="color:red" aria-hidden="true"></i></a>
                         <?php else: ?>
                          <a href="<?php echo url('saveWishlist/'.$tour->id); ?>"><i class="fa fa-heart" aria-hidden="true"></i></a>
                         <?php endif; ?>
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

                    <?php if(count($tour->tourImages)>0): ?>
                    <div class="heading3" id="expand-3">Photos <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    <div class="detail_box" id="expandable-3">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <?php $i=1; ?>
                                <?php $__currentLoopData = $tour->tourImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galleryImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item <?php if($i==1): ?> active <?php endif; ?> ">
                                    <?php echo Html::image($galleryImage->picture,$galleryImage->alt_tag); ?>

                                    <div class="carousel-caption">
                                        <?php echo $galleryImage->alt_tag; ?>

                                    </div>
                                </div>
                                <?php $i++;  ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"  onclick="$('#myCarousel').carousel('prev')">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" onclick="$('#myCarousel').carousel('next')">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <?php endif; ?>


                    <?php if(count($tour->reviews)>0): ?>
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
                                                    <div class="customer_name"><?php echo \App\Helpers\Helper::userDetail($review->user_id); ?> <span class="review_time"><?php echo date('D M Y',strtotime($review->created_at)); ?></span></div>
                                                    <div class="rating_right">
                                                        <?php $or = 5- $review->rating  ?>
                                                        <?php for($i=1; $i<=$review->rating; $i++): ?>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <?php endfor; ?>
                                                        <?php for($i=1; $i<=$or; $i++): ?>
                                                            <i class="fa fa-star" style="color: #ccc" aria-hidden="true"></i>
                                                        <?php endfor; ?>
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
                    <?php if(Auth::check()): ?>
                    <?php echo Form::open(['url'=>'saveReview']); ?>


                    <div class="row" id="post-review-box">
                        <div class="col-md-12">
                                 <input id="ratings-hidden" name="rating" type="hidden">
                                 <input id="ratings-hidden" name="tour_id" type="hidden" value="<?php echo $tour->id; ?>">
                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                                <div class="text-right">
                                    <div class="stars starrr" data-rating="0"></div>
                                    <button class="btn3" type="submit">Save Review</button>
                                </div>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                    <?php endif; ?>

                    <div class="heading3" id="expand-5">Location <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    <div class="detail_box" id="expandable-5">
                        <iframe src="https://www.google.com/maps?q=<?php echo urlencode($tour->location); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                    <div class="book_right_wra" >
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
    <?php
       $bookingPrice = \App\Helpers\Helper::tourPrice($tour->id);
    ?>
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
                                    <input type='text' name="date_of_booking" autocomplete="off" class="fo rm-control" placeholder="Date Of Booking " id="date_of_booking"  required/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <?php $__currentLoopData = $bookingPrice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <label><?php echo $p->name; ?> <?php echo $p->age_group; ?> ( CA$ <?php echo $p->price; ?> )</label>
                                            <div class="input-group">
                                          <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="travelers[<?php echo $p->name; ?>]">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                              </button>
                                          </span>

                                                <input type="text" name="travelers[<?php echo $p->name; ?>]" class="form-control input-number" value="<?php echo $price->min; ?>" min="<?php echo $price->min; ?>" max="<?php echo $price->max; ?>">

                                                <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="travelers[<?php echo $p->name; ?>]">
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

    <?php echo Html::script('resources/assets/js/sticky-sidebar.js'); ?>

    <script type="text/javascript">

    	var a = new StickySidebar('.book_right_wra', {
    		topSpacing: 45,
    		bottomSpacing: 110,
    		containerSelector: '.row',
    		innerWrapperSelector: '.sidebar__inner'
    	});
    </script>

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
    <script>
        $( function() {
            $( "#date_of_booking" ).datepicker({
                changeMonth: true,
                changeYear: true,
                minDate: 0
            });
        } );
    </script>
    <style>
        .animated {
            -webkit-transition: height 0.2s;
            -moz-transition: height 0.2s;
            transition: height 0.2s;
        }

        .stars
        {
            margin: 20px 0;
            font-size: 24px;
            color: #d17581;
        }
    </style>
    <script>
        (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);
        var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})
        $(function(){
            $('#new-review').autosize({append: "\n"});
            var reviewBox = $('#post-review-box');
            var newReview = $('#new-review');
            var openReviewBtn = $('#open-review-box');
            var closeReviewBtn = $('#close-review-box');
            var ratingsField = $('#ratings-hidden');

            openReviewBtn.click(function(e)
            {
                reviewBox.slideDown(400, function()
                {
                    $('#new-review').trigger('autosize.resize');
                    newReview.focus();
                });
                openReviewBtn.fadeOut(100);
                closeReviewBtn.show();
            });

            closeReviewBtn.click(function(e)
            {
                e.preventDefault();
                reviewBox.slideUp(300, function()
                {
                    newReview.focus();
                    openReviewBtn.fadeIn(200);
                });
                closeReviewBtn.hide();

            });

            $('.starrr').on('starrr:change', function(e, value){
                ratingsField.val(value);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>