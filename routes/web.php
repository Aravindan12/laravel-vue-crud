<?php

use Illuminate\Support\Facades\Route;
use App\Isop\Isop;
use App\DateHelper\DateHelper;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('{any}', function () {
//     return view('app');
// })->where('any', '.*');
Route::get('/greet', function() {
    Isop::greet();
});
Route::get('date-class', function(){
  
    DateHelper::dateFormatYMD('10/21/2021');
  
});