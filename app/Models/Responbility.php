<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responbility extends Model
{
    use HasFactory;
    protected $table = 'responsbilities';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function rule(){
        return $this->belongsTo(rule::class);
    }

    
}
