<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userrole(){
        return $this->hasMany(UserRole::class);
    }
    public function ToCommunication(){
        return $this->hasMany(ToCommunicationType::class);
    }
    public function Communication(){
        return $this->HasMany(Communication::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    public function rule(){
        return $this->hasMany(Rule::class);
    }
    public function projectmember(){
        return $this->hasMany(ProjectMember::class);
    }
    
}
