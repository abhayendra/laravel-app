<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index() {

      return view('frontend.tour.index');
    }

    public function listing() {
      return view('frontend.tour.listing');
    }

    public function detail() {
      return view('frontend.tour.detail');
    }


}
