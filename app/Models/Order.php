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
        'id',
        'user_id',
        'sub_total',
        'full_name',
        'grand_total',
        'note',
        'address',
        'number_phone',
        'name_user',
    ];
    protected $appends = [
        'user_name',
    ];

    public function items()
    {
        return $this->hasMany(Item::class,'order_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function surcharge(){
        
        return $this->belongsToMany(Surcharge::class,'surcharge_order','order_id','surcharge_id','id','id')->withPivot('name','value');
    }

    public function getUserNameAttribute()
    {
      
       $result= User::select('display_name')->where('id','=',$this->user_id)->get();
       $result = $result[0]->display_name;
        return $result;
    }

   
}
