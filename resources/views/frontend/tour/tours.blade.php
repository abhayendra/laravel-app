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
            <div class="view_link">
              <div class="btn-group btn-group-sm row_grid" role="group" aria-label="..." >
                <button type="button" class="btn btn-success active"><i class="fa fa-th-list"></i> List</button>
                <button type="button" class="btn btn-success"><i class="fa fa-th"></i> Grid</button>
              </div>
            </div>
            <div class="short_wra">
             Short By:
             <select class="sortby" id="shortBy">
                 <option {{ $order == 'relevance' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=relevance')  !!}">Relevance</option>
                 <option {{ $order == 'new' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=new')  !!}">New &amp; Popular</option>
                 <option {{ $order == 'review_high' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=review_high')  !!}">Reviews - high to low</option>
                 <option {{ $order == 'review_low' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=review_low')  !!}">Reviews - low to high</option>
                 <option {{ $order == 'price_high' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=price_high')  !!}">Price - high to low</option>
                 <option {{ $order == 'price_low' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=price_low')  !!}">Price - low to high</option>
                 <option {{ $order == 'duration_high' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=duration_high')  !!}">Duration - high to low</option>
                 <option {{ $order == 'duration_low' ? ' selected' : '' }} value="{!! url(Request::segment(1).'/'.'?search='.$search.'&order=duration_low')  !!}">Duration - low to high</option>
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
                    <div class="result_heading">@if($search) Search Result for "{!! urldecode($search) !!}" @else Tours @endif</div>
                    <div class="line2"></div>

                    <div class="list_row_wra">
                      <div class="row_wra" id="row_wra">
                      @foreach($tours as $singleTour)
                      <div class="thumb_pad">
                         <div class="thumb_view">
                           <a href="{!! url('/tour/'.$singleTour->slug) !!}">
                           <div class="tour_box_img">
                             {!! Html::image('public/'.$singleTour->images.'?w=400&h=250&fit=crop-center','',['class'=>'img-res']) !!}
                           </div>
                           <div class="tour_box_detail">
                              <div class="tour_title">{!! @$singleTour->title !!}</div>
                              <div class="rating">
                                @php $rating =  \App\Helpers\Helper::review($singleTour->id); @endphp
                                {!! $rating !!}
                              </div>

                              <div class="price2">
                                @php $price = \App\Helpers\Helper::tourPrice($singleTour->id) @endphp
                                From USD<b>${!! $price[0]->price !!}</b><p> <span>${!! $price[0]->price !!}</span>  Save ${!! $price[0]->price !!}</p>
                                <div class="see_btn">See Details</div>
                              </div>

                              <div class="list_detail">
                                <strong>From:</strong> {!! $singleTour->departure_point !!}<br>
                                <strong>Duration:</strong> {!! $singleTour->tour_duration !!}<br>
                                <strong>Tour Code:</strong> {!! $singleTour->tour_code !!}
                              </div>
                              <div class="tour_tag">
                                <span class="tag_green">Great Value</span>
                                <span class="tag_red">Likely to sell out</span>
                              </div>
                              <div class="tag_line_wra">
                                <p class="red_line">Booked 3 times for your dates in the last 12 hours</p>
                                <p class="green_line">Risk free: You can cancel later, so lock in this great price today</p>
                              </div>

                              <div class="clearfix"></div>
                            </div>
                           <div class="clearfix"></div>
                           </a>
                         </div>
                      </div>
                      @endforeach
                      </div>

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
        $('.row_grid button').on('click', function() {
          $('.row_grid button').removeClass('active');
          $(this).addClass('active');

          $( "#row_wra" ).toggleClass(function() {
            if ( $( this ).is( ".row_wra" ) ) {
              $( "#row_wra" ).removeClass('row_wra');
              return "grid_wra";
            } else {
              $( "#row_wra" ).removeClass('grid_wra');
              return "row_wra";
            }
          });

        });
    });
</script>

<!--end listing-->
@endsection
