<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surcharge extends Model
{

    use HasFactory;

    protected $table = "surcharges";
    protected $fillable = [
        'name',
        'value',
    ];

    public function order (){
        return $this->belongsToMany(Order::class,'surcharge_order')->withPivot('name','value');
    }


}
