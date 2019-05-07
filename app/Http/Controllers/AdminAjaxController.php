<?php

namespace App\Http\Controllers;

use App\City;
use App\Region;
use Illuminate\Http\Request;

class AdminAjaxController extends Controller
{
    public function getProvince() {
        $country_id = $_GET['country_id'];
        $provinceList = Region::where('country_id',$country_id)->pluck('name','id');
        return $provinceList;
    }

    public function getCity() {
        $country_id = $_GET['country_id'];
        $region_id = $_GET['region_id'];
        $cityList = City::where('country_id',$country_id)
            ->where('region_id',$region_id)
            ->pluck('name','id');
        return $cityList;
    }

}
