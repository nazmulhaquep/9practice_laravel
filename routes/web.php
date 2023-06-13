<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiStepFormController;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('step/create',[MultiStepFormController::class,'create']);
Route::post('step/store',[MultiStepFormController::class, 'store']);

Route::get('test',[TestController::class,'test']);
Route::get('load_form',[TestController::class,'load_form']);
Route::post('generate-barcode',[TestController::class,'generate_barcode']);
Route::get('single-barcode/{id}',[TestController::class,'single_barcode']);
Route::get('all-barcode',[TestController::class,'all_barcode']);
Route::get('search-barcode',[TestController::class,'search_barcode']);
Route::get('print-pdf',[TestController::class,'print_pdf']);