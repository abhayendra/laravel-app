<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use Stevebauman\Location\Facades\Location;
use App\Country;
use App\EmailSubscriber;
use Illuminate\Http\Request;
use Session; 

class BlogController extends Controller
{
    public function index() {
        $categories = BlogCategory::where('status',1)
            ->get();
        $blogs = Blog::where('status','1')->orderBy('created_at','desc')->take('10')->get();
        $blogs = $blogs->groupBy('category_id')->toArray();

        $mostpopular = Blog::where('status','1')
            ->orderBy('id','desc')
            ->take(5)
            ->get();
        return view('frontend.blog.index',compact(['categories','blogs']));
    }

    public function details($slug) {
        $blog =  Blog::where('slug',$slug)
            ->get();
        return view('frontend.blog.details',compact(['blog']));
    }

    public function EmailSubscription(Request $request) {

      $ip = \Request::ip();
      $position = Location::get($ip);
      $country = Country::select('name')->where('code',$position->countryCode)
          ->first();

      $sub = new EmailSubscriber;
      $sub->email = $request->email;
      $sub->ip = $ip;
      $sub->country = $country->name;
      $sub->save();

      Session::flash('subscriptionsuccess', 'Thanks for subscribe our newsletter');
      return redirect()->back();
    }


}
