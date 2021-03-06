<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'company',
        'company_description',
        'image',
        'designation',
        'role',
        'jlocation',
        'ilocation',
        'package',
        'salary_details',
        'bond',
        'apply_by',
        'selection_details',
        'tenthpercentage',
        'twelfthpercentage',
        'sgpa',
        'backlogs',
        'courses',
        'branches',
        'year',
        'eligibles_geu',
        'eligibles_gehu',
        'eligibles_gehub',
        'verification_token'
    ];

    protected $casts = [
        'courses' => 'json',
        'branches' => 'json',
        'year' => 'json'
    ];
}
