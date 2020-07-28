<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students_Application extends Model
{
    protected $fillable = [
        'userid','name','fname','mname','email','phone','dob','course','branch','sgpa','company',
        'designation',
        'package',
        'apply_by',
        'verification_token',
    ];
}
