<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = "carts";
    protected $fillable=[
       'name',
       'user_id',
       'price',
       'image',
       'total',
       'quantity',
       'product_id',
    ];
    use HasFactory;
}
