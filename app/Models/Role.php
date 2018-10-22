<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Role extends Model
{

    protected $primaryKey = "role_id";
    protected $guarded = [
        'role_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_name');
    }
}
