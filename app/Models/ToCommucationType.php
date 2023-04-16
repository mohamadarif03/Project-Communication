<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToCommucationType extends Model
{
    use HasFactory;

    protected $table = 'to_communication_types';
    protected $guarded = [];

    public function CommunicationType(){
        return $this->belongsTo(CommunicationType::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
