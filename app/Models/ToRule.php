<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToRule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rule(){
        return $this->belongsTo(Rule::class);
    }
}
