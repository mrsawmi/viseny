<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    const WAITING = 0;
    const ANSWERED = 1;
    const PUBLISHED = 2;

    protected $table = 'Faq';
    protected $primaryKey = "faq_id";
    protected $guarded = [
        'faq_id'
    ];

    public function getFaqStatus()
    {
        return [
            self::WAITING => 'در انتظار پاسخ',
            self::ANSWERED => 'پاسخ داده شده',
            self::PUBLISHED => 'منتشر شده'
        ];
    }

}
