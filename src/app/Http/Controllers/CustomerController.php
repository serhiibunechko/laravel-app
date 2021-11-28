<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;
use App\Models\Customer;

class CustomerController extends Controller {

    public function customers() {

        $customers = Customer::all();

        return view('customers', compact('customers'));
    }


}
