<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    const PUBLISH = 1;
    const WAITING = 2;

    protected $primaryKey = "comment_id";
    protected $guarded = [
        'comment_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
