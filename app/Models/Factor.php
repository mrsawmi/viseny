<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $table = 'factors';
    protected $primaryKey = "factor_id";
    protected $guarded = [
        'factor_id'
    ];

    const UNCONFIRMED = 1;
    const CONFIRMED = 2;

    public function users()
    {
        return $this->hasOne(User::class,'factor_user_fullName');
    }

    public function order()
    {
        return $this->hasOne(order::class,'factor_order_id');
    }

    public function products()
    {
        return $this->hasMany(tablo::class,'factor_product_id');
    }
}
