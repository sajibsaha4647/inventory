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

Auth::routes(['verify' => true]);
//admin routs
Route::get('/', 'adminController@index')->name('');
//user routs
Route::get('admin/all-user', 'userController@index')->name('');
Route::get('admin/add-user', 'userController@adduser')->name('');
Route::get('admin/edit-user/{id}', 'userController@edituser')->name('');
Route::post('admin/updateuser/{id}', 'userController@updateuser')->name('');
Route::get('admin/deleteuser/{id}', 'userController@deleteuser')->name('');
Route::get('admin/viewuser/{id}', 'userController@viewuser')->name('');
Route::post('admin/submituser', 'userController@submituser')->name('');
Route::get('admin/hidden/{id}', 'userController@hidden')->name('');
Route::get('admin/users/search', 'userController@searchuser')->name('');
//reset password
Route::get('admin/resetpassword', 'ResetController@reset')->name('');
Route::post('admin/password/update', 'ResetController@updatepass')->name('');
//resource routes
Route::resource('post','postController');
Route::get('admin/posts', 'postController@allpost')->name('');
//employee routs
Route::get('admin/all-employee', 'employeeController@allemployee')->name('');
Route::get('admin/add-employee', 'employeeController@addemployee')->name('');
Route::get('admin/edit-employee/{id}', 'employeeController@editemployee')->name('');
Route::get('admin/delete-employee/{id}', 'employeeController@deleteemployee')->name('');
Route::post('admin/update-employee/{id}', 'employeeController@updateemployee')->name('');
Route::post('admin/submit-employee', 'employeeController@submitemployee')->name('');
Route::get('admin/hidden-employee/{id}', 'employeeController@hiddenemployee')->name('');
Route::get('admin/users/search', 'employeeController@searchuser')->name('');

//customer routs
Route::get('admin/all-customer', 'customerController@allcustomer')->name('');
Route::get('admin/add-customer', 'customerController@addcustomer')->name('');
Route::get('admin/edit-customer/{id}', 'customerController@editcustomer')->name('');
Route::get('admin/delete-customer/{id}', 'customerController@deletecustomer')->name('');
Route::post('admin/update-customer/{id}', 'customerController@updatecustomer')->name('');
Route::post('admin/submit-customer', 'customerController@submitcustomer')->name('');
Route::get('admin/hidden-customer/{id}', 'customerController@hiddencustomer')->name('');
Route::get('admin/users/search', 'customerController@searchuser')->name('');

//suppliers routs
Route::get('admin/all-suppliers', 'supplierController@allsuppliers')->name('');
Route::get('admin/add-suppliers', 'supplierController@addsuppliers')->name('');
Route::get('admin/edit-suppliers/{id}', 'supplierController@editsuppliers')->name('');
Route::get('admin/delete-suppliers/{id}', 'supplierController@deletesuppliers')->name('');
Route::post('admin/update-suppliers/{id}', 'supplierController@updatesuppliers')->name('');
Route::post('admin/submit-suppliers', 'supplierController@submitsuppliers')->name('');
Route::get('admin/hidden-suppliers/{id}', 'supplierController@hiddensuppliers')->name('');
Route::get('admin/users/search', 'supplierController@searchuser')->name('');

// advanced salary routs
Route::get('admin/all-salary', 'salaryController@allsalary')->name('');
Route::get('admin/add-salary', 'salaryController@addsalary')->name('');
Route::get('admin/edit-salary/{id}', 'salaryController@editsalary')->name('');
Route::get('admin/delete-salary/{id}', 'salaryController@deletesalary')->name('');
Route::post('admin/update-salary/{id}', 'salaryController@updatesalary')->name('');
Route::post('admin/submit-salary', 'salaryController@submitsalary')->name('');
Route::get('admin/hidden-salary/{id}', 'salaryController@hiddensalary')->name('');

//pay salary
Route::get('admin/all-pay-salary', 'paysalaryController@allpaysalary')->name('');
Route::get('admin/add-pay-salary', 'paysalaryController@addpaysalary')->name('');
Route::get('admin/edit-pay-salary/{id}', 'paysalaryController@editpaysalary')->name('');
Route::post('admin/update-pay-salary/{id}', 'paysalaryController@updatepaysalary')->name('');
Route::post('admin/submit-pay-salary', 'paysalaryController@submitpaysalary')->name('');
Route::get('admin/hidden-pay-salary/{id}', 'paysalaryController@hiddenpaysalary')->name('');

//product catagory
Route::get('admin/all-product-catagory', 'productcatagoryController@allcatagory')->name('');
Route::get('admin/add-product-catagory', 'productcatagoryController@addcatagory')->name('');
Route::get('admin/edit-product-catagory/{id}', 'productcatagoryController@editcatagory')->name('');
Route::post('admin/update-product-catagory/{id}', 'productcatagoryController@Updatecatagory')->name('');
Route::post('admin/submit-product-catagory', 'productcatagoryController@Submitcatagory')->name('');
Route::get('admin/hidden-product-catagory/{id}', 'productcatagoryController@hiddencatagory')->name('');

// product  routs
Route::get('admin/all-product', 'productControler@allproduct')->name('');
Route::get('admin/add-product', 'productControler@addproduct')->name('');
Route::get('admin/edit-product/{id}', 'productControler@editproduct')->name('');
Route::get('admin/delete-product/{id}', 'productControler@deleteproduct')->name('');
Route::post('admin/update-product/{id}', 'productControler@updateproduct')->name('');
Route::post('admin/submit-product', 'productControler@submitproduct')->name('');
Route::get('admin/hidden-product/{id}', 'productControler@hiddenproduct')->name('');
Route::get('admin/users/search', 'productControler@searchuser')->name('');

// expence  routs
Route::get('admin/all-expence', 'expenceController@allexpence')->name('');
Route::get('admin/add-expence', 'expenceController@addexpence')->name('');
Route::get('admin/edit-expence/{id}', 'expenceController@editexpence')->name('');
Route::get('admin/delete-expence/{id}', 'expenceController@deleteexpence')->name('');
Route::post('admin/update-expence/{id}', 'expenceController@updateexpence')->name('');
Route::post('admin/submit-expence', 'expenceController@submitexpence')->name('');
Route::get('admin/users/search', 'expenceController@searchuser')->name('');

// todayexpence  routs
Route::get('admin/all-today-expence', 'expenceController@alltodayexpence')->name('');
Route::get('admin/delete-today-expence/{id}', 'expenceController@deletetodayexpence')->name('');

// monthlyexpence  routs
Route::get('admin/all-monthly-expence', 'expenceController@allmonthlyexpence')->name('');
Route::get('admin/delete-monthly-expence/{id}', 'expenceController@deletemonthlyexpence')->name('');

// yearlyexpence  routs
Route::get('admin/all-yearly-expence', 'expenceController@allyearlyexpence')->name('');
Route::get('admin/edit-yearly-expence/{id}', 'expenceController@edityearlyexpence')->name('');
Route::get('admin/delete-yearly-expence/{id}', 'expenceController@deleteyearlyexpence')->name('');
Route::post('admin/update-yearly-expence/{id}', 'expenceController@updateyearlyexpence')->name('');

//attendance routs
Route::get('admin/add-attendence', 'attendanceController@addemployeeattandence')->name('');
Route::get('admin/all-attendence', 'attendanceController@allemployeeattandenceall')->name('');
Route::get('admin/edit-attendence/{id}', 'attendanceController@editattandence')->name('');
Route::post('admin/update-attendence/{id}', 'attendanceController@updateattandence')->name('');
Route::post('admin/submit-attendence', 'attendanceController@submitattandence')->name('attendance.submit');










//all all
