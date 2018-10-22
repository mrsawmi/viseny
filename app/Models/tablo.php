<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tablo extends Model
{
    const WAITNG = 0;
    const PUBLISHED = 1;

    protected $primaryKey = "tablo_id";
    protected $guarded = [
        'tablo_id'
    ];

    public function order()
    {
        return $this->hasMany(order::class, 'order_id');
    }

    public function painter()
    {
        return $this->belongsTo(painter::class, 'tablo_painter_id');
    }

    public function ticket()
    {
        return $this->hasMany(ticket::class,'tablo_id');
    }
    public static function getTabloStatus()
    {
        return [
            self::WAITNG => 'در انتظار تایید',
            self::PUBLISHED => 'تایید شده'
        ];
    }
}
