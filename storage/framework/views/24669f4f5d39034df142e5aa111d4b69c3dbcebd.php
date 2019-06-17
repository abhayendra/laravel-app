<?php $__env->startSection('content'); ?>
        <!--mobile search-->
<div class="mobile_search">
    <?php echo Form::open(['url'=>'/tours/','method'=>'get']); ?>

    <input name="search" type="text" placeholder="Search Niagara Falls"> <span id="search_hide"><i class="fa fa-times" aria-hidden="true"></i></span>
    <?php echo Form::close(); ?>

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
                <li><a href="<?php echo url(Request::segment(1).'/all'); ?>"><?php echo ucfirst(Request::segment(1)); ?></a></li>
                <li class="active"><?php echo e(ucfirst(urldecode(Request::segment(2)))); ?></li>
            </ol>
            <div class="page">
            </div>
            <div class="short_wra" id="short_by">
                Short By:
                <select class="sortby" id="shortBy">
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=relevance'); ?>">Relevance</option>
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=new'); ?>">New &amp; Popular</option>
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=review_high'); ?>">Reviews - high to low</option>
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=review_low'); ?>">Reviews - low to high</option>
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=price_high'); ?>">Price - high to low</option>
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=price_low'); ?>">Price - low to high</option>
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=duration_high'); ?>">Duration - high to low</option>
                    <option value="<?php echo url(Request::segment(1).'/'.$keyword.'?order=duration_low'); ?>">Duration - low to high</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<!--listing-->
<div class="listing_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col-lg-push-3 col-md-push-3 col-sm-push-3">
                <?php if(count($tours)>0): ?>
                <div class="mid_listing">
                    <div class="result_heading"><?php echo ucfirst(urldecode($keyword)); ?>  <?php if($keyword!="all"): ?> & Around <?php endif; ?>  Tours, Tickets & Activities</div>
                    <div class="line2"></div>
                    <div class="list_row_wra">
                        <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleTour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tour_box_wra">
                                <div class="tour_box">
                                    <a href="<?php echo url('/tour/'.$singleTour->slug); ?>"><?php echo Html::image('public/'.$singleTour->images.'?w=400&h=250&fit=crop-center','',['class'=>'img-res']); ?></a>
                                    <div class="tour_title"><a href="<?php echo url('/tour/'.$singleTour->slug); ?>"><?php echo @$singleTour->title; ?></a></div>
                                    <div class="rating">
                                        <?php $rating =  \App\Helpers\Helper::review($singleTour->id); ?>
                                        <?php echo $rating; ?>

                                    </div>
                                    <div class="list_detail">
                                        From: <?php echo $singleTour->departure_point; ?><br>
                                        Duration: <?php echo $singleTour->tour_duration; ?><br>
                                        Tour Code: <?php echo $singleTour->tour_code; ?>

                                    </div>
                                    <?php $price = \App\Helpers\Helper::tourPrice($singleTour->id) ?>
                                    <div class="price2"> From $ <?php echo $price[0]->price; ?></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="social_share"><div class="sharethis-inline-share-buttons"></div></div>
                                <div class="page">
                                    <?php echo e($tours->links()); ?>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                   <h2>Unfortunately the page you requested cannot be found.</h2>
                   <p>Either the page is not available anymore, or the address (URL) you have entered is incorrect. </p>
                <?php endif; ?>
                <div class="more_things">
                    <h2>More Things to Do in <?php echo urldecode($keyword); ?>  & Around</h2>
                    <a href="<?php echo url('location/niagara'); ?>"> Niagara  </a>
                    <div class="more_things">
                        <h2>Top <?php echo urldecode($keyword); ?>  & Around Attractions</h2>
                        <a href="<?php echo url('attractions/Niagara+Falls'); ?>"> Niagara Fall  </a>
                    </div>
                    <div class="more_things">
                        <h2>Recommended for <?php echo urldecode($keyword); ?>  & Around</h2>
                        <a href="<?php echo url('location/lucknow'); ?>"> Lucknow  </a>
                    </div>
                    <div class="more_things">
                        <h2>More Popular Destinations</h2>
                        <a href="<?php echo url('location/niagara'); ?>"> Niagara  </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
                <div class="list_menu">
                    <div class="filter_head"><i class="fa fa-caret-right" aria-hidden="true"></i> Categories</div>
                    <div class="category">
                        <ul>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo url('/category/'.urlencode($category->category_name)); ?>"><?php echo $category->category_name; ?> (<?php echo $category->total_tours; ?>)</a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        // bind change event to select
        $('#shortBy').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>
<!--end listing-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>