<?php

namespace App;

use App\Role;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\PasswordRestNotification;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, HasRoles;
    use SoftDeletes;

    protected $guard = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'role', 'provider_id', 'user_otp', 'name', 'email', 'password', 'status', 'image', 'phone', 'about',
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

    // public function role()
    // {
    //     return $this->belongsTo('App\Role');
    // }

    public function properties()
    {
        return $this->hasMany('App\Property');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordRestNotification($token));
    }
}
