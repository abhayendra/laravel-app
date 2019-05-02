<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\User;
use App\Tour;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function checkout() {
        return view('frontend.order.checkout');
    }

    public function checkoutPayment() {
        return view('frontend.order.checkout_payment');
    }

    public function saveCheckout(Request $request) {

        if($request->date_of_booking=="") {
            return Redirect::back()->withErrors(['msg', 'Date of Booking Required ']);
        }

        $travllers =  array_sum($request->travelers);

        if($travllers=="0") {
            return Redirect::back()->withErrors(['msg', 'Please Select at least one Adult Traveler']);
        }

        $attributes['date_of_booking'] =  $request->date_of_booking;

        foreach($request->travelers as $type=>$count) {
            $attributes[$type] = $count;
        }

       // print_r($attributes); die();

      $tourDetail = Tour::where('id',$request->tour_id)->first();
      $travllerCount= $request->adult+$request->child+$request->senior;
        Cart::add(array(
        'id' => $request->tour_id,
        'name' => $tourDetail->title,
        'price' => 0,
        'quantity' => $travllers,
        'attributes' => $attributes
      ));
      return redirect('checkout');
    }

    public function saveOrder(Request $request) {

         $i=0;
        foreach($request->tour_id as $tour) {
          $order = new Order;
          $order->user_id = Auth::user()->id;
          $order->tour_id = $request->tour_id[$i];
          $order->booking_date = $request->booking_date[$i];
          $order->lead_traveler_first_name = $request->traveler_first_name;
          $order->lead_traveler_last_name = $request->traveler_last_name;

          $order->email = $request->email;
          $order->phone = $request->phone;
          $order->newsletter = $request->newsletter;
          $order->country_id = $request->country_id;
          $order->additional_request = $request->additional_request;
          $order->status = '0';
          $order->save();
          $i++;
      }
      return \redirect('checkout_payment');

    }


    public function payment() {

    }

}
