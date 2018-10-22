<?php

namespace App\Models;

use App\Models\order;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{

    const DONE = 1;
    const UNDONE = 0;

    protected $primaryKey = "payment_id";
    protected $guarded = [
        'payment_id'
    ];

    public function orders()
    {
        return $this->hasOne(order::class,'payment_id');
    }

    public static function getPaymentStatus()
    {
        return [
            self::UNDONE => 'انجام نشده',
            self::DONE => 'آنجام شده'
        ];
    }
}
