<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\Cart;


class Category extends Model
{
    public function products(){
        return $this->hasMany('App\models\Product');
    }
}
