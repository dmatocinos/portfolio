<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AccountsController@listAll');

Route::get('accounts', 'AccountsController@listAll');

Route::get('accounts/{account_number}', 'AccountsController@showAccount');

Route::get('coinbase', 'CoinbaseController@getUSDConversion');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/control', 'AdminController@index');