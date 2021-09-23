<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'cart',
        'name',
        'street',
        'city',
        'email',
        'phone',
        'current_date',
        'method'
    ];
}
