<?php

namespace App\Http\Controllers;

use App\Country;
use App\Region;
use App\Tour;
use App\UserLog;
use Browser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function searchResult(Request $request) {

        $tourLocation = Tour::where('location','like',"%".$request->keyword."%")
            ->groupBy('location')
            ->get();

        $tourtitle = Tour::join('tour_prices','tours.id','tour_prices.tour_id')
            ->where('title','like',"%".$request->keyword."%")
            ->groupBy('tours.id')
            ->get();

        $tourAttractions = Tour::where('attractions','like',"%".$request->keyword."%")
            ->groupBy('attractions')
            ->get();

        $data = "";
        $data.= "<div class=\"search_scroll\">";
        if(count($tourLocation)>0) {
            $data.= "<ul class=\"search_li marker_li\">";
            foreach($tourLocation as $location) {
                $locationUrl = urlencode($location->location);
                $data.= "<li><a href=\"/location/$locationUrl\">$location->location</a></li>";
            }
            $data.= "</ul>";
        }

        if(count($tourAttractions)>0) {
            $data.= "<ul class=\"search_li star_li\">";
            foreach($tourAttractions as $attractions) {
                $attractionsUrl = urlencode($attractions->attractions);
                $data.= "<li><a href=\"/attractions/$attractionsUrl\">$attractions->attractions</a></li>";
            }
            $data.= "</ul>";
        }

        if(count($tourtitle)>0) {
            $data.= "<ul class=\"search_li img_li\">";
            foreach($tourtitle as $title) {
                $url = url('/public/'.$title->images)."?w=75&h=50&fit=crop-center";
                $data.= "<li><a href=\"/tour/$title->slug\"><img src=\"$url\" alt=\"$title->title\"> $title->title
                    <div> From $ $title->price USD per person </div > 
                    <div class=\"clearfix\" ></div>
                    </a>
                    </li>";
            }
            $data.= "</ul>";
        }
        $data.= "</div>
                 <div class=\"more_result\">
                  <a href=\"/tours/?search=$request->keyword\"><i class=\"fa fa-search\"></i> Find more results</a>
                </div>";
        echo $data;
    }

    public function clienLog() {
        if(Browser::isMobile()) {
            $platefrom = "Mobile";
        } elseif(Browser::isTablet()) {
            $platefrom = "Tablet";
        } elseif(Browser::isDesktop()) {
            $platefrom = "Desktop";
        } elseif(Browser::isBot()) {
            $platefrom = "Bot";
        } else {
            $platefrom = "Other";
        }
        if(Auth::check())
        {
            $user_id =  Auth::user()->id;
        } else
        {
            $user_id =  '0';
        }
        $ip = \Request::ip();;
        $position = Location::get($ip);

         $userLog = new UserLog;
         $userLog->user_id = $user_id;
         $userLog->session_id = "0000000";
         $userLog->log_type = $_GET['log_type'];
         $userLog->page_url = $_GET['request_uri'];
         $userLog->ip_address = $_SERVER['REMOTE_ADDR'];
         $userLog->country = $position->countryCode;
         $userLog->city = $position->cityName;
         $userLog->isp = "---";
         $userLog->platefrom = $platefrom;
         $userLog->os = Browser::platformName();
         $userLog->browser = Browser::browserFamily();
         $userLog->browser_version = Browser::browserVersion();
         $userLog->client_time = $_GET['client_time'];
         $userLog->save();

    }

    public function country() {
        $countryList =  Country::orderBy('name','ASC')->pluck('name','id');
        return $countryList;
    }


    public function province() {
        $id = $_GET['country_id'];
        $cityList = Region::where('country_id',$id)
            ->orderBy('name','ASC')
            ->pluck('id','name');
        return $cityList;
    }


    public function tourVisit() {
        $tourId = $_GET['tourId'];
        $visite = Tour::where('id',$tourId)->increment('visit');
    }


}
