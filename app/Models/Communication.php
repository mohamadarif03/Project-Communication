<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ToCommunication(){
        return $this->hasMany(ToCommunication::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
