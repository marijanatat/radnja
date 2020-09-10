<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;


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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin-radnja-mob'], function () {
    Voyager::routes();
});



Route::get('/', 'ProductController@index')->name('home');
Route::get('/proizvodi/{product}','ShopController@show')->name('shop.show');
Route::get('/korpa','CartController@index')->name('cart.index');
Route::post('/korpa','CartController@store')->name('cart.store');
Route::patch('/korpa/{product}','CartController@update')->name('cart.update');
Route::delete('/brisanje/{product}','CartController@destroy')->name('cart.destroy');

Route::post('/korpa/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/sacuvajZaKasnije/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/sacuvajZaKasnije/ubaciUKorpu/{product}', 'SaveForLaterController@switchToCart')
    ->name('saveForLater.switchToCart');

Route::get('/checkout','CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/poručivanje-bez-registracije','CheckoutController@index')->name('guestCheckout.index');
Route::get('/hvala', 'ConfirmationController@index')->name('confirmation.index');

Route::get('empty',function(){
    Cart::destroy();
});

Route::get('/moj-profil', 'UsersController@edit')->name('users.edit')->middleware('auth');
Route::patch('/moj-profil', 'UsersController@update')->name('users.update')->middleware('auth');
Route::get('/moje-porudžbine', 'OrdersController@index')->name('orders.index')->middleware('auth');
Route::get('/moje-porudžbine/{order}', 'OrdersController@show')->name('orders.show')->middleware('auth');


//footer 
Route::view('/poručivanje','info-pages.porucivanje')->name('porucivanje');
Route::view('/placanje','info-pages.placanje')->name('placanje');
Route::view('/isporuka','info-pages.isporuka')->name('isporuka');
Route::view('/reklamacije','info-pages.reklamacije')->name('reklamacije');
Route::view('/otkazivanje','info-pages.otkazivanje')->name('otkazivanje');
Route::view('/privatnost','info-pages.privatnost')->name('privatnost');
Route::view('/o-nama','info-pages.about')->name('about');
Route::view('/kolačići','info-pages.cookies')->name('cookies');
  
Route::livewire('/proizvodi', 'shop-livewire')->name('shop.index')
    ->layout('layouts.master');
    
