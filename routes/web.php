<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'WelcomeController@index');

Route::get('/admin', 'Admin\AdminController@index');
Route::get('/root', 'Root\RootController@index');


Route::get('/home', 'HomeController@index');

/*
 * Student routes
 */
Route::get('/student', 'Student\StudentController@index');
//register student for bank
Route::get('/student/registerStud', 'Student\RegisterController@showRegStudForm');
Route::post('/student/registerStud', 'Student\RegisterController@registerStud');
//register card for bank
Route::get('/student/registerCard', 'Student\RegisterController@showRegCardForm');
Route::post('/student/registerCard', 'Student\RegisterController@registerCard');
/*
 * Balance routes
 */
//show balance recharge(пополнить) form
Route::get('/student/balanceRecharge', 'Student\BalanceController@showBalanceRechargeForm');
//create recharge
Route::post('/student/balanceRecharge', 'Student\BalanceController@createRecharge');
//create payment notice(извещение)
Route::post('/student/paymentNotice', 'Student\BalanceController@createPaymentNotice');
//get recharge status
Route::get('/student/rechargeStatus', 'Student\BalanceController@getRechargeStatus');
/*
 * Transaction route
 */
Route::post('/student/Transaction', 'Student\TransactionController@Transaction');