<?php

namespace App\Http\Controllers;

use App\Review;
use App\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tour;
use App\CmsSetting;

class TourController extends Controller
{
    public function index() {
        $categories = Tour::select(DB::raw('count(tours.id) as total_tours,tour_categories.category_name'))
            ->join('tour_categories','tour_categories.id','tours.category_id')
            ->groupBy('tours.category_id','tour_categories.category_name')
            ->get();
        $tours = Tour::with('category','tourImages')->get();
        return view('frontend.tour.index',compact(['categories','tours']));
    }

    public function listingTour($keyword) {
        //$mostSearch = UserLog::where('')->get();
        $categories = Tour::select(DB::raw('count(tours.id) as total_tours,tour_categories.category_name'))
            ->join('tour_categories','tour_categories.id','tours.category_id')
            ->groupBy('tours.category_id','tour_categories.category_name')
            ->get();
        $tours = Tour::with('category','tourImages')->where('tour_location','like','%'.$keyword.'%')
        ->orWhere('attractions','like','%'.$keyword.'%')
        ->paginate('6')->toArray();
        return view('frontend.tour.listing',compact(['categories','tours','keyword']));
    }

    public function detailTour($slug) {
        $tour = Tour::with('category','tourImages','reviews')
            ->where('slug',$slug)
            ->first();
        return view('frontend.tour.detail',compact(['tour','title','description','keyword']));
    }






}
