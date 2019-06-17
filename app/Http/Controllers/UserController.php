<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\User;
use App\Wishlist;
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

    public function saveWishlist($tour_id) {
      $wishlist = new Wishlist;
      $wishlist->user_id = Auth::user()->id;
      $wishlist->tour_id = $tour_id;
      $wishlist->status = '1';
      $wishlist->save();
      return redirect()->back();
    }

    public function wishlist() {
      $wishlist = Wishlist::join('tours','tours.id','wishlists.tour_id')
      ->where('wishlists.status','1')
      ->get();
      return view('frontend.user.wishlist',compact(['wishlist']));
    }

    public function editProfile($id) {
       $user = User::find($id);
       return view('frontend.user.editProfile',compact(['user']));
    }





}
