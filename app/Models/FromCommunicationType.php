<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FromCommunicationType extends Model
{
    use HasFactory;

    protected $table = 'from_communication_types';
    protected $guarded = [];
    public function CommunicationType(){
        return $this->belongsTo(CommunicationType::class);
    }
    public function Role(){
        return $this->belongsTo(Role::class);
    }
}
