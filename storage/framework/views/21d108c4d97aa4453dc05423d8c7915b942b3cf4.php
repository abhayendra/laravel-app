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
<!--reg-->
<?php echo Form::open(['url'=>'register']); ?>

<div class="reg_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">

              <div style="top:10px;">
                <?php if(Session::has('message')): ?>
              <div class="alert alert-success"><?php echo Session::get('message'); ?></div>
              <?php endif; ?>
              <?php if(Session::has('error')): ?>
              <div class="alert alert-danger"><?php echo Session::get('error'); ?></div>
              <?php endif; ?>
              </div>

                <h3>Connect with your favorite social network</h3>
                <a href="redirect/facebook" class="fb_connect"><i class="fa fa-facebook" aria-hidden="true"></i> Connect</a>
                <a href="redirect/google" class="g_connect"><i class="fa fa-google" aria-hidden="true"></i> Connect</a>
                <h3>Sign Up</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>Full Name</label>
                        <input name="full_name" type="text" class="fld3">
                        <?php if($errors->has('full_name')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('full_name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Gender</label>
                        <select class="fld3" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <?php if($errors->has('gender')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('gender')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Email</label>
                        <input name="email" type="email" class="fld3">
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Phone</label>
                        <input name="phone" type="number" class="fld3">
                        <?php if($errors->has('phone')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('phone')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Date of Birth</label>
                        <input name="date_of_birth" type="text" class="fld3" id="dob" autocomplete="off">
                        <?php if($errors->has('date_of_birth')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('date_of_birth')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Country</label>
                        <select name="country" id="country" class="fld3">

                        </select>
                        <?php if($errors->has('country')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('country')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>City</label>
                        <select name="city" id="province" class="fld3">
                        </select>
                        <?php if($errors->has('city')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('city')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Password</label>
                        <input name="password" type="password" class="fld3">
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Confirm Password</label>
                        <input name="password_confirmation" type="password" class="fld3">
                        <?php if($errors->has('password_confirmation')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
                <p><input name="subscribe" type="checkbox" value=""> Yes, sign me up to recieve information about new tours, attractions, deals and discounts.</p>
                <p>You can unsubscribe at any time at www.booktours.ca/unsubscribe or by sending an email to unsubscribe@booktours.ca</p>
                <p align="center"><button type="submit" class="btn4">Create Account</button></p>
                <p align="center">Already have an account? <a href="<?php echo url('login'); ?>">Log in</a></p>
            </div>
        </div>
    </div>
</div>
<?php echo Form::close(); ?>

<script>
    $(document).ready(function(){
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo url('getCountry'); ?>",
                success: function(country){
                    var $country = $('#country');
                    $country.empty();
                    $.each( country, function( key, value ) {
                        $country.append('<option value=' + key + '>' + value + '</option>');
                    });
                }
            });
        });
    });

    $(document).ready(function(){
        $("#country").change(function(){
            var countryId = $(this).val();
            var dataString = "country_id="+countryId;
            $.ajax({
                type: "GET",
                url: "<?php echo url('getProvince'); ?>",
                data: dataString,
                success: function(province){
                    var $province = $('#province');
                    $province.empty();
                    $.each( province, function( key, value ) {
                        $province.append('<option value=' + value + '>' + key + '</option>');
                    });
                }
            });
        });
    });
</script>
<script>
    $( function() {
        $( "#dob" ).datepicker({
            changeMonth: true,
            changeYear: true,
           yearRange: '1900:2019',
        });
    } );
</script>
<!--end reg-->
<!--Recommended-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content2'); ?>
    saghhdghsadhkfasfdgfdgfasgfgsfgdfgfgdsfadsfgdfgasfgsafgsfg
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>