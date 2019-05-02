<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirect($service) {
        return Socialite::driver ( $service )->redirect ();
    }

    public function callback($service) {

         $user = Socialite::with ($service)->user();

         echo "<pre>"; print_r($user); echo "</Pre>"; die();


         if($service=="google") {
         $userDetail = User::where('email',$user->email)->first();
         //Auth::loginUsingId(2);
         return redirect('dashboard'); 
       } else {
        echo  "Facebook Required HTTPS for login authtication";
       }


        // return redirect()->route('dashboard');
         //echo "<pre>"; print_r($userDetail); die();
        /*
         if ($userDetail === 'NULL')
         {

         return User::create([
             'name' => $user->name,
             'email' => $user->email,
             'gender' => $user->gender,
             'password' => bcrypt('123456'),
           ]);

         }
        else {
          Auth::loginUsingId($userDetail->id);
          return redirect('dashboard');
        }
        } elseif($service=="facebook") {

         }
         else {

         }
         */
         return view ('frontend.user.dashboard')->withDetails($user)->withService($service);
    }

}
