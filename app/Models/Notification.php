<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ToNotification(){
        return $this->hasMany(toNotification::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function responsbility(){
        return $this->belongsTo(Responbility::class);
    }

    public function communication(){
        return $this->belongsTo(Communication::class);
    }
}
