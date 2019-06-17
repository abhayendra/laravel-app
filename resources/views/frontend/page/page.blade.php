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
                    <li><a href="{!! url('/page/'.$page->slug) !!}">Page</a></li>
                    <li><a href="{!! url('/page/'.$page->slug) !!}">{!! $page->title !!}</a></li>
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
                        <div class="result_heading">{!! $page->title !!}</div>
                        <div class="line2"></div>
                        <div class="faq_wra">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
                    <div class="list_menu">
                        <div class="filter_head"><i class="fa fa-caret-right" aria-hidden="true"></i> Other Link </div>
                        <div class="category">
                            <ul>
                              @foreach($allPage as $p)
                                <li><a href="{!! url('/page/'.$p->slug) !!}">{!! $p->title !!}</a></li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
