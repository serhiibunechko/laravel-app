<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;



Route::get('/customers', [CustomerController::class, 'customers']);



