<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table ="users";
    protected $fillable = [
        'name',
        'fname',
        'email',
        'password',
        'holidays',
        //'google2fa_secret',
       // 'start_work',
       // 'salary',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        //'google2fa_secret'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

 /*   public function setGoogle2faSecretAttribute($value)
    {
         $this->attributes['google2fa_secret'] = encrypt($value);
    }
*/
    /**
     * Decrypt the user's google_2fa secret.
     *
     * @param  string  $value
     * @return string
     */
  /*
     public function getGoogle2faSecretAttribute($value)
    {
        return decrypt($value);
    }*/
}
