@extends('frontend.layout.app')
@section('content')

    <script>
        $(document).ready(function() {
            $('#popular_destinations').delay(8000).fadeIn(400);
        });
    </script>

    @php
    echo "<pre>";
    print_r($tours);
    echo "</pre>";
    @endphp

    <!--banner-->
    <div class="banner_wra" style="background-image:{!! $setting['home_page_banner'] !!}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{!! $setting['home_page_banner_content'] !!}</h2>
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
    <!--end banner-->
    <!--Popular Destinations-->
    <div class="popular_wra" id="popular_destinations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">Popular Destinations</div>
                    <div class="see_all"><a href="#">see all</a></div>
                </div>
                @php
                    $divLayout = ['box','box2','box2','box2','box2','box3','box3','box3'];
                    $i = 0;
                @endphp
                @foreach($popularDestinations as $pd)
                <div class="desti_@php echo $divLayout[$i];  @endphp">
                    <div class="city">
                        <a href="{!! url('location/'.urlencode($pd->location)) !!}">
                            <img src="{{ 'public/'.$pd->image.'?w=588&h=376&fit=crop-center' }}" alt="{!! $pd->location !!}" class="lazy img-res">
                            <div class="city_name"><span>{!! $pd->destinations !!}</span></div>
                            <div class="city_button"><span>BOOK TOURS</span></div>
                        </a>
                    </div>
                </div>
                @php $i++; @endphp
                @endforeach
            </div>
        </div>
    </div>
    <!--end Popular Destinations-->
    <!--Recommended-->
    <div class="recommended_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">Recommended for You</div>
                    <div class="see_all"><a href="{!! url('/location/all') !!}">see all</a></div>
                </div>
                @foreach($tours as $tour)

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
    <!--end Recommended-->
    <!--why us-->
    <div class="why_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">Why Book with booktours?</div>
                </div>
                <!-- Home Page Setting -->
                 {!! $setting['why_us'] !!}
                <!-- End Home Page Setting -->
            </div>
        </div>
    </div>

@endsection
