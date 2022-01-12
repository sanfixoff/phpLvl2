<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name' , 'cart_products', 'number_phone'];
    use HasFactory;
    protected $casts = [
        'cart_products' => 'array',
    ];
}
