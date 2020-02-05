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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Category
Route::get('/', 'AdminController@index')->name('admin');
Route::get('product', 'AdminController@product')->name('product');
Route::get('allcategoryjhj654654jjhb', 'AdminController@allcategory')->name('allcategory');
Route::get('addcategory5445654654bj656', 'AdminController@addcategory')->name('addcategory');
Route::get('editcategory/{id}', 'AdminController@editcategory');
Route::get('delete/cat/{id}', 'CategoryController@deletecat');
Route::get('change/status/{id}', 'CategoryController@active');
Route::get('change/instatus/{id}', 'CategoryController@inactive');
Route::post('add/category', 'CategoryController@store')->name('add-category');
Route::post('update/category/{id}', 'CategoryController@update');

// staff
Route::get('addstaff65654hb', 'AdminController@addstaff')->name('addstaff');
Route::get('allstaff32132321', 'AdminController@allstaff')->name('allstaff');
Route::get('delete/staff/{id}', 'StaffController@deletestaff');
Route::post('add/staff', 'StaffController@store')->name('add-staff');

//subcategory
Route::get('addsubcat6546545654', 'AdminController@addsubcat')->name('addsubcat');
Route::get('allsubcat6565619798', 'AdminController@allsubcat')->name('allsubcat');
Route::get('edit/subcat/{id}', 'AdminController@editsubcat');
Route::get('change/active/{id}', 'SubcatController@active');
Route::get('change/inactive/{id}', 'SubcatController@inactive');
Route::get('delete/subcat/{id}', 'SubcatController@delete');
Route::post('add/subcat', 'SubcatController@store')->name('add/subcat');
Route::post('update/subcat/{id}', 'SubcatController@update');

// Product
Route::get('addproduct564654654hjhjh54635435', 'AdminController@addproduct')->name('addproduct');
Route::get('allproduct564654654hjhjh76543546', 'AdminController@allproduct')->name('allproduct');
Route::post('add/product/submit', 'ProductController@store');

//Report
Route::get('dailyreport564654654hjhjh25896363', 'AdminController@dailypur')->name('dailypur');
Route::get('weekreport56465hjjhb6546546654659', 'AdminController@weekpur')->name('weekpur');
Route::get('monthreport56465hjjhb654946515165', 'AdminController@monthpur')->name('monthpur');
Route::get('summaryreport56465hjjhb654946515165', 'AdminController@summary')->name('summary');