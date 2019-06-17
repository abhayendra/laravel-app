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
                <li><a href="{!! url(Request::segment(1)) !!}">{!! ucfirst(Request::segment(1)) !!}</a></li>
                @if($search=="")
                 <li class="active">All</li>
                @else
                <li class="active">{{ ucfirst($search) }}</li>
                @endif
            </ol>
            <div class="page">
            </div>
            <div class="short_wra" id="short_by">
                Short By:
                <select class="sortby" id="shortBy">
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=relevance')  !!}">Relevance</option>
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=new')  !!}">New &amp; Popular</option>
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=review_high')  !!}">Reviews - high to low</option>
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=review_low')  !!}">Reviews - low to high</option>
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=price_high')  !!}">Price - high to low</option>
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=price_low')  !!}">Price - low to high</option>
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=duration_high')  !!}">Duration - high to low</option>
                    <option value="{!! url(Request::segment(1).'/'.$keyword.'?order=duration_low')  !!}">Duration - low to high</option>
                </select>
            </div>
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
                    <div class="result_heading"> Search Result for "{!! urldecode($search) !!}"</div>
                    <div class="line2"></div>
                    <div class="list_row_wra">
                        @foreach($tours as $singleTour)
                            <div class="tour_box_wra">
                                <div class="tour_box">
                                    <a href="{!! url('/tour/'.$singleTour->slug) !!}">{!! Html::image('public/'.$singleTour->images.'?w=400&h=250&fit=crop-center','',['class'=>'img-res']) !!}</a>
                                    <div class="tour_title"><a href="{!! url('/tour/'.$singleTour->slug) !!}">{!! @$singleTour->title !!}</a></div>
                                    <div class="rating">
                                            @php $rating =  \App\Helpers\Helper::review($singleTour->id); @endphp
                                            {!! $rating !!}
                                    </div>
                                    <div class="list_detail">
                                        From: {!! $singleTour->departure_point !!}<br>
                                        Duration: {!! $singleTour->tour_duration !!}<br>
                                        Tour Code: {!! $singleTour->tour_code !!}
                                    </div>
                                    @php $price = \App\Helpers\Helper::tourPrice($singleTour->id) @endphp
                                    <div class="price2"> From $ {!! $price[0]->price !!}</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        @endforeach
                            <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="social_share"><div class="sharethis-inline-share-buttons"></div></div>
                                <div class="page">
                                    {{ $tours->links() }}
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
                        <a href="{!! url('location/niagara') !!}">Niagara</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">
                <div class="list_menu">
                    <div class="filter_head"><i class="fa fa-caret-right" aria-hidden="true"></i> Categories</div>
                    <div class="category">
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{!! url('/category/'.urlencode($category->category_name)) !!}">{!! $category->category_name !!} ({!!  $category->total_tours !!})</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        // bind change event to select
        $('#shortBy').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>

<!--end listing-->
@endsection
