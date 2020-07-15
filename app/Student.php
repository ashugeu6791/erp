<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /*protected $fillable = [
        'userid','name','fname','mname','tenthBoard','tenthPercentage'
        ,'twelfthBoard'
        ,'twelfthPercentage'
        ,'UG'
        ,'UGPercentage',
        'programEnrolledID',
        'enrollmentYear',
        'firstSemResult' ,
        'firstSemPercentage',
        'secondSemResult' ,
        'secondSemPercentage',
        'thirdSemResult' ,
        'thirdSemPercentage',
        'fourthSemResult' ,
        'fourthSemPercentage',
        'fifthSemResult' ,
        'fifthSemPercentage',
        'sixthSemResult' ,
        'sixthSemPercentage',
        'seventhSemResult' ,
        'seventhSemPercentage',
        'eighthSemResult' ,
        'eighthSemPercentage',
        'ninethSemResult' ,
        'ninethSemPercentage',
        'tenthSemResult',
        'tenthSemPercentage',
        'degreeAwarded',
    ];
    */
}
