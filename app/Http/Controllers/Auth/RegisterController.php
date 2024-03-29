<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Helpers\Helper;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:cms_users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
            'gender' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        $settings = Helper::setting();

        $maildata = array('sender_name'=>$settings->appname,
        'sender_email'=>$settings->email_sender,
        'name'=>$data['full_name'],
        'email'=>$data['email']
      );

      echo "<pre>"; print_r($maildata); echo "</pre>";
      exit;

        Mail::send('email.register', $maildata, function($message) {
           $message->to($maildata['sender_email'], $maildata['sender_name'])
           ->subject(' Thenks for register with us');
           $message->from($maildata['email'],$maildata['name']);
        });

        return User::create([
            'name' => $data['full_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'city' => $data['city'],
            'country' => $data['country'],
            'date_of_birth' => $data['date_of_birth'],
            'password' => bcrypt($data['password']),
        ]);





    }

}
