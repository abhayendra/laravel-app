<?php
namespace App\Helpers;
use App\CmsSetting;
use App\Menu;
use App\PopularDestination;
use App\UserLog;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use App\Language;
use App\LanguageTranslation;


class Helper
{
 public static function trans($sentance) {
      return "Abhayendra";
 }
 public static function menu() {
   $menus = Menu::where('status','1')->get();
   return $menus;
 }
 public static function setting() {
     $setting = CmsSetting::pluck('content','name')->all();
     return $setting;
 }

 public static function popularDestination($orderId) {
     $popularDestination = PopularDestination::where('position',$orderId)->get();
     return $popularDestination;
 }


 public static function featureTour() {
   return $featureTour = ['Niagara Fall'];
 }

 public static function searchResult() {
   return $searchResult = ['New York','Lucknow','Niagara Fall'];
 }

 public static function tourDetails($id) {
   $tourDetails = Tour::find($id);
   return $tourDetails;
 }


}


?>
