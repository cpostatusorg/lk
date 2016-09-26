<?php

Route::auth();

Route::get('/', 'WelcomeController@index');

Route::get('/logout', 'HomeController@index');

Route::get('/aboutproject', 'WelcomeController@showAboutProject');


Route::get('/admins/admin', 'Admin\AdminController@index');

Route::get('/roots/root', 'Root\RootController@index');
Route::get('/roots/schools', 'Root\RootController@showSchoolForm');

Route::get('/qrs/qr', 'Qr\QrController@index');
Route::post('/qrs/add', 'Qr\QrController@addElement');
Route::get('/qrinfo/{id}', function(App\Model\Qr\Qr $id){
    return view('qrs.info')->with('id', $id);
});

Route::get('/home', 'HomeController@index');

/*
 * Student routes
 */
Route::get('/students/student', 'Student\StudentController@index');
Route::get('/students/options', 'Student\StudentController@showOptionsForm');
//register student for bank
Route::get('/students/registerStud', 'Student\RegisterController@showRegStudForm');
Route::post('/students/registerStud', 'Student\RegisterController@registerStud');
//register card for bank
Route::get('/students/registerCard', 'Student\RegisterController@showRegCardForm');
Route::post('/students/registerCard', 'Student\RegisterController@registerCard');
/*
 * Balance routes
 */
//show balance recharge(пополнить) form
Route::get('/students/balanceRecharge', 'Student\BalanceController@showBalanceRechargeForm');
//create recharge
Route::post('/students/balanceRecharge', 'Student\BalanceController@createRecharge');
//create payment notice(извещение)
Route::post('/students/paymentNotice', 'Student\BalanceController@createPaymentNotice');
//get recharge status
Route::get('/students/rechargeStatus', 'Student\BalanceController@getRechargeStatus');
/*
 * Transaction route
 */
Route::post('/students/Transaction', 'Student\TransactionController@Transaction');