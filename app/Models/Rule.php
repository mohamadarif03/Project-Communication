<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function communicationType()
    {
        return $this->BelongsTo(CommunicationType::class, 'communication_type_id', 'id');
    }
    public function torule(){
        return $this->hasMany(ToRule::class);
    }
}
