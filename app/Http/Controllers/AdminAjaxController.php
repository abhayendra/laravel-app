<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class AdminAjaxController extends Controller
{
    public function getProvince($country_id){

        $provinceList = Region::where('country_id',$country_id)->pluck('name','id');
        return $provinceList;

    }



}
