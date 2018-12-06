<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'ticket_messages';
    protected $primaryKey = "message_id";
    protected $guarded = [
        'message_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }
}
