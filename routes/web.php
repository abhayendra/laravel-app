<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('dashboard','UserController@dashboard');
Route::get('/redirect/{service}','SocialAuthController@redirect');
Route::get('/callback/{service}','SocialAuthController@callback');
//Route::get('home')

//TourController
Route::get('/','TourController@index');
Route::get('location/{keyword}','TourController@listingTour');
Route::get('attractions/{keyword}','TourController@listingTour');
Route::get('tour/{slug}','TourController@detailTour'); 

Route::post('order/checkout','OrderController@saveCheckout');
Route::get('checkout','OrderController@checkout');
Route::get('checkout_payment','OrderController@checkoutPayment');
Route::post('order/save-order','OrderController@saveOrder');

//Ajax Controller
Route::get('search','AjaxController@searchResult');
Route::get('client-log','AjaxController@clienLog');
Route::get('tour-visit','AjaxController@tourVisit');

//Blog Controller
Route::get('blog','BlogController@index');
Route::get('blog/details/{slug}/{id}','BlogController@details');

//forum
Route::get('forum','ForumController@index');
Route::get('forum/show_topic','ForumController@detail');
Route::get('forum/profile','ForumController@profile');
