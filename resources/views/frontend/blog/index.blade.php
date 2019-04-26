@extends('frontend.layout.app')
@section('content')
<!--breadcrumb-->
<div class="search_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="fld_wra">
                    <input type="text" placeholder="Search destination, small group tours, hotel, cruise, deals" class="fld1"> <button class="btn1">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb-my">
                <li><a href="#">Home</a></li>
                <li class="active">Blog</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<!--blog-->
<div class="blog_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                @php $i=1;  @endphp
                @foreach($blogs as $blog)
                <div class="heading2">
                    @if($i==1)
                    <select class="category">
                        <option>Choose Category</option>
                        @foreach($categories as $category)
                        <option value="{!! $category->category !!}">{!! $category->category !!}</option>
                        @endforeach
                    </select>
                    @endif
                    <b>Winter Festivals & Tours <span><a href="#">view all</a></span></b>
                    <div class="clearfix"></div>
                </div>
                @foreach($blog as $b)

                <div class="blog_box">
                    <div class="blog_img">{!! Html::image('resources/assets/images/blog1.jpg','',['class'=>'img-res']) !!}</div>
                    <div class="blog_txt">
                        <h2><a href="{!! url("blog/details/".$b['id']."/blog") !!}">{!! $b['title'] !!}</a></h2>
                        <div class="date_row"><a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> {!! date('d M Y ', strtotime($b['created_at'])) !!}</a> <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {!!  $b['location'] !!}</a>  <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 0 comment</a></div>
                        <p>The Holiday season has been and gone and it's now time to start celebrating Winter. Can you think of a more magical winter wonderland than the Rockies? Neither can we! </p>
                        <div class="by"><a href="#">By: Superadmin </a></div>
                        <div class="read_more"><a href="{!! url("blog/details/".$b['id']."/blog") !!}">Read More</a></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @endforeach
                @endforeach
                <div class="pagination_wra">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                        <li class="act"><a href="#">1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="blog_thumb_wra">
                    <div class="heading2">Most popular all time</div>
                    <div class="blog_thumb_box">
                        <a href="#">{!! Html::image('resources/assets/images/blog_thumb2.jpg','',['class'=>'img-res']) !!}</a>
                        <h2><a href="#">Top five luxurious yachting destinations</a></h2>
                        <div class="date_row_thumb">
                            <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> March 6, 2017 10:22 am</a> <a href="#">By: krishna rao</a>
                        </div>
                    </div>
                </div>
                <div class="newsletter_wra">
                    <h2>Sign up for newsletter</h2>
                    <div class="newsletter_box">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><input name="" type="text" placeholder="Your Email ID"></td>
                                <td width="55"><button><i class="fa fa-arrow-right" aria-hidden="true"></i></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .heading2 {
        padding: 15px 5px;
    }
</style>
<!--end blog-->
@endsection