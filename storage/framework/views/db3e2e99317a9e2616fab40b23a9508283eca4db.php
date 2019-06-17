<?php $__env->startSection('content'); ?>

    
    <!--banner-->
    <div class="banner_wra" style="background-image:<?php echo $setting['home_page_banner']; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo $setting['home_page_banner_content']; ?></h2>
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
    <!--end banner-->
    <!--Popular Destinations-->
    <div class="popular_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">Popular Destinations</div>
                    <div class="see_all"><a href="#">see all</a></div>
                </div>
                <?php
                    $divLayout = ['box','box2','box2','box2','box2','box3','box3','box3'];
                    $i = 0;
                ?>
                <?php $__currentLoopData = $popularDestinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="desti_<?php echo $divLayout[$i];  ?>">
                    <div class="city">
                        <a href="<?php echo url('location/'.urlencode($pd->location)); ?>">
                            <img src="<?php echo e('public/'.$pd->image.'?w=588&h=376&fit=crop-center'); ?>" alt="<?php echo $pd->location; ?>" class="img-res">
                            <div class="city_name"><span><?php echo $pd->destinations; ?></span></div>
                            <div class="city_button"><span>BOOK TOURS</span></div>
                        </a>
                    </div>
                </div>
                <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <div class="see_all"><a href="<?php echo url('/location/all'); ?>">see all</a></div>
                </div>
                <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box_wra">
                    <div class="box">
                        <div class="box_img">
                            <a href="<?php echo url('/tour/'.$tour->slug); ?>">
                                <img src="<?php echo e('public/'.$tour->images.'?w=400&h=250&fit=crop-center'); ?>" alt="" class="img-res">
                            </a>
                        </div>
                        <div class="box_matter">
                            <h4><a href="<?php echo url('/tour/'.$tour->slug); ?>"><?php echo $tour->title; ?></a></h4>
                            <p><?php echo e(substr(strip_tags($tour->overview),0,150)); ?></p>
                        </div>
                        <div class="price_wra">
                            <div class="day">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $tour->tour_duration; ?>

                                <?php $avrage =  \App\Helpers\Helper::review($tour->id); ?>
                                <span>
                                 <?php echo $avrage; ?>

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