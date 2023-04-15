<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunicationType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rule(){
        return $this->hasMany(rule::class);
    }
    public function FromCommunicationType(){
        return $this->hasMany(FromCommunicationType::class);
    }
    public function ToCommunication(){
        return $this->hasMany(ToCommunicationType::class);
    }
}
