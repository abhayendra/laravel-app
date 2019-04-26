<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FourmController extends Controller
{
    public function index() {
        return view('frontend.forum.index',compact([]));
    }


    public function detail() {
        return view('frontend.forum.detail',compact([]));
    }


    public function profile() {
        return view('frontend.forum.profile',compact([]));
    }
}
