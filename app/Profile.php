<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id';
    protected $fillable = [
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
}
