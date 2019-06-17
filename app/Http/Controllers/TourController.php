<?php

namespace App\Http\Controllers;

use App\Country;
use App\PopularDestination;
use App\Review;
use App\TourCategory;
use App\UserLog;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tour;
use App\CmsSetting;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Auth;


class TourController extends Controller
{
    public function index() {

        $ip = \Request::ip();
        $position = Location::get($ip);
        $countryId = Country::where('code',$position->countryCode)
            ->first();
        $categories = Tour::select(DB::raw('count(tours.id) as total_tours,tour_categories.category_name'))
            ->join('tour_categories','tour_categories.id','tours.category_id')
            ->groupBy('tours.category_id','tour_categories.category_name')
            ->get();

        $tours = Tour::with('tourImages')
            ->where('country',$countryId->id)
            ->orderBy('visit','DESC')
            ->take(4)
            ->get()->toArray();

        $remainingTours = 4 - count($tours);
        if(count($tours)<4) {
            $tours = Tour::with('tourImages')
                ->orderBy('visit','DESC')
                ->take($remainingTours)
                ->get();
        }

        $popularDestinations = PopularDestination::where('status',1)
            ->orderBy('position','ASC')
            ->get();


        return view('frontend.tour.index',compact(['categories','tours','popularDestinations']));
    }

    public function listingTour($keyword) {

        $order = $_GET['order'];

        $keyword = urldecode($keyword);
        $categories = Tour::select(DB::raw('count(tours.id) as total_tours,tour_categories.category_name'))
            ->join('tour_categories','tour_categories.id','tours.category_id')
            ->groupBy('tours.category_id','tour_categories.category_name')
            ->get();
        $tours = Tour::with('category','tourImages')
            ->where('location','like','%'.$keyword.'%')
            ->orWhere('attractions','like','%'.$keyword.'%');

        if($order=="new") {
            $tours = $tours->orderBy('created_at','ASC');
        }

        if($order=="duration_low") {
            $tours = $tours->orderBy('tour_duration','ASC');
        }
        if($order=="duration_high") {
            $tours = $tours->orderBy('tour_duration','DESC');
        }

        if($order=="duration_high") {
            $tours = $tours->orderBy('tour_duration','DESC');
        }

        if($order=="review_high") {
            $tours = $tours->orderBy('id','ASC');
        }

        if($order=="review_low") {
            $tours = $tours->orderBy('id','DESC');
        }

        if($order=="price_high") {
            $tours = $tours->orderBy('id','DESC');
        }

        if($order=="price_low") {
            $tours = $tours->orderBy('id','DESC');
        }

        $tours = $tours->paginate('24');

        return view('frontend.tour.listing',compact(['categories','tours','keyword']));
    }

    public function detailTour($slug) {
        $tour = Tour::with('category','tourImages','reviews')
            ->where('slug',$slug)
            ->first();
        return view('frontend.tour.detail',compact(['tour','title','description','keyword']));
    }

    public function tours()  {

        $order = $_GET['order'];

        $search = urldecode($_GET['search']);

        $categories = Tour::select(DB::raw('count(tours.id) as total_tours,tour_categories.category_name'))
            ->join('tour_categories','tour_categories.id','tours.category_id')
            ->groupBy('tours.category_id','tour_categories.category_name')
            ->get();

        $tours = Tour::with('category','tourImages')
            ->where('location','like','%'.$keyword.'%')
            ->orWhere('attractions','like','%'.$keyword.'%');

        if($order=="new") {
            $tours = $tours->orderBy('created_at','ASC');
        }

        if($order=="duration_low") {
            $tours = $tours->orderBy('tour_duration','ASC');
        }
        if($order=="duration_high") {
            $tours = $tours->orderBy('tour_duration','DESC');
        }

        if($order=="duration_high") {
            $tours = $tours->orderBy('tour_duration','DESC');
        }

        if($order=="review_high") {
            $tours = $tours->orderBy('id','ASC');
        }

        if($order=="review_low") {
            $tours = $tours->orderBy('id','DESC');
        }

        if($order=="price_high") {
            $tours = $tours->orderBy('id','DESC');
        }

        if($order=="price_low") {
            $tours = $tours->orderBy('id','DESC');
        }

        $tours = $tours->paginate('24');

        return view('frontend.tour.tours',compact(['categories','tours','search']));
    }

    public function category($any) {
        $order = $_GET['order'];
        $category = urldecode($any);
        $catId = TourCategory::select('id','category_name')
            ->where('category_name','like',$category)
            ->first();
        $categoryName = $catId->category_name;
        $categories = Tour::select(DB::raw('count(tours.id) as total_tours,tour_categories.category_name'))
            ->join('tour_categories','tour_categories.id','tours.category_id')
            ->groupBy('tours.category_id','tour_categories.category_name')
            ->get();

        $tours = Tour::with('category','tourImages')
            ->where('category_id',$catId->id);

        if($order=="new") {
            $tours = $tours->orderBy('created_at','ASC');
        }

        if($order=="duration_low") {
            $tours = $tours->orderBy('tour_duration','ASC');
        }
        if($order=="duration_high") {
            $tours = $tours->orderBy('tour_duration','DESC');
        }

        if($order=="duration_high") {
            $tours = $tours->orderBy('tour_duration','DESC');
        }

        if($order=="review_high") {
            $tours = $tours->orderBy('id','ASC');
        }

        if($order=="review_low") {
            $tours = $tours->orderBy('id','DESC');
        }

        if($order=="price_high") {
            $tours = $tours->orderBy('id','DESC');
        }

        if($order=="price_low") {
            $tours = $tours->orderBy('id','DESC');
        }

        $tours = $tours->paginate('24');

        if($category=="all") {
            $categoryName = "All";
            $tours = Tour::with('category','tourImages')
                ->paginate('24');
        }

        return view('frontend.tour.category',compact('categories','tours','categoryName'));
    }

    public function saveReview(Request $request) {
        $review = new Review;
        $review->tour_id = Input::get('tour_id');
        $review->user_id = Auth::user()->id;
        $review->review = $request->comment;
        $review->rating = $request->rating;
        $review->status = 1;
        $review->save();
        return redirect()->back();
    }



}
