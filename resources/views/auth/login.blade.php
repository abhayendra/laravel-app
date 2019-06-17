@extends('frontend.layout.app')
@section('content')
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
            {!! Form::open(['url'=>'login']) !!}
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
              <div style="top:10px;">
                @if(Session::has('message'))
              <div class="alert alert-success">{!! Session::get('message') !!}</div>
              @endif
              @if(Session::has('error'))
              <div class="alert alert-danger">{!! Session::get('error') !!}</div>
              @endif
              </div>
                <h3>Log In with your favorite social network</h3>
                <a href="redirect/facebook" class="fb_connect"><i class="fa fa-facebook" aria-hidden="true"></i> Connect</a>
                <a href="redirect/google" class="g_connect"><i class="fa fa-google" aria-hidden="true"></i> Connect</a>
                <h3>Log In</h3>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Email</label>
                        <input name="email" type="email" class="fld3">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                             </span>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Password</label>
                        <input name="password" type="password" class="fld3">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <p><a href="#">Forgot password?</a></p>
                <p align="center"><button type="submit" class="btn4">Log In</button></p>
                <p align="center">Don't have an account yet? <a href="{!! url('register') !!}">Sign Up</a></p>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!--end reg-->

@endsection
