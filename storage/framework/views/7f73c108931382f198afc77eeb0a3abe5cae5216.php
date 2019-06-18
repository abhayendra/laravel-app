<?php $__env->startSection('content'); ?>
    <!--matter-->
    <div class="profile_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="profile_img">
                        <?php if($user->photo==""): ?>
                        <?php echo Html::image('resources/assets/images/profile_pic_bg.jpg','',['class'=>'img-res']); ?>

                        <?php else: ?>
                        <?php echo Html::image($user->photo,'',['class'=>'img-res']); ?>

                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="tbl_name">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"> 
                            <tr>
                                <td>
                                    <div class="name"><?php echo $user->name; ?> <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo \App\Helpers\Helper::provinceName($user->city); ?>, <?php echo \App\Helpers\Helper::countryName($user->country); ?></span><br>
                                        <div class="profile_detail">
                                            Since <?php echo date('M Y',strtotime($user->created_at)); ?><br>
                                            <?php echo date_diff(date_create($user->date_of_birth), date_create('today'))->y;; ?> year old <?php echo $user->gender; ?>

                                        </div>
                                    </div>
                                </td>
                                <td align="right">
                                    <a href="<?php echo url('/user/edit_profile/'.Auth::user()->id); ?>"><div class="edit_profile">Edit your profile</div></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pro_detail2">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td><strong>Email</strong>
                                        <?php echo $user->email; ?></td>
                                        <td><strong>Phone</strong>
                                        <?php echo $user->phone; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--<div class="col-lg-12">
                            <div class="collect_point">
                                <strong>Collect Points</strong>
                                <a href="<?php echo url('/'); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Write a Review</a>
                                <a href="<?php echo url('/'); ?>"><i class="fa fa-picture-o" aria-hidden="true"></i> Add a Photo</a>
                                <a href="<?php echo url('/'); ?>"><i class="fa fa-comment-o" aria-hidden="true"></i> Add Forum Post</a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="horizontalTab">
                        <ul>
                            <li><a href="#tab-1"> My Bookings <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <li><a href="#tab-2">My Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <!--<li><a href="#tab-3">My Blogs <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <li><a href="#tab-4">Responsive Tab-4 <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <li><a href="#tab-5">Responsive Tab-5 <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>-->
                        </ul>

                        <div id="tab-1">
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="date_mob"><?php echo date('l, D M Y',strtotime($order->booking_date)); ?><span></div>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="booking_tbl">
                              <tr>
                                <td><div class="date3"><?php echo date('M',strtotime($order->booking_date)); ?><span><?php echo date('d',strtotime($order->booking_date)); ?></span><?php echo date('Y',strtotime($order->booking_date)); ?></div></td>
                                <td>
                                <div class="tour_img">
                                        <a href="<?php echo url('tour/'.$order->slug); ?>">
                                            <img src="<?php echo url('/')."/".$order->images.'?w=150&h=100&fit=crop-center'; ?>" alt="regina.jpg" class="img-res">
                                        </a>
                                </div></td>
                                <td><div class="tour_detail">
                                <h2><a href="#"><?php echo $order->title; ?></a></h2>
                                <div class="time">Starting time: <?php echo $order->departure_time; ?> <?php echo date('l, d M Y',strtotime($order->booking_date)); ?></div>
                                        <?php  $cartInfo = json_decode($order->cart_information,true) ;
                                              $cartInfo = $cartInfo[$order->tour_id];
                                              $price = \App\Helpers\Helper::tourPriceTraveler($order->tour_id);
                                        ?>
                                <div class="price_des">
                                  (
                                    <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($cartInfo['attributes'][$key]>0): ?>
                                                CA$ <?php echo $val; ?> × <?php echo $cartInfo['attributes'][$key]; ?> <?php echo $key; ?>,
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 )
                                </div>
                              </div></td>
                                <td><div class="total_column">
                                <div class="edit"><a href="#">Print</a></div>
                                <div class="total2">Total <span>CA$ <?php echo $order->total_amount; ?></span></div>
                              </div></td>
                              </tr>
                            </table>
                            <div class="price_des_mob">
                                (
                                <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($cartInfo['attributes'][$key]>0): ?>
                                      CA$ <?php echo $val; ?> × <?php echo $cartInfo['attributes'][$key]; ?> <?php echo $key; ?>,
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 )
                            </div>
                            <div class="total_column total_mob">
                                <div class="edit"><a href="#">Edit</a></div>
                                <div class="total2">Total <span>CA$ <?php echo $order->total_amount; ?></span></div>
                                <div class="clearfix"></div>
                            </div>
                             <div style="clear:both"></div>
                              <hr/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div id="tab-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contribution_wra">
                                        <h3>My Blog</h3>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl2">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Blog Title</th>
                                            </tr>
                                            </thead>
                                             <tr>
                                               <td></td>
                                               <td></td>
                                             </tr>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end matter-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>