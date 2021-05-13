<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', function () {
    return view('welcome');
});


Route::get('/redirect/{service}', 'SocialController@redirect');
Route::get('/callback/{service}', 'SocialController@callback');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('fillable', 'OfferController@getOffer');


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::group(['prefix' => 'offers'], function () {

        Route::get('create', 'OfferController@create');
        Route::post('store', 'OfferController@store')->name('offers.store');

        Route::get('all', 'OfferController@allOffer');

        Route::get('edit/{offer_id}', 'OfferController@offerEdit');
        Route::post('update/{offer_id}', 'OfferController@offerUpdate')->name('offers.update');

    });

});

Route::group(['namespace' => 'Auth', 'middleware' =>'checkExpire'], function () {
    Route::get('checkexpire', 'ExpireController@checkexpire')->name('expire.ORNOT');

});



#############################   Begin  relation routes ###########################################################

    Route::group(['namespace' => 'Relation'], function () {

       Route::get('get-user-and-adress','RelationController@GetUserAndPhone');
       Route::get('get-user-have-adress','RelationController@GetUserhaveAndPhone');
       Route::get('get-user-have-adress-by-id','RelationController@GetUserhaveAndPhoneById');

    });

################################   End  relation  routes    ########################################################
