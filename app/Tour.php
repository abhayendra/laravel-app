<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TourCategory;
use App\TourPicture;
use App\Review;

class Tour extends Model
{
    public function category() {
        return $this->hasOne('App\TourCategory','id','category_id');
    }

    public function tourImages() {
        return $this->hasMany('App\TourPicture','id','tour_id');
    }

    public function reviews() {
        return $this->hasMany('App\Review','id','tour_id');
    }
}
