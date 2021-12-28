<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\management\categoryController;
use App\Http\Controllers\management\menuController;
use App\Http\Controllers\Profit\profitController;
use App\Http\Controllers\Stock\stockController;
use App\Http\Controllers\management\tableController;
use App\Http\Controllers\management\employeeController;
use App\Http\Controllers\report\reportController;
use App\Http\Controllers\Site\reservationController;
use App\Http\Controllers\Site\orderController;
use App\Http\Controllers\Payment\paymentController;
use App\Http\Controllers\Currency\CurrencyController;
use App\Http\Controllers\feedback\feedbackController;
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

Route::get('/home', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/', function () {
    return view('indexwelcome');
});


Auth::routes();
Route::delete('/menu/{ld}', [menuController::class,'destroy']);
Route::get('/menu', [menuController::class,'index']);
Route::get('/menu/create', [menuController::class,'create']);
Route::post('/menu', [menuController::class,'store']);
Route::put('/menu/{id}', [menuController::class,'update']);
Route::get('/menu/{id}/edit', [menuController::class,'edit']);
Route::get('/menu/element', [menuController::class,'createdMenu']);
Route::get('/menu/chefmenu', [menuController::class,'chefMenu']);
Route::post('/element', [menuController::class,'storeElement']);
Route::get('/admin/profit',[profitController::class,'index']);


Route::delete('/category/{ld}', [categoryController::class,'destroy']);
Route::get('/category', [categoryController::class,'index']);
Route::get('/category/create', [categoryController::class,'create']);
Route::post('/category', [categoryController::class,'store']);
Route::put('/category/{id}', [categoryController::class,'update']);
Route::get('/category/{id}/edit', [categoryController::class,'edit']);


Route::delete('/stock/{ld}', [stockController::class,'destroy']);
Route::get('/stock', [stockController::class,'index']);
Route::get('/stock/create', [stockController::class,'create']);
Route::post('/stock', [stockController::class,'store']);


Route::delete('/tables/{ld}', [tableController::class,'destroy']);
Route::get('/tables', [tableController::class,'index']);
Route::get('/tables/create', [tableController::class,'create']);
Route::post('/tables', [tableController::class,'store']);
Route::put('/tables/{id}', [tableController::class,'update']);
Route::get('/tables/{id}/edit', [tableController::class,'edit']);


Route::delete('/employees/{ld}', [employeeController::class,'destroy']);
Route::get('/employees', [employeeController::class,'index']);
Route::get('/employees/create', [employeeController::class,'create']);
Route::post('/employees', [employeeController::class,'store']);
Route::put('/employees/{id}', [employeeController::class,'update']);
Route::get('/employees/{id}/edit', [employeeController::class,'edit']);



Route::get('/report', [reportController::class,'index']);
Route::get('/report/show', [reportController::class,'show']);



Route::get('/reservation', [reservationController::class,'index']);
Route::get('/reservation/tables',  [reservationController::class,'indexTable']);
Route::post('/reservation/tables', [reservationController::class,'getTable']);
Route::get('/reservation/site/{category}', [reservationController::class,'getMenu']);
Route::get('/reservation/cashier/orderFood', [orderController::class,'orderFood']);
Route::get('/reservation/cashier/confirmOrder', [orderController::class,'confirmOrder']);
Route::post('/reservation/welcome1', [paymentController::class,'savepayment']);
Route::get('/reservation/welcome1', [paymentController::class,'payment']);
Route::get('/reservation/cashier/currency/{id}', [CurrencyController::class,'index']);
Route::post('/reservation/cashier/currency/{id}', [CurrencyController::class,'exchangeCurrency']);


Route::get('/feedBackme', [feedbackController::class,'branch']);
Route::get('/bouns', [feedbackController::class,'employee']);
Route::get('/multi', [feedbackController::class,'multi']);
Route::get('/feedBackme/index/{id}', [feedbackController::class,'index']);
Route::get('/feedBackme/index/feedback/index', [feedbackController::class,'store']);

