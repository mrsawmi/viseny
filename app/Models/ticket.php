<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    const WAITING = 0;
    const ADMIN_ANSWERED = 1;
    const CLOSED = 2;

    protected $primaryKey = "ticket_id";
    protected $guarded = [
        'ticket_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'ticket_user_id');
    }

    static function getTicketStatus()
    {
        return [
            self::WAITING => 'در انتظار پاسخ...',
            self::ADMIN_ANSWERED => 'پاسخ داده شد',
            self::CLOSED => 'بسته شده',
        ];
    }

    public function tablo()
    {
        return $this->belongsTo(tablo::class, 'ticket_tablo_id');
    }
}
