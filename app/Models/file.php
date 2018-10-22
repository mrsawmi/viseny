<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    protected $primaryKey = "file_id";
    protected $guarded = [
        'file_id'
    ];

    public function tablo()
    {
        return $this->hasOne(tablo::class,'tablo_file_id');
    }

}
