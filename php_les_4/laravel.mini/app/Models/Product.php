<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\Cart;

class Product extends Model
{
    public function images(){
        return $this->hasMany('App\models\ProductImage');
    }
    public function category(){
        return $this->belongsTo('App\models\Category');
    }
}
