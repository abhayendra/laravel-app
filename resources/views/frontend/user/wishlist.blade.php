@extends('frontend.layout.app')
@section('content')
    <!--mobile search-->
    <div class="mobile_search">
        {!! Form::open(['url'=>'/tours/','method'=>'get']) !!}
        <input name="search" type="text" placeholder="Search Niagara Falls"> <span id="search_hide"><i class="fa fa-times" aria-hidden="true"></i></span>
        {!! Form::close() !!}
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
    <!--breadcrumb-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb-my">
                    <li><a href="{!! url('/') !!}">Home</a></li>
                    <li><a href="{!! url('/dashboard') !!}">Dashboard</a></li>
                    <li class="active">Wishlist</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mid_listing">
                        <div class="result_heading">Wishlist</div>
                        <div class="line2"></div>
                        @foreach($wishlist as $tour)
                        <div class="box_wra">
                            <div class="box">
                                <div class="box_img">
                                    <a href="{!! url('/tour/'.$tour->slug) !!}">
                                        <img src="{{ 'public/'.$tour->images.'?w=400&h=250&fit=crop-center' }}" alt="" class="img-res">
                                    </a>
                                </div>
                                <div class="box_matter">
                                    <h4><a href="{!! url('/tour/'.$tour->slug) !!}">{!! $tour->title !!}</a></h4>
                                    <p>{{ substr(strip_tags($tour->overview),0,150) }}</p>
                                </div>
                                <div class="price_wra">
                                    <div class="day">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> {!! $tour->tour_duration !!}
                                        @php $avrage =  \App\Helpers\Helper::review($tour->id); @endphp
                                        <span>
                                         {!! $avrage !!}
                                        </span>
                                    </div>
                                    @php $tourPrice =  \App\Helpers\Helper::tourPrice($tour->id);    @endphp
                                    <div class="price">$ {!! $tourPrice[0]->price !!}</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
