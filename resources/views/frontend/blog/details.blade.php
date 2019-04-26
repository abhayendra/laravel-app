@extends('frontend.layout.app')
@section('content')
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
                    <li><a href="#">Blog</a></li>
                    <li class="active">Enjoy Winter Festivals In The Rockies</li>
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
                    {!! Html::image('resources/assets/images/blog1.jpg','',['class'=>'img-res']) !!}
                    <div class="heading3">Enjoy Winter Festivals In The Rockies</div>
                    <div class="category_txt">Winter Festivals & Tours</div>
                    <div class="social2">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="date_row">
                        <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> March 6, 2017 10:22 am</a>
                        <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> ontario</a>
                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 0 comment</a>
                        <a href="#">By: krishna rao </a>
                    </div>
                    <div class="blog_detail_txt">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h3>Ice Magic Festival | Lake Louise | Jan 19 – 29, 2017</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into <a href="#" target="_blank">electronic typesetting</a>, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h3>Banff's Big Taste | Banff | Jan 18 – 22, 2017</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a <strong>galley of type and scrambled</strong> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <h3>Lorem Ipsum is simply dummy text list:</h3>
                        <ul>
                            <li>Lorem Ipsum has been the industry's standard dummy text </li>
                            <li>ever since the 1500s, when an unknown </li>
                            <li>printer took a galley of type and scrambled </li>
                            <li>It to make a type specimen book</li>
                        </ul>
                        <h3>Ice Magic Festival | Lake Louise | Jan 19 – 29, 2017</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into <a href="#" target="_blank">electronic typesetting</a>, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>

                    <div class="comment_wra">
                        <h3>Leave a Comment</h3>
                        <h4>Your email address will not be published. Required fields are marked *</h4>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label for="comment">Comment</label></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><textarea name="" cols="" rows="5" id="comment"></textarea></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label for="name">Name *</label></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><input name="" type="text" id="name"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label for="email">Email * </label></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><input name="" type="email" id="email"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><label for="website">Website </label></div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><input name="" type="url" id="website"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">&nbsp;</div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12"><button>Post Comment</button></div>
                        </div>
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
    <!--end blog-->

    <style>
        .heading2 {
            padding: 15px 5px;
        }
    </style>
    <!--end blog-->
@endsection