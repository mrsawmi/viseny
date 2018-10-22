<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $primaryKey = "order_id";
    protected $guarded = [
        'order_id'
    ];

    const WAITING = 0;
    const DONE = 1;

    public function user()
    {
        return $this->belongsTo(User::class, 'order_user_id');
    }

    public function tablo()
    {
        return $this->belongsTo(tablo::class, 'order_tablo_id');
    }

    public function payment()
    {
        return $this->hasOne(payment::class, 'order_payment_id');
    }

    public function getOrderStatus()
    {
        return [
            self::WAITING => 'در دست بررسی!',
            self::DONE => 'انجام شده!'
        ];
    }
}
