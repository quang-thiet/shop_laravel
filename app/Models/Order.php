<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $attributes = [
        'status' => 1,
    ];
    protected $fillable = [
        'user_id',
        'sub_total',
        'full_name',
        'grand_total',
        'note'
    ];

    public function items()
    {
        return $this->hasMany(Item::class,'order_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    // products:quantity, price 
    // pivot:quantity, price
    // 1/7: 1x2 - 100 => 200
    // 2/7: id 1 - 200

}
