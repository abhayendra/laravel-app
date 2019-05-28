<?php $__env->startSection('content'); ?>
    <!--banner-->
    
    <div class="banner_wra" style="background-image:<?php echo $setting['home_page_banner']; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo $setting['home_page_banner_content']; ?></h2>
                    <div class="fld_wra">
                        <?php echo Form::open(['url'=>'/location/','method'=>'get']); ?>

                        <input type="text" name="search" value="" id="search-box" autocomplete="off" placeholder="Where Do You Want to Go?" class="fld1"> <button type="submit" class="btn1">Find Tours</button>
                        <div class="search_dd" id="suggesstion-box">
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end banner-->
    <!--Popular Destinations-->
    <div class="popular_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">Popular Destinations</div>
                    <div class="see_all"><a href="#">see all</a></div> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="city">
                        <a href="<?php echo url('location/'.urlencode($popularDestinations[0]->location)); ?>">
                            <img src="<?php echo e('public/'.$popularDestinations[0]->image.'?w=800&h=515&fit=crop-center'); ?>" alt="" class="img-res">
                            <div class="city_name"><span><?php echo $popularDestinations[0]->destinations; ?></span></div>
                            <div class="city_button"><span>BOOK TOURS</span></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="city">
                                <a href="<?php echo url('location/'.urlencode($popularDestinations[1]->location)); ?>">
                                    <img src="<?php echo e('public/'.$popularDestinations[1]->image.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                                    <div class="city_name"><span><?php echo $popularDestinations[1]->destinations; ?></span></div>
                                    <div class="city_button"><span>BOOK TOURS</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="city">
                                <a href="<?php echo url('location/'.urlencode($popularDestinations[2]->location)); ?>">
                                    <img src="<?php echo e('public/'.$popularDestinations[2]->image.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                                    <div class="city_name"><span><?php echo $popularDestinations[2]->destinations; ?></span></div>
                                    <div class="city_button"><span>BOOK TOURS</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="city">
                                <a href="<?php echo url('location/'.urlencode($popularDestinations[3]->location)); ?>">
                                    <img src="<?php echo e('public/'.$popularDestinations[3]->image.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                                    <div class="city_name"><span><?php echo $popularDestinations[3]->destinations; ?></span></div>
                                    <div class="city_button"><span>BOOK TOURS</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="city">
                                <a href="<?php echo url('location/'.urlencode($popularDestinations[4]->location)); ?>">
                                    <img src="<?php echo e('public/'.$popularDestinations[4]->image.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                                    <div class="city_name"><span><?php echo $popularDestinations[4]->destinations; ?></span></div>
                                    <div class="city_button"><span>BOOK TOURS</span></div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="city">
                        <a href="<?php echo url('location/'.urlencode($popularDestinations[5]->location)); ?>">
                            <img src="<?php echo e('public/'.$popularDestinations[5]->image.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                            <div class="city_name"><span><?php echo $popularDestinations[5]->destinations; ?></span></div>
                            <div class="city_button"><span>BOOK TOURS</span></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="city">
                        <a href="<?php echo url('location/'.urlencode($popularDestinations[6]->location)); ?>">
                            <img src="<?php echo e('public/'.$popularDestinations[6]->image.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                            <div class="city_name"><span><?php echo $popularDestinations[6]->destinations; ?></span></div>
                            <div class="city_button"><span>BOOK TOURS</span></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="city">
                        <a href="<?php echo url('location/'.urlencode($popularDestinations[7]->location)); ?>">
                            <img src="<?php echo e('public/'.$popularDestinations[7]->image.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                            <div class="city_name"><span><?php echo $popularDestinations[7]->destinations; ?></span></div>
                            <div class="city_button"><span>BOOK TOURS</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Popular Destinations-->
    <!--Recommended-->
    <div class="recommended_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">Recommended for You</div>
                    <div class="see_all"><a href="#">see all</a></div>
                </div>
                <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="box">
                        <div class="box_img">
                            <a href="<?php echo url('/tour/'.$tour->slug); ?>">
                                <img src="<?php echo e('public/'.$tour->images.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                            </a>
                        </div>
                        <div class="box_matter">
                            <h4><a href="<?php echo url('/tour/'.$tour->slug); ?>"><?php echo $tour->title; ?></a></h4>
                            <p><?php echo substr($tour->overview,0,150); ?></p>
                        </div>
                        <div class="price_wra">
                            <div class="day">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $tour->tour_duration; ?>

                                <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </div>
                            <?php $tourPrice =  \App\Helpers\Helper::tourPrice($tour->id);    ?>
                            <div class="price">$ <?php echo $tourPrice[0]->price; ?></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!--end Recommended-->
    <!--why us-->
    <div class="why_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">Why Book with booktours?</div>
                </div>
                <!-- Home Page Setting -->
                 <?php echo $setting['why_us']; ?>

                <!-- End Home Page Setting -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>