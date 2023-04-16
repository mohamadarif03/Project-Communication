<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function UserRole(){
        return $this->hasMany(UserRole::class);
    }
    public function FromCommunicationType(){
        return $this->hasMany(FromCommunication::class);
    }
    
}
