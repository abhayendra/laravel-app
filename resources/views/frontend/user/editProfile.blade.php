
@extends('frontend.layout.app')
@section('content')
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
                    {!! Form::open(['url'=>'/tours/','method'=>'get']) !!}
                    <input type="text" name="search" value="" id="search-box" autocomplete="off" placeholder="Where Do You Want to Go?" class="fld1"> <button type="submit" class="btn1">Find Tours</button>
                    <div class="search_dd" id="suggesstion-box">
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!--end search-->
<!--reg-->

<div class="reg_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">

              <div style="top:10px;">
                @if(Session::has('message'))
              <div class="alert alert-success">{!! Session::get('message') !!}</div>
              @endif
              @if(Session::has('error'))
              <div class="alert alert-danger">{!! Session::get('error') !!}</div>
              @endif
              </div>

              <div id="horizontalTab">
                  <ul>
                      <li><a href="#tab-1"> Edit Profile <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                      <li><a href="#tab-2">Change password <i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                  </ul>

                  <div id="tab-1">
                    {!! Form::open(['url'=>'user/saveEditProfile']) !!}
                    <input type="hidden" name="user_id" value="{!! $user->id !!}">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Full Name</label>
                            <input name="full_name" type="text" class="fld3" value="{!! $user->name !!}">
                            @if ($errors->has('full_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('full_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Gender</label>
                            <select class="fld3" name="gender">
                                <option value="male" @if($user->gender=='male') selected   @endif >Male</option>
                                <option value="female" @if($user->gender=='female') selected   @endif >Female</option>
                                <option value="other" @if($user->gender=='other') selected   @endif >Other</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Email</label>
                            <input name="email" type="email" class="fld3" value="{!!  $user->email !!}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Phone</label>
                            <input name="phone" type="number" class="fld3" value="{!!  $user->phone !!}">
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Date of Birth</label>
                            <input name="date_of_birth" type="text" value="{!! date('d/m/Y',strtotime($user->date_of_birth)) !!}" class="fld3" id="dob" autocomplete="off">
                            @if($errors->has('date_of_birth'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date_of_birth') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!--
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Password</label>
                            <input name="password" type="password" class="fld3">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Confirm Password</label>
                            <input name="password_confirmation" type="password" class="fld3">
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>-->
                    </div>
                    <p align="center"><button type="submit" class="btn4">Edit Profile</button></p>
                    {!! Form::close() !!}
                  </div>

                  <div id="tab-2">
                    {!! Form::open(['url'=>'user/savePassword']) !!}
                    <input type="hidden" name="user_id" value="{!! $user->id !!}">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Password</label>
                            <input name="password" type="password" class="fld3" required >
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Confirm Password</label>
                            <input name="password_confirmation" type="password" class="fld3" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <p align="center"><button type="submit" class="btn4">Update</button></p>
                    {!! Form::close() !!}
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

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
           yearRange: '{!! (date('Y')-100); !!}:{!! (date('Y')-10); !!}',
        });
    } );
</script>
<!--end reg-->
<!--Recommended-->
@endsection
