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

Imgfly::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::get('faq','HomeController@faqPage');
Route::get('page/{any}','HomeController@page');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('dashboard','UserController@dashboard');
Route::get('saveWishlist/{tour_id}','UserController@saveWishlist');
Route::get('wishlist','UserController@wishlist');
Route::get('/user/edit_profile/{id}','UserController@editProfile');
Route::post('/user/saveEditProfile','UserController@saveEditProfile');


Route::get('/redirect/{service}','SocialAuthController@redirect');
Route::get('/callback/{service}','SocialAuthController@callback');
//Route::get('home')

//TourController
Route::get('/','TourController@index');
Route::get('location/{keyword}','TourController@listingTour');
Route::get('attractions/{keyword}','TourController@listingTour');
Route::get('tour/{slug}','TourController@detailTour');
Route::get('tours','TourController@tours');
Route::get('category/{any}','TourController@category');
Route::post('saveReview','TourController@saveReview');

Route::post('order/checkout','OrderController@saveCheckout');
Route::get('checkout','OrderController@checkout');
Route::get('checkout_payment','OrderController@checkoutPayment');
Route::get('payment-done','OrderController@paymentDone');
Route::post('order/save-order','OrderController@saveOrder');
Route::get('order/cartRemove/{cart_id}','OrderController@cartRemove');
Route::post('stripe', 'OrderController@stripePost')->name('stripe.post');

//Ajax Controller
Route::get('search','AjaxController@searchResult');
Route::get('search-blog','AjaxController@searchBlogResult');
Route::get('client-log','AjaxController@clienLog');
Route::get('getCountry','AjaxController@country');
Route::get('getProvince','AjaxController@province');

//Blog Controller
Route::get('blog','BlogController@index');
Route::get('blog/details/{slug}','BlogController@details');
Route::post('email-subscription','BlogController@EmailSubscription');

//forum
Route::get('forum','ForumController@index');
Route::get('forum/show_topic','ForumController@detail');
Route::get('forum/profile','ForumController@profile');
Route::get('admin/getProvince','AdminAjaxController@getProvince');
//Route::get('admin/')
