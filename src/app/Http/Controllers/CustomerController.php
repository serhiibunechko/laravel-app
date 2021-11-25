<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CustomerController extends Controller
{
    public function customer()
    {
        return $this->attributes[''];
    }
}
