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
                <li><a href="#">Destination</a></li>
                <li class="active">Toronto</li>
            </ol>
            <div class="page">
                Page: <a class="act" href="#">1</a> | <a href="#">2</a> | <a href="#">Next <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
            </div>
            <div class="short_wra" id="short_by">
                Short By: <select class="sortby">
                    <option value="relevance">Relevance</option>
                    <option value="new">New &amp; Popular</option>
                    <option value="review_high">Reviews - high to low</option>
                    <option value="review_low">Reviews - low to high</option>
                    <option value="price_high">Price - high to low</option>
                    <option value="price_low">Price - low to high</option>
                    <option value="duration_high">Duration - high to low</option>
                    <option value="duration_low">Duration - low to high</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<!--listing-->
<?php
    $tours = array_chunk($tours['data'],'3');
?>

<div class="listing_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col-lg-push-3 col-md-push-3 col-sm-push-3">
                <div class="mid_listing">
                    <div class="result_heading"><?php echo urldecode($keyword); ?> & Around Tours, Tickets & Activities</div>
                    <div class="line2"></div>
                    <div class="list_row_wra">
                        <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <?php $__currentLoopData = $tour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $singleTour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php //print_r($singleTour); die();  ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="tour_box">
                                    <a href="#"><?php echo Html::image('resources/assets/images/calgary.jpg','',['class'=>'img-res']); ?></a>
                                    <div class="tour_title"><a href="<?php echo url('/tour/'.$singleTour['slug']); ?>"><?php echo @$singleTour['title']; ?></a></div>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i> (21)
                                    </div>
                                    <div class="list_detail">
                                        From: <a href="#"><?php echo $singleTour['tour_from']; ?></a><br>
                                        Duration: <?php echo $singleTour['tour_duration']; ?><br>
                                        Tour Code: <?php echo $singleTour['tour_code']; ?>

                                    </div>
                                    <div class="price2"><a href="#">$ <?php echo $singleTour['sell_price']-$singleTour['discount']; ?> </a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="social_share"><div class="sharethis-inline-share-buttons"></div></div>
                                <div class="page">Page:
                                    <?php if(@$tours['prev_page_url']!=""): ?>
                                    <a href="<?php echo $tours['prev_page_url'];; ?>">Prev Page <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                                    <?php endif; ?>
                                    <a class="act" href="<?php echo @$tours['path']."/listing?page=".@$tours['current_page']; ?>"><?php echo @$tours['current_page']; ?></a> |
                                    <?php if(@$tours['next_page_url']!=""): ?>
                                    <a href="<?php echo $tours['next_page_url']; ?>">Next <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                                    <?php endif; ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>


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
                            <li><a href="#"><?php echo $category->category_name; ?> (<?php echo $category->total_tours; ?>)</a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end listing-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>