<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function communicationType(){
        return $this->BelongsTo(CommunicationType::class);
    }
    public function FromCommunicationType(){
        return $this->hasMany(FromCommunicationType::class);
    }
    public function torule(){
        return $this->hasMany(ToRule::class);
    }
    public function fromrule(){
        return $this->hasMany(FromRule::class);
    }
}
