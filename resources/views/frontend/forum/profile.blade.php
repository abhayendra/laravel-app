@extends('frontend.layout.app')
@section('content')
<!--matter-->
<div class="profile_wra">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="profile_img">
                    {!! Html::image('resources/assets/images/profile_pic_bg.jpg','',['class'=>'img-res']) !!}
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="tbl_name">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>
                                <div class="name">ReiseBeate <span><i class="fa fa-map-marker" aria-hidden="true"></i> Toronto, Canada</span><br>
                                    <div class="profile_detail">
                                        Since Jan 2009<br>
                                        65+ year old female
                                    </div>
                                </div>
                            </td>
                            <td align="right">
                                <select class="edit_profile">
                                    <option>Edit your profile</option>
                                    <option>Edit photo</option>
                                    <option>Account info</option>
                                    <option>Account settings</option>
                                    <option>Subscriptions</option>
                                </select>
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
                                        reisebeate@gmail.com</td>
                                    <td><strong>Questions posted</strong>
                                        341</td>
                                    <td><strong>Given answers</strong>
                                        543</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="collect_point">
                            <strong>Collect Points</strong>
                            <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Write a Review</a>
                            <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Add a Photo</a>
                            <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> Add Forum Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="contribution_wra">
                    <h3>My Contributions <span>Forum Posts (2)</span></h3>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl2">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Topic</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>15 Nov 2017</td>
                            <td>Reply</td>
                            <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                        </tr>
                        <tr>
                            <td>15 Nov 2017</td>
                            <td>Reply</td>
                            <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                        </tr>
                        <tr>
                            <td>15 Nov 2017</td>
                            <td>Reply</td>
                            <td><a href="#">What is the best value helicopter ride at Niagara Falls</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end matter-->
@endsection