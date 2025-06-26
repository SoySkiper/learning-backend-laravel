<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
    return "Todo un fullstack developer.";
});


Route::get('/backend/{id?}', [BackendController::class, 'get']);
