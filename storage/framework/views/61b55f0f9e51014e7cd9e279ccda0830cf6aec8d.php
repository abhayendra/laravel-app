<?php $__env->startSection('title', 'Page Not Found '); ?>
<?php $__env->startSection('message'); ?>
    <div class="error_wra">
        <div class="container">
            <div class="row">
                <div class="error_matter">
                    <h2>404</h2>
                    <h3>Unfortunately the page you requested cannot be found.</h3>
                    <p>Either the page is not available anymore, or the address (URL) you have entered is incorrect.</p>
                </div>
                <div class="error_image"><?php echo Html::image('resources/assets/images/tourist.png','',['width'=>'400','class'=>'img-res']); ?></div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--end error-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>