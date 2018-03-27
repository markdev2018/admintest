<?php
use App\Customer;
use App\Invoice;
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

Route::get('/','MainController@index');
Route::resource('invoice','InvoiceController');
Route::resource('main','MainController');

Route::get('/create',function(){
	$new = new Customer;
	$new->name = 'Customer Name 1';
	$new->save();
	
	$new = new Customer;
	$new->name = 'Customer Name 2';
	$new->save();
	
	$new = new Invoice;
	$new->customer_id = '1';
	$new->invoice_no = '#12324';
	$new->save();
	
	$new = new Invoice;
	$new->customer_id = '1';
	$new->invoice_no = '#56485';
	$new->save();
	
	$new = new Invoice;
	$new->customer_id = '2';
	$new->invoice_no = '#93524';
	$new->save();
	
	$new = new Invoice;
	$new->customer_id = '2';
	$new->invoice_no = '#96666';
	$new->save();
	
});