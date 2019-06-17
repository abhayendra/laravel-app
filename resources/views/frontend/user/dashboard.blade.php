@extends('frontend.layout.app')
@section('content')
    <!--matter-->
    <div class="profile_wra">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="profile_img">
                        @if($user->photo=="")
                        {!! Html::image('resources/assets/images/profile_pic_bg.jpg','',['class'=>'img-res']) !!}
                        @else
                        {!! Html::image($user->photo,'',['class'=>'img-res']) !!}
                        @endif
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="tbl_name">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0"> 
                            <tr>
                                <td>
                                    <div class="name">{!! $user->name !!} <span><i class="fa fa-map-marker" aria-hidden="true"></i> {!! \App\Helpers\Helper::provinceName($user->city) !!}, {!! \App\Helpers\Helper::countryName($user->country) !!}</span><br>
                                        <div class="profile_detail">
                                            Since {!! date('M Y',strtotime($user->created_at)) !!}<br>
                                            {!!  date_diff(date_create($user->date_of_birth), date_create('today'))->y;  !!} year old {!! $user->gender !!}
                                        </div>
                                    </div>
                                </td>
                                <td align="right">
                                    <a href="{!! url('/user/edit_profile/'.Auth::user()->id) !!}"><div class="edit_profile">Edit your profile</div></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pro_detail2">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td><strong>Email</strong>
                                        {!! $user->email !!}</td>
                                        <td><strong>Phone</strong>
                                        {!! $user->phone !!}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--<div class="col-lg-12">
                            <div class="collect_point">
                                <strong>Collect Points</strong>
                                <a href="{!! url('/') !!}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Write a Review</a>
                                <a href="{!! url('/') !!}"><i class="fa fa-picture-o" aria-hidden="true"></i> Add a Photo</a>
                                <a href="{!! url('/') !!}"><i class="fa fa-comment-o" aria-hidden="true"></i> Add Forum Post</a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="horizontalTab">
                        <ul>
                            <li><a href="#tab-1"> My Bookings <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <li><a href="#tab-2">My Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <!--<li><a href="#tab-3">My Blogs <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <li><a href="#tab-4">Responsive Tab-4 <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            <li><a href="#tab-5">Responsive Tab-5 <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>-->
                        </ul>

                        <div id="tab-1">
                            @foreach($orders as $order)
                            <div class="date_mob">{!! date('l, D M Y',strtotime($order->booking_date)) !!}<span></div>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="booking_tbl">
                              <tr>
                                <td><div class="date3">{!! date('M',strtotime($order->booking_date)) !!}<span>{!! date('d',strtotime($order->booking_date)) !!}</span>{!! date('Y',strtotime($order->booking_date)) !!}</div></td>
                                <td>
                                <div class="tour_img">
                                        <a href="{!! url('tour/'.$order->slug) !!}">
                                            <img src="{!! url('/')."/".$order->images.'?w=150&h=100&fit=crop-center' !!}" alt="regina.jpg" class="img-res">
                                        </a>
                                </div></td>
                                <td><div class="tour_detail">
                                <h2><a href="#">{!! $order->title !!}</a></h2>
                                <div class="time">Starting time: {!! $order->departure_time !!} {!! date('l, d M Y',strtotime($order->booking_date)) !!}</div>
                                        @php  $cartInfo = json_decode($order->cart_information,true) ;
                                              $cartInfo = $cartInfo[$order->tour_id];
                                              $price = \App\Helpers\Helper::tourPriceTraveler($order->tour_id);
                                        @endphp
                                <div class="price_des">
                                  (
                                    @foreach($price as $key=>$val)
                                        @if($cartInfo['attributes'][$key]>0)
                                                CA$ {!!  $val !!} × {!!  $cartInfo['attributes'][$key] !!} {!! $key !!},
                                        @endif
                                    @endforeach
                                 )
                                </div>
                              </div></td>
                                <td><div class="total_column">
                                <div class="edit"><a href="#">Print</a></div>
                                <div class="total2">Total <span>CA$ {!! $order->total_amount !!}</span></div>
                              </div></td>
                              </tr>
                            </table>
                            <div class="price_des_mob">
                                (
                                @foreach($price as $key=>$val)
                                    @if($cartInfo['attributes'][$key]>0)
                                      CA$ {!!  $val !!} × {!!  $cartInfo['attributes'][$key] !!} {!! $key !!},
                                    @endif
                                @endforeach
                                 )
                            </div>
                            <div class="total_column total_mob">
                                <div class="edit"><a href="#">Edit</a></div>
                                <div class="total2">Total <span>CA$ {!! $order->total_amount !!}</span></div>
                                <div class="clearfix"></div>
                            </div>
                             <div style="clear:both"></div>
                              <hr/>
                            @endforeach
                        </div>
                        <div id="tab-2">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contribution_wra">
                                        <h3>My Blog</h3>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl2">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Blog Title</th>
                                            </tr>
                                            </thead>
                                             <tr>
                                               <td></td>
                                               <td></td>
                                             </tr>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end matter-->
@endsection
