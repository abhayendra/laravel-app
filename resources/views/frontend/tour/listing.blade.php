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
@php
    $tours = array_chunk($tours['data'],'3');
@endphp

<div class="listing_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col-lg-push-3 col-md-push-3 col-sm-push-3">
                <div class="mid_listing">
                    <div class="result_heading">{!! urldecode($keyword) !!} & Around Tours, Tickets & Activities</div>
                    <div class="line2"></div>
                    <div class="list_row_wra">
                        @foreach($tours as $tour)
                        <div class="row">
                            @foreach($tour as $singleTour)
                            <?php //print_r($singleTour); die();  ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="tour_box">
                                    <a href="#">{!! Html::image('public/'.$singleTour['images'].'?w=400&h=250&fit=crop-center','',['class'=>'img-res']) !!}</a>
                                    <div class="tour_title"><a href="{!! url('/tour/'.$singleTour['slug']) !!}">{!! @$singleTour['title'] !!}</a></div>
                                    <div class="rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        (0 Reviews)
                                    </div>
                                    <div class="list_detail">
                                        From: <a href="#">{!! $singleTour['departure_point'] !!}</a><br>
                                        Duration: {!! $singleTour['tour_duration'] !!}<br>
                                        Tour Code: {!! $singleTour['tour_code'] !!}
                                    </div>
                                    <div class="price2"><a href="#">$ {!! $singleTour['sell_price']-$singleTour['discount'] !!} </a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="social_share"><div class="sharethis-inline-share-buttons"></div></div>
                                <div class="page">Page:
                                    @if(@$tours['prev_page_url']!="")
                                    <a href="{!! $tours['prev_page_url']; !!}">Prev Page <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                                    @endif
                                    <a class="act" href="{!! @$tours['path']."/listing?page=".@$tours['current_page']  !!}">{!! @$tours['current_page'] !!}</a> |
                                    @if(@$tours['next_page_url']!="")
                                    <a href="{!! $tours['next_page_url'] !!}">Next <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="more_things">
                    <h2>More Things to Do in {!! urldecode($keyword) !!}  & Around</h2>
                    <a href="{!! url('location/niagara') !!}"> Niagara  </a>
                <div class="more_things">
                    <h2>Top {!! urldecode($keyword) !!}  & Around Attractions</h2>
                    <a href="{!! url('attractions/Niagara+Falls') !!}"> Niagara Fall  </a>
                </div>
                <div class="more_things">
                    <h2>Recommended for {!! urldecode($keyword) !!}  & Around</h2>
                    <a href="{!! url('location/lucknow') !!}"> Lucknow  </a>
                </div>
                <div class="more_things">
                    <h2>More Popular Destinations</h2>
                    <a href="{!! url('location/niagara') !!}"> Niagara  </a>
                </div>
            </div>
          </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
                <div class="list_menu">
                    <div class="filter_head"><i class="fa fa-caret-right" aria-hidden="true"></i> Categories</div>
                    <div class="category">
                        <ul>
                            @foreach($categories as $category)
                            <li><a href="#">{!! $category->category_name !!} ({!!  $category->total_tours !!})</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end listing-->
@endsection
