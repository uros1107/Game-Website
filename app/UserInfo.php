<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_info';  

    protected $fillable = ['birthday','phone_number', 'gender', 'address', 'country', 'state','city', 'post_code','twitter','instagram','facebook', 'user_id'];
}
