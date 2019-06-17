<?php
namespace App\Helpers;
use App\BlogCategory;
use App\CmsSetting;
use App\Country;
use App\Menu;
use App\PopularDestination;
use App\Region;
use App\TourPrice;
use App\User;
use App\UserLog;
use App\Tour;
use App\Review;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use App\Language;
use App\LanguageTranslation;
use DB;


class Helper
{


    public static function trans($sentance) {
        return "Abhayendra";
    }

    public static function menu() {
        $menus = Menu::where('status','1')
            ->get();
        return $menus;
    }

    public static function setting()
    {
        $setting = CmsSetting::pluck('content', 'name')
            ->all();
        return $setting;
    }

    public static function popularDestination($orderId) {
        $popularDestination = PopularDestination::where('position',$orderId)
            ->get();
        return $popularDestination;
    }

    public static function tourDetails($id) {
        $tourDetails = Tour::with('tourPrice')->find($id);
        return $tourDetails;
    }

    public static function userDetail($user_id) {
        $user = User::select('name')
            ->where('id',$user_id)
            ->first();
        return $user->name;
    }

    public static function tourPrice($id) {
        $tourPrice = TourPrice::join('traveler_types','traveler_types.id','tour_prices.traveler_type_id')
            ->where('tour_id',$id)
            ->orderBy('price','ASC')
            ->get();
        return $tourPrice;
    }

    public static function tourPriceTraveler ($id) {
        $tourPrice = TourPrice::join('traveler_types','traveler_types.id','tour_prices.traveler_type_id')
            ->where('tour_id',$id)
            ->orderBy('price','ASC')
            ->pluck('tour_prices.price','traveler_types.name');
        return $tourPrice;

    }

    public static function searchResult() {
        $populerSearch = UserLog::select(DB::raw('count(id) as total_search, page_url'))
            ->where('page_url','like','%search%')
            ->orWhere('page_url','like','%location%')
            ->orWhere('page_url','like','%attractions%')
            ->groupBy('page_url')
            ->orderBy('total_search','DESC')
            ->take(10)
            ->get();
        return $populerSearch;
    }

    public static function featureTour() {
        $featuredTours = UserLog::select(DB::raw('count(id) as total_search, page_url'))
            ->where('page_url','like','%location%')
            ->groupBy('page_url')
            ->orderBy('total_search','DESC')
            ->take(10)
            ->get();
        return $featuredTours;
    }

    public static function review($tour_id) {
        $reviews = Review::where('tour_id',$tour_id)
                    ->pluck('rating','id')
                    ->toArray();
        if(count($reviews)>0) {
         $average = round(array_sum($reviews) / count($reviews));
        } else {
         $average = 0;
        }
        $otherStar = 5-$average;
        $rating = "";
        for($i=1; $i<=$average; $i++) {
            $rating.= '<i class="fa fa-star" aria-hidden="true"></i>';
        }
        for($i=1; $i<=$otherStar; $i++) {
            $rating.= '<i class="fa fa-star" style="color: #ccc;" aria-hidden="true"></i>';
        }
        $rating.= " (".count($reviews)." Review )";
        return $rating;
    }

    public static function countryName($country_id) {
        $country = Country::select('name')
            ->where('id',$country_id)
            ->first();
        return $country->name;
    }

    public static function provinceName($province_id) {
        $province = Region::select('name')
            ->where('id',$province_id)
            ->first();
        return $province->name;
    }

    public static function showWishlist($tour_id) {
      $wishlist = Wishlist::where('user_id',Auth::user()->id)
      ->where('tour_id',$tour_id)
      ->get();
      if(count($wishlist)>0) {
        return true;
      } else {
        return false;
      }
    }

    public static function blogCategory($categoryId){
       $categpry = BlogCategory::where('id',$categoryId)->first();
       return $categpry->category;
    }

}


?>
