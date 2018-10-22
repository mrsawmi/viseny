<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    const WAITING = 0;
    const ANSWERED = 1;

    protected $primaryKey = "ticket_id";
    protected $guarded = [
        'ticket_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'ticket_user_id');
    }

    public function getTicketStatus()
    {
        return [
            self::ANSWERED => 'پاسخ داده شد!',
            self::WAITING => 'در انتظار پاسخ...'
        ];
    }

    public function tablo()
    {
        return $this->belongsTo(tablo::class, 'ticket_tablo_id');
    }
}
