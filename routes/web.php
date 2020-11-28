<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth'], 'namespace' => 'Admin'], function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('home', 'AdminBaseController@index')->name('admin.home');
    Route::get('profile', 'AdminBaseController@profile')->name('admin.profile');
    Route::resource('userApplication', 'UserLoanApplyController');
    Route::resource('loan', 'LoanCrudController');
    Route::resource('application', 'UserApplicationController');
    Route::resource('userStatement', 'UserPaymentStatementController');
    Route::resource('account', 'AdminAccountController');
    Route::get('admin-statement', 'WithdrawStatement@index')->name('admin.statement');
});
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {
    Route::get('dashboard', 'UserController@index')->middleware('verified')->name('user.dashboard');
    Route::get('loan-apply', 'UserLoanApplyController@userLoan')->name('user.loan-apply');
    Route::get('home', 'UserBaseController@index')->name('user.home');
    Route::get('apply', 'UserBaseController@loanApply')->name('user.apply');
    // Route::get('profile/{$id}', 'UserBaseController@profile')->name('user.profile');
    Route::resource('profile', 'UserProfileController');
    // Route::get('profile', 'UserBaseController@profile')->name('user.profile');
    Route::get('accept/loan', 'AcceptController@acceptLoan')->name('user.accept');
    Route::post('apply/check', 'UserLoanApplyController@store')->name('user.store');
    Route::resource('accept', 'LoanAcceptController');
    Route::resource('payment', 'PaymentCrudController');
    Route::get('statement', 'PaymentStatementController@index')->name('user.statement');

    Route::get('paywithpaypal', 'PaymentController@index');
    Route::post('pay', 'PaymentController@buyConfirm')->name('paypal.pay');
    Route::get('ipnpaypal', 'PaymentController@ipnpaypal')->name('ipn.paypal');
});

Route::get('/', 'BaseController@index')->name('home');
Route::get('about-us', 'BaseController@about')->name('about');
Route::get('service', 'BaseController@service')->name('service');
Route::get('blog', 'BaseController@blog')->name('blog');
Route::get('service/details', 'BaseController@service_details')->name('service-details');
Route::get('blog/details', 'BaseController@blog_details')->name('blog-details');
Route::get('contact', 'BaseController@contact')->name('contact');
Route::post('contact', 'ContactUsController@ContactUsForm')->name('contact.store');
