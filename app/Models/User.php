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
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function messages(){
        return $this->hasMany(Message::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function isAdmin(){
        if($this->role->nombre_rol == 'Administrador'){
            return true;
        }
        return false;
    }
    public function roleName(){
        return $this->role->nombre_rol;
    }
    public function activitiesUser(){
        return $this->hasMany(ActivityUser::class);
    }
    public function preferences(){
        return $this->belongsToMany(Preference::class);
    }
}
