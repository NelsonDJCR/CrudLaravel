<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;


Route::get('/create', function (){
    return view('pages.create');
});
Route::resource('customers', CustomersController::class);