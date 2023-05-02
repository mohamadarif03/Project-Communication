<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToCommunication extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Communication(){
        return $this->belongsTo(Communication::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
