<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer_email';
    protected $primaryKey = 'customer_id';
    protected $keyType = 'string';
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    protected $connection = 'mysql';

    public $attributes = [
        'name' => false,
        'phone' => false,
        'age' => false,
        'sex' => false,
        ];

}
