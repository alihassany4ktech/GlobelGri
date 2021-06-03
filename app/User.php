<?php

namespace App;

use App\Notifications\PasswordRestNotification;
use App\Role;
use Illuminate\Auth\Notifications\ResetPassword;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'role_id', 'provider_id', 'user_otp', 'name', 'email', 'password', 'status', 'image', 'phone', 'about',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->hasMany('App\Role');
    }

    public function properties()
    {
        return $this->hasMany('App\Property');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordRestNotification($token));
    }
}
