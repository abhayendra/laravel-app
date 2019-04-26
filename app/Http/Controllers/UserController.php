<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function dashboard() { 
        $user = User::where('id',Auth::user()->id)->first();
        $orders = Order::join('tours','tours.id','orders.tour_id')->where('user_id',Auth::user()->id)->get();
        return view('frontend.user.dashboard',compact(['user','orders']));
    }

}
