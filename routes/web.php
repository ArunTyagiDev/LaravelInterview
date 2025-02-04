<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceContainerController;
use App\Http\Controllers\StaticKeywordController;
use App\http\Controllers\RelationsController;
Route::get('/', function () {
    return view('welcome');
});
Route::match(['get','post'],'test',[ServiceContainerController::class,'index']);
Route::match(['get','post'],'statickeyword',[StaticKeywordController::class,'getcount']);
Route::match(['get','post'],'statickeyword_IncrementCounter',[StaticKeywordController::class,'IncrementCounter']);
Route::match(['get','post'],'onetoone',[RelationsController::class,'onetoone']);
