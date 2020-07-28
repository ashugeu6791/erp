<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'company',
        'company_description',
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
        'verification_token'
    ];

    protected $casts = [
        'courses' => 'json',
        'branches' => 'json',
        'year' => 'json'
    ];
}
