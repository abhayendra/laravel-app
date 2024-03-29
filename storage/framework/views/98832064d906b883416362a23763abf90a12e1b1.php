<?php $__env->startSection('content'); ?>
    <!--matter-->
    <div class="profile_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="profile_img">
                        <?php echo Html::image('resources/assets/images/profile_pic_bg.jpg','',['class'=>'img-res']); ?>

                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="tbl_name">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <div class="name"><?php echo $user->name; ?> <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $user->city; ?>, <?php echo $user->country; ?></span><br>
                                        <div class="profile_detail">
                                            Since <?php echo date('M Y',strtotime($user->created_at)); ?><br>
                                            <?php echo $user->date_of_birth; ?> year old <?php echo $user->gender; ?>

                                        </div>
                                    </div>
                                </td>
                                <td align="right">
                                    <select class="edit_profile">
                                        <option>Edit your profile</option>
                                        <option>Edit photo</option>
                                    </select>
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
                        <div class="col-lg-12">
                            <div class="collect_point">
                                <strong>Collect Points</strong>
                                <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Write a Review</a>
                                <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Add a Photo</a>
                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> Add Forum Post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="horizontalTab">
                        <ul>
                            <li><a href="#tab-1"> My Bookings <i class="fa fa-chevron-right"></i></a></li>
                            <li><a href="#tab-2">My Contributions</a></li>
                            <li><a href="#tab-3">My Blogs</a></li>
                            <li><a href="#tab-4">Responsive Tab-4</a></li>
                            <li><a href="#tab-5">Responsive Tab-5</a></li>
                        </ul>

                        <div id="tab-1">
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                             <?php
                                $tour = Helper::tourDetails($order->tour_id);
                                echo "<pre>"; print_r($tour); echo "</pre>";
                             ?>

                            <div class="date_mob"><?php echo date('l, D M Y',strtotime($order->booking_date)); ?><span></div>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="booking_tbl">
                              <tr>
                                <td><div class="date3"><?php echo date('M',strtotime($order->booking_date)); ?><span><?php echo date('d',strtotime($order->booking_date)); ?></span><?php echo date('Y',strtotime($order->booking_date)); ?></div></td>
                                <td><div class="tour_img"><a href="#"><img src="http://www.booktours.ca/resources/assets/images/newyork.jpg" alt="regina.jpg" class="img-res"></a></div></td>
                                <td><div class="tour_detail">
                                <h2><a href="#"><?php echo $order->title; ?></a></h2>
                                <div class="time">Starting time: <?php echo $order->departure_time; ?> <?php echo date('l, d M Y',strtotime($order->booking_date)); ?></div>
                                <?php $detail = json_decode($order->cart_information,true);  ?>
                                <div class="price_des">
                                  (
                                  <?php if($detail['attributes']['adult']>0): ?>
                                  CA$ <?php echo $detail['price']; ?> × <?php echo $detail['attributes']['adult']; ?> Adult,
                                  <?php endif; ?>
                                <?php if($detail['attributes']['child']>0): ?>
                                    CA$ <?php echo $detail['price']; ?> × <?php echo $detail['attributes']['child']; ?> Child,
                                <?php endif; ?>
                                <?php if($detail['attributes']['senior']>0): ?>
                                    CA$ <?php echo $detail['price']; ?> × <?php echo $detail['attributes']['senior']; ?> Senior,
                                <?php endif; ?>
                                 )
                                </div>
                              </div></td>
                                <td><div class="total_column">
                                <div class="edit"><a href="#">Edit</a></div>
                                <div class="total2">Total <span>CA$ <?php echo $order->total_amount; ?></span></div>
                              </div></td>
                              </tr>
                            </table>
                            <div class="price_des_mob">
                                (
                                <?php if($detail['attributes']['adult']>0): ?>
                                    CA$ <?php echo $detail['price']; ?> × <?php echo $detail['attributes']['adult']; ?> Adult,
                                <?php endif; ?>
                                <?php if($detail['attributes']['child']>0): ?>
                                    CA$ <?php echo $detail['price']; ?> × <?php echo $detail['attributes']['child']; ?> Child,
                                <?php endif; ?>
                                <?php if($detail['attributes']['senior']>0): ?>
                                    CA$ <?php echo $detail['price']; ?> × <?php echo $detail['attributes']['senior']; ?> Senior,
                                <?php endif; ?>
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
                                        <h3>My Contributions <span>Forum Posts (2)</span></h3>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl2">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Topic</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>15 Nov 2017</td>
                                                <td>Reply</td>
                                                <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                                            </tr>
                                            <tr>
                                                <td>15 Nov 2017</td>
                                                <td>Reply</td>
                                                <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                                            </tr>
                                            <tr>
                                                <td>15 Nov 2017</td>
                                                <td>Reply</td>
                                                <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contribution_wra">
                                        <h3>My Contributions <span>Forum Posts (2)</span></h3>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl2">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Topic</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>15 Nov 2017</td>
                                                <td>Reply</td>
                                                <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                                            </tr>
                                            <tr>
                                                <td>15 Nov 2017</td>
                                                <td>Reply</td>
                                                <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                                            </tr>
                                            <tr>
                                                <td>15 Nov 2017</td>
                                                <td>Reply</td>
                                                <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4">
                            <p>Donec egestas facilisis sapien sit amet euismod. Donec mollis lectus neque, in consectetur magna sodales et. Nam rutrum libero vitae magna sollicitudin aliquet. In tristique ultrices euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse pretium congue sodales. Curabitur egestas, metus sed ultrices suscipit, metus nibh vehicula ligula, vel volutpat sapien nibh sed quam. Etiam elementum nisi eu risus congue, ut eleifend lectus ultricies. Vivamus in ligula fermentum, bibendum sapien eget, pretium est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec ut ante non risus rutrum faucibus.</p>
                        </div>
                        <div id="tab-5">
                            <p>Proin dignissim faucibus odio sollicitudin sagittis. Phasellus aliquet, erat vitae mollis consectetur, enim lectus ornare libero, et porta mi dui eu tellus. Morbi lobortis, elit at euismod porta, magna lacus mattis massa, a lacinia ligula risus et lectus. Sed et aliquam ligula. Nunc venenatis orci magna, quis facilisis sem porta non. Nunc sodales arcu in consectetur malesuada. Maecenas varius justo lacus, scelerisque viverra tellus luctus eu. Nam imperdiet ultricies suscipit. Ut urna mauris, eleifend quis lacinia non, mollis id libero. Praesent pharetra viverra ipsum at posuere. Quisque commodo tortor nec hendrerit faucibus. Fusce convallis urna et vehicula tincidunt. Duis sed vehicula justo, eu placerat nisi. Donec facilisis augue non turpis semper, eget condimentum mauris malesuada. Nunc in dignissim mi, sed laoreet felis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end matter-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>