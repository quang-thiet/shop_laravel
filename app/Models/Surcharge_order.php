<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surcharge_order extends Model
{
    use HasFactory;
    protected $table = "surcharge_order";
    protected $fillable = [
        'name',
        'value',
        'order_id',
        'surcharge_id'
    ];
}
