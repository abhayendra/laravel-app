<!-- First, extends to the CRUDBooster Layout -->

<?php $__env->startSection('content'); ?>
    <!-- Your html goes here -->
    <!-- Your html goes here -->
    <div class='panel panel-default'>
        <div class='panel-heading'>Add Form</div>
        <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="<?php echo CRUDBooster::mainpath('add-save'); ?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body" id="parent-form-area">

                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Destinations <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" name="destinations" class="form-control" required>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Location <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="category_id" required name="category_id" >
                            <option value="">** Please select Location </option>
                            <?php $__currentLoopData = $tourLocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo $location->location; ?>"><?php echo $location->location; ?> (<?php echo $location->tour_count; ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Position <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="category_id" required name="category_id" >
                            <option value="">** Please select Position </option>
                            <?php for($i=1; $i<=8; $i++): ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>

                <div class="form-group header-group-0 " id="form-group-category_id" style="">
                    <label class="control-label col-sm-2">
                        Image <span class="text-danger" title="This field is required">*</span>
                    </label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" required>
                        <div class="text-danger"></div>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer" style="background: #F5F5F5">

                <div class="form-group">
                    <label class="control-label col-sm-2"></label>
                    <div class="col-sm-10">
                        <a href="http://localhost/booktours/admin/tours" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Back</a>

                        <input type="submit" name="submit" value="Save &amp; Add More" class="btn btn-success">

                        <input type="submit" name="submit" value="Save" class="btn btn-success">

                    </div>
                </div>

            </div>
            <!-- /.box-footer-->

        </form>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('crudbooster::admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>