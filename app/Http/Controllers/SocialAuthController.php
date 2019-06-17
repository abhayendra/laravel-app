<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Session;

class SocialAuthController extends Controller
{
    public function redirect($service) {
        return Socialite::driver ( $service )->redirect ();
    }

      public function callback($service) {
         $user = Socialite::with ($service)->user();
      if($service=="google") {
         $userDetail = User::where('email',$user['user']['email'])->get();
      if(count($userDetail)>0) {
         Auth::loginUsingId($userDetail[0]->id);
         return redirect('dashboard');
       } else {
           
          $userdata = new User;
          $userdata->name = $user['user']['name'];
          $userdata->email = $user['user']['email'];
          $userdata->password =  bcrypt('123456');
          $userdata->save();
         Auth::loginUsingId($userdata->id);
         return redirect()->back();
       }
       } else {
        Session::flash('error', 'Sorry, your log in information does not match our records.');
         return redirect()->back();
       }
         return view ('frontend.user.dashboard')->withDetails($user)->withService($service);
    }

}
