<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Finance\DealController;
use App\Http\Controllers\Finance\EmployeeController;
use App\Http\Controllers\Finance\IndexController;
use App\Http\Controllers\Finance\LenderController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LoginController::class,'index'])->name('get_login');

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Deals
Route::get('/deals',[DealController::class,'index'])->middleware('auth')->name('deals');
Route::post('/add_deal',[DealController::class,'store'])->middleware('auth')->name('add_deal');
Route::get('/show_deal/{id}',[DealController::class,'show'])->middleware('auth')->name('show_deal');
Route::post('/deal/upload',[DealController::class,'upload'])->middleware('auth')->name('deal_upload');
Route::delete('/deal/delete',[DealController::class,'destroy'])->middleware('auth')->name('deals.delete');
Route::get('/deal/edit/{deal}',[DealController::class,'edit'])->middleware('auth')->name('deals.edit');
Route::PUT('/deal/update',[DealController::class,'update'])->middleware('auth')->name('deals.update');
// Route::get('/pdf/view',[DealController::class,'upload'])->middleware('auth')->name('deal_upload');
// employee
Route::get('/employees',[EmployeeController::class,'index'])->middleware('auth')->name('employees');
Route::post('/add_employee',[EmployeeController::class,'store'])->middleware('auth')->name('add_employee');
Route::get('/employee/edit/{user}',[EmployeeController::class,'edit'])->middleware('auth')->name('employee.edit');
Route::delete('/employee/delete',[EmployeeController::class,'destroy'])->middleware('auth')->name('employees.delete');
Route::PUT('/employee/update',[EmployeeController::class,'update'])->middleware('auth')->name('employees.update');

// lenders
Route::get('/lenders',[LenderController::class,'index'])->middleware('auth')->name('lenders');
Route::get('/lender/edit/{lender}',[LenderController::class,'edit'])->middleware('auth')->name('lender.edit');
Route::delete('/lender/delete',[LenderController::class,'destroy'])->middleware('auth')->name('lenders.delete');
Route::PUT('/lender/update',[LenderController::class,'update'])->middleware('auth')->name('lenders.update');



Route::get('/invoice',[LenderController::class,'invoice'])->middleware('auth')->name('invoice');
Route::get('/loans',[LenderController::class,'loans'])->middleware('auth')->name('loans');
Route::post('/add_lender',[LenderController::class,'store'])->middleware('auth')->name('add_lender');


//deal lender
Route::post('/assign_lender',[LenderController::class,'assign_lender'])->middleware('auth');