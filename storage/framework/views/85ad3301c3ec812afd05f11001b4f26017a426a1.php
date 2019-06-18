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
                    <li><a href="<?php echo url('/page/'.$page->slug); ?>">Page</a></li>
                    <li><a href="<?php echo url('/page/'.$page->slug); ?>"><?php echo $page->title; ?></a></li>
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
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col-lg-push-3 col-md-push-3 col-sm-push-3">
                    <div class="mid_listing">
                        <div class="result_heading"><?php echo $page->title; ?></div>
                        <div class="line2"></div>
                        <div class="faq_wra">
                            <?php echo $page->content; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
                    <div class="list_menu">
                        <div class="filter_head"><i class="fa fa-caret-right" aria-hidden="true"></i> Other Link </div>
                        <div class="category">
                            <ul>
                              <?php $__currentLoopData = $allPage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo url('/page/'.$p->slug); ?>"><?php echo $p->title; ?></a></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>