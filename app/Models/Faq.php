<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    const WAITING = 0;
    const ANSWERED = 1;

    protected $table = 'Faq';
    protected $primaryKey = "faq_id";
    protected $guarded = [
        'faq_id'
    ];

}
