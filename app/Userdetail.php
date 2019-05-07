<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    //protecting variable insertion;
    
    protected $table = 'userdetails';

     protected $fillable = [
        'name',
        'Surname',
        'email',
        'phone',
        'gender',
        'dob',
        'comment'
    ];
}
