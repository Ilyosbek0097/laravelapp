<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('include.home');
});

Route::get('/test', function(){
    return view('include.home');
});

// Route::get('/student', function(){
//     return view('tatu.talaba');
// });
// Route::get('/kurator', function(){
//     return view('tatu.kurator');
// });
// Route::get('/dekan', function(){
//     return view('tatu.dekan');
// });
Route::view('/student','tatu.talaba');
Route::view('/kurator','tatu.kurator');
Route::view('/dekan','tatu.dekan'); 

Route::get('/data', function () {
    return [
        'ism'       =>  'Ilyosbek',
        'familya'   =>  'Saydaliyev',
        'yosh'      =>  '22'
    ];
});

Route::get('/testing',[PagesController::class,'index']);
// Route::get('/test',[PagesController::class,'testing']);
Route::view('/sending','include.forma');
Route::post('/sendform',[PagesController::class,'sendforma']);