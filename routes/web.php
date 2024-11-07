<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productlist',[ProductListController::class,'productlist']);
