<?php

use Illuminate\Http\Request;
use Dev\MakeItEasy\Http\Controllers\MakeitEasyController;
// Route::group(['namespace'=>'Dev\MakeItEasy\Http\Controllers'],function(){
Route::get('check-pack',function(){
    return "hello ";
});
Route::get('make-dynamic-page',[MakeitEasyController::class,'index']);
// });
