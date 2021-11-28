<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $appends = [
        'name' => false,
        'age' => false,
        'phone' => false,
        'active' => false,
        ];

}
