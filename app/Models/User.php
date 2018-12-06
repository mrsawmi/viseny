<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    const ACTIVE = 1;
    const DEACTIVE = 0;
    const DELETED = 3;

    const  DEFAULT = 0;
    const  BRONZE = 1;
    const  SILVER = 2;
    const  GOLDEN = 3;

    const UNKNOWN = 0;
    const MALE = 1;
    const FEMALE = 2;

    protected $table = 'users';
    protected $primaryKey = "user_id";
    protected $guarded = [
        'user_id'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function messages()
    {
        return $this->belongsTo(Message::class, 'message_user_id');
    }

    public function factors()
    {
        return $this->belongsTo(Factor::class, 'user_fullName');
    }

    public function orders()
    {
        return $this->hasMany(order::class, 'user_id');
    }

    public function comment()
    {
        return $this->hasMany(comment::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'user_group');
    }

    public static function getUserRoles()
    {
        return [
            self::ACTIVE => 'کاربر فعال',
            self::DEACTIVE => 'کاربر غیرفعال',
            self::DELETED => 'کاربر حذف شده'
        ];
    }

    public static function getUserPlans()
    {
        return [
            self::DEFAULT => 'کاربر ساده',
            self::BRONZE => 'پلن برنز',
            self::SILVER => 'پلن نقره ای',
            self::GOLDEN => 'پلن طلایی'
        ];
    }

    public function hasGender($gender)
    {
        return $this->gender == $gender;
    }

    public function checkRole($role_id)
    {
        if ($role_id == 2) {
            return 1;
        } elseif ($role_id == 1) {
            return 2;
        } else {
            return 3;
        }
    }

    public static function getUserGender()
    {
        return [
            self::UNKNOWN => 'نا مشخص',
            self::MALE => 'مرد',
            self::FEMALE => 'زن'
        ];
    }

    public function hasPlan($plan)
    {
        return $this->plan == $plan;
    }

    public function ticket()
    {
        return $this->hasMany(ticket::class, 'ticket_user_id');
    }

}
