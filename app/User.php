<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'full_name',
        'username',
        'email',
        'password',
        'avatar',
        'jobs',
        'jobs_where',
        'contact_phone',
        'address_line1',
        'address_line2',
        'address_city',
        'address_province',
        'address_zipcode',
        // 'sex',
        'birthday',
        
        // SOCIAL MEDIA INSERT HERE
        
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

   public function article()
   {
       return $this->hasMany('App\Article');
   }
}
