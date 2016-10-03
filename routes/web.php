<?php

//Общие
Route::auth();//Стандартные маршруты авторизации
Route::get('/', 'WelcomeController@index');//Главная страница гостя
Route::get('/aboutproject', 'WelcomeController@showAboutProject');//О проекте
    //Заглушки
    Route::get('/logout', 'HomeController@index');//Заглушка GET запроса на /logout
    Route::get('/home', 'HomeController@index');//Заглушка GET запроса на /home
//КонецОбщие

//Администратор
Route::get('/admins/admin', 'Admin\AdminController@index');//Главная страница администратора
Route::get('/admins/requests', 'Admin\RequestController@index');//Запросы администратора

Route::post('/admins/add', 'Admin\AdminController@addElement');//Запрос на добавление ученика
Route::post('/admins/edit', 'Admin\AdminController@editElement');//Запрос на редактирование ученика
Route::post('/admins/students', 'Admin\GetStudentController@index');//Запрос на список учеников администратора
    //Заглушки
    Route::get('/admins/add', 'Admin\AdminController@index');//Заглушка GET запроса на добавление ученика
    Route::get('/admins/edit', 'Admin\AdminController@index');//Заглушка на GET запрос редактирования ученика
//КонецАдминистратор

//ТестБанк
Route::get('/bank', 'Bank\BankController@index');
//Регистрация ученика
Route::get('/bank/registerStud', 'Bank\BankController@registerStud');
Route::post('/bank/registerStud', 'Bank\BankController@registerStud_post');
//Регистрация карты
Route::get('/bank/registerCard', 'Bank\BankController@registerCard');
Route::post('/bank/registerStud', 'Bank\BankController@registerCard_post');
//Запрос на текуший баланс
Route::get('/bank/balanceGet', 'Bank\BalanceController@balanceGet');
Route::post('/bank/balanceGet_get', 'Bank\BalanceController@balanceGet_get');
//Транзакция, где покушал и на сколько
Route::get('/bank/transaction', 'Bank\BalanceController@transaction');
Route::post('/bank/transaction', 'Bank\BalanceController@transaction_post');
//Список пополнений
Route::get('/bank/balanceListRecharges', 'Bank\BalanceController@balanceListRecharges');
Route::post('/bank/balanceListRecharges_get', 'Bank\BalanceController@balanceListRecharges_get');
//Принимаем НОТАЙС от банка по пополнению
Route::get('/bank/balanceNotice', 'Bank\BalanceController@balanceNotice');
Route::post('/bank/balanceNotice', 'Bank\BalanceController@balanceNotice_post');
//Пополнение баланса
Route::get('/bank/balanceRecharge', 'Bank\BalanceController@balanceRecharge');
Route::post('/bank/balanceRecharge', 'Bank\BalanceController@balanceRecharge_post');
//Статус пополнению по ID номеру пополнения из нотайса или списка пополенения
Route::get('/bank/statusRecharge', 'Bank\BalanceController@statusRecharge');
Route::post('/bank/statusRecharge', 'Bank\BalanceController@statusRecharge_get');
//КонецТестБанк



Route::get('/roots/root', 'Root\RootController@index');
Route::get('/roots/schools', 'Root\RootController@showSchoolForm');
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



//QR
Route::get('/qrs/qr', 'Qr\QrController@index');//Главная страница QR
Route::post('/qrs/add', 'Qr\QrController@addElement');//Запрос на добавление элемента (учреждения)
Route::get('/qrinfo/{id}', function(App\Model\Qr\Qr $id){
    return view('qrs.info')->with('id', $id);
});//Страница учреждения (определение по ID)
//КонецQR